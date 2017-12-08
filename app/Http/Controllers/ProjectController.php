<?php

namespace App\Http\Controllers;

use App\CH;
use Auth, DB;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class ProjectController
 *
 * @package App\Http\Controllers
 * @author  : @gopalindians
 */
class ProjectController extends Controller
{

    /**
     * ProjectController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Default view
     *
     * @return View
     */
    public function index(): View
    {

        $id = Auth::id();
        $projects = DB::table('projects')
            ->select(
                'projects.id as project_id',
                'projects.owner_id as project_owner_id',
                'projects.project_name',
                'projects.project_description',
                'projects.state as project_state',
                'projects.created_at as project_created_at',
                'projects.updated_at as project_updated_at',
                'users.id as owner_id',
                'users.name as owner_name',
                'users.email as owner_email'
            )
            ->join('users', 'users.id', '=', 'projects.owner_id')
            ->where('owner_id', '=', $id)
            ->orderBy('project_updated_at','desc')
            ->paginate(7);
        foreach ($projects as $project) {
            $project->project_created_at = str_replace('before', 'ago', Carbon::parse($project->project_created_at)->diffForHumans(Carbon::now()));
            $project->project_updated_at = str_replace('before', 'ago', Carbon::parse($project->project_updated_at)->diffForHumans(Carbon::now()));
        }

        return view('project.index', ['projects' => $projects]);

    }

