<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/**
 * Class SearchController
 * @package App\Http\Controllers
 */
class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSearch()
    {
        return view('search.index');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSearchQuery(Request $request)
    {
        $query = $request->get('q');
        $topics = DB::table('topics')
            ->join('projects', 'projects.id', 'topics.project_id')
            ->join('users', 'users.id', 'topics.creater_id')
            ->select(
                'projects.project_name as project_name_from_topic', 'topics.*',
                'users.profile_image as profile_image_from_topic', 'users.id as user_id', 'topics.*')
            ->where('topic_name', 'like', "%" . $query . "%")
            ->orWhere('topic_body', 'like', "%" . $query . "%")->get();

        $topicComments = DB::table('topic_comments')
            ->join('projects', 'projects.id', 'topic_comments.project_id')
            ->join('users', 'users.id', 'topic_comments.poster_id')
            ->select('projects.project_name as project_name_from_topic_comments', 'topic_comments.*',
                'users.profile_image as profile_image_from_topic', 'users.id as user_id')
            ->where('comment', 'like', "%" . $query . "%")->get();


        $documents = DB::table('documents')
            ->join('projects', 'projects.id', 'documents.project_id')
            ->join('users', 'users.id', 'documents.creator_id')
            ->select('projects.project_name as project_name_from_document', 'documents.*',
                'users.profile_image as profile_image_from_topic', 'users.id as user_id')
            ->where('document_title', 'like', "%" . $query . "%")
            ->orWhere('document_body', 'like', "%" . $query . "%")
            ->get();


        $result = array_merge($topics->toArray(), $documents->toArray(), $topicComments->toArray());
        return response()->json($result);

    }
}