    /**
     * @return View
     */
    public function createProject(): View
    {
        return view('project.create_new');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function postCreateProject(Request $request)
    {

        $id = DB::table('projects')->insertGetId([
                'owner_id' => Auth::id(),
                'project_name' => $request->post('project_name'),
                'project_description' => $request->post('project_description'),
                'state' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );


        if (!empty($id)) {
            $data['type'] = 'success';
            $data['message'] = 'Project created successfully! Go to Project';
            $data['status_code'] = Response::HTTP_CREATED;
            $data['project_url'] = CH::getUrl('project/'.$id);
            return response()->json(['data' => $data]);
        } else {

            $data['type'] = 'error';
            $data['message'] = 'Unable to create Project!';
            $data['status_code'] = Response::HTTP_INTERNAL_SERVER_ERROR;
            return response()->json(['data' => $data]);
        }

    }


    /**
     * To show the Project detail
     *
     * @param \Illuminate\Http\Request $request laravel inbuilt object
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $id = $request->route('id');

        $project = DB::table('projects')
            ->where('id', '=', $id)
            ->get();

        return view('project.view', ['project' => $project]);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiGetProjects(): JsonResponse
    {
        $id = Auth::id();
        $projects = DB::table('projects')
            ->select(
                'projects.id as project_id',
                'projects.owner_id as project_owner_id',
                'projects.project_name',
                'projects.project_description',
                'projects.state as project_state',
                'projects.created_at as project_created_at',
                'projects.updated_at as project_updated_at',

                'users.id as owner_id',
                'users.name as owner_name',
                'users.email as owner_email'
            )
            ->join('users', 'users.id', '=', 'projects.owner_id')
            ->where('owner_id', '=', $id)
            ->paginate(2);
        foreach ($projects as $project) {
            $project->project_created_at = str_replace('before', 'ago', Carbon::parse($project->project_created_at)->diffForHumans(Carbon::now()));
            $project->project_updated_at = str_replace('before', 'ago', Carbon::parse($project->project_updated_at)->diffForHumans(Carbon::now()));
        }


        return response()->json($projects);
    }


    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiGetProject(Request $request)
    {
        $id = $request->route('id');

        $project = DB::table('projects')
            ->select(
                'projects.id as project_id',
                'projects.owner_id as project_owner_id',
                'projects.project_name',
                'projects.project_description',
                'projects.state as project_state',
                'projects.created_at as project_created_at',
                'projects.updated_at as project_updated_at')
            ->where('projects.id', '=', $id)
            ->get();


        $totalTopics = DB::table('topics')
            ->where('project_id', $id)
            ->count();


        foreach ($project as $item) {


            //documents
            $item->total_documents = DB::table('documents')->where('project_id', $id)->count();
            $item->document_detail = DB::table('documents')
                ->select('documents.*', 'users.name as user_name')
                ->join('users', 'users.id', 'documents.creator_id')
                ->where('project_id', $id)->orderBy('documents.updated_at', 'desc')->limit(5)->get();

            foreach ($item->document_detail as $dd) {
                $dd->created_at_human = str_replace('before', 'ago', Carbon::parse($dd->created_at)->diffForHumans(Carbon::now()));
                $dd->created_at_noob = Carbon::parse($dd->created_at)->format('l jS \\of F Y h:i:s A');
                $dd->updated_at_human = str_replace('before', 'ago', Carbon::parse($dd->updated_at)->diffForHumans(Carbon::now()));
                $dd->updated_at_noob = Carbon::parse($dd->updated_at)->format('l jS \\of F Y h:i:s A');
            }


            $item->topic_detail = DB::table('topics')
                ->select('topics.*')
                ->where('topics.project_id', $id)
                ->orderBy('topics.updated_at', 'desc')->limit(5)->get();

            //topic
            foreach ($item->topic_detail as $i) {
                $i->latest_comment = DB::table('topic_comments')->where('topic_id', $i->id)->orderBy('updated_at', 'desc')->first();

                $i->created_at_human = str_replace('before', 'ago', Carbon::parse($i->created_at)->diffForHumans(Carbon::now()));
                $i->created_at_noob = Carbon::parse($i->created_at)->format('l jS \\of F Y h:i:s A');
                $i->updated_at_human = str_replace('before', 'ago', Carbon::parse($i->updated_at)->diffForHumans(Carbon::now()));
                $i->updated_at_noob = Carbon::parse($i->updated_at)->format('l jS \\of F Y h:i:s A');


                $i->total_comments = DB::table('topic_comments')->where('topic_id', $i->id)->orderBy('updated_at', 'desc')->count();

                if (count($i->latest_comment) === 0) {
                    $i->latest_comment_by = DB::table('users')->select('name')->where('id', $i->creater_id)->first();
                } else {
                    $i->latest_comment_by = DB::table('users')->select('name')->where('id', $i->latest_comment->poster_id)->first();

                    $i->latest_comment->created_at_human = str_replace('before', 'ago', Carbon::parse($i->latest_comment->created_at)->diffForHumans(Carbon::now()));
                    $i->latest_comment->created_at_noob = Carbon::parse($i->latest_comment->created_at)->format('l jS \\of F Y h:i:s A');
                    $i->latest_comment->updated_at_human = str_replace('before', 'ago', Carbon::parse($i->latest_comment->updated_at)->diffForHumans(Carbon::now()));
                    $i->latest_comment->updated_at_noob = Carbon::parse($i->latest_comment->updated_at)->format('l jS \\of F Y h:i:s A');


                }
            }

            $item->total_topics = $totalTopics;
            $item->project_created_at = str_replace('before', 'ago', Carbon::parse($item->project_created_at)->diffForHumans(Carbon::now()));
            $item->project_updated_at = str_replace('before', 'ago', Carbon::parse($item->project_updated_at)->diffForHumans(Carbon::now()));


            $totalTopics = DB::table('topics')
                ->where('project_id', $id)
                ->count();


            $totalDocuments = DB::table('documents')
                ->where('project_id', $id)
                ->count();

            foreach ($project as $item) {

                $item->total_documents = $totalDocuments;

                $item->document_detail = DB::table('documents')
                    ->select('documents.*')
                    ->where('documents.project_id', $id)
                    ->orderBy('documents.updated_at', 'desc')->limit(5)->get();


                foreach ($item->document_detail as $dd) {
                    $dd->created_by = DB::table('users')->select('users.name')->where('id', $dd->creator_id)->first();

                    $dd->created_at_human = str_replace('before', 'ago', Carbon::parse($dd->created_at)->diffForHumans(Carbon::now()));
                    $dd->created_at_noob = Carbon::parse($dd->created_at)->format('l jS \\of F Y h:i:s A');
                    $dd->updated_at_human = str_replace('before', 'ago', Carbon::parse($dd->updated_at)->diffForHumans(Carbon::now()));
                    $dd->updated_at_noob = Carbon::parse($dd->updated_at)->format('l jS \\of F Y h:i:s A');
                }


                $item->topic_detail = DB::table('topics')
                    ->select('topics.*')
                    ->where('topics.project_id', $id)
                    ->orderBy('topics.updated_at', 'desc')->limit(5)->get();

                foreach ($item->topic_detail as $i) {
                    $i->latest_comment = DB::table('topic_comments')->where('topic_id', $i->id)->orderBy('updated_at', 'desc')->first();

                    $i->created_at_human = str_replace('before', 'ago', Carbon::parse($i->created_at)->diffForHumans(Carbon::now()));
                    $i->created_at_noob = Carbon::parse($i->created_at)->format('l jS \\of F Y h:i:s A');
                    $i->updated_at_human = str_replace('before', 'ago', Carbon::parse($i->updated_at)->diffForHumans(Carbon::now()));
                    $i->updated_at_noob = Carbon::parse($i->updated_at)->format('l jS \\of F Y h:i:s A');


                    $i->total_comments = DB::table('topic_comments')->where('topic_id', $i->id)->orderBy('updated_at', 'desc')->count();

                    if (count($i->latest_comment) === 0) {
                        $i->latest_comment_by = DB::table('users')->select('name')->where('id', $i->creater_id)->first();
                    } else {
                        $i->latest_comment_by = DB::table('users')->select('name')->where('id', $i->latest_comment->poster_id)->first();

                        $i->latest_comment->created_at_human = str_replace('before', 'ago', Carbon::parse($i->latest_comment->created_at)->diffForHumans(Carbon::now()));
                        $i->latest_comment->created_at_noob = Carbon::parse($i->latest_comment->created_at)->format('l jS \\of F Y h:i:s A');
                        $i->latest_comment->updated_at_human = str_replace('before', 'ago', Carbon::parse($i->latest_comment->updated_at)->diffForHumans(Carbon::now()));
                        $i->latest_comment->updated_at_noob = Carbon::parse($i->latest_comment->updated_at)->format('l jS \\of F Y h:i:s A');


                    }

                }

                $item->total_topics = $totalTopics;
                $item->project_created_at = str_replace('before', 'ago', Carbon::parse($item->project_created_at)->diffForHumans(Carbon::now()));
                $item->project_updated_at = str_replace('before', 'ago', Carbon::parse($item->project_updated_at)->diffForHumans(Carbon::now()));
            }


            return response()->json($project[0]);
        }


    }
}