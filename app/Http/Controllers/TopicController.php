<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Carbon\Carbon;

class TopicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('topics.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiGetTopics(Request $request)
    {
        $projectId = $request->route('id');
        $topics = DB::table('topics')
            ->select(
                'topics.id as topic_id',
                'topics.topic_name',
                'topics.topic_body',
                'topics.created_at as topic_created_at',
                'topics.updated_at as topic_updated_at',

                'users.id as creater_id',
                'users.name as creater_name',
                'users.email as creater_email',
                'users.profile_image as creater_profile_image')
            ->join('users', 'users.id', 'topics.creater_id')
            ->where('topics.project_id', $projectId)
            ->orderBy('topics.updated_at', 'desc')
            ->paginate(20);


        foreach ($topics as $item) {

            $topicCommentsCount = DB::table('topic_comments')
                ->where('topic_id', $item->topic_id)
                ->count();

            $topicCommentLatest = DB::table('topic_comments')
                ->where('topic_id', $item->topic_id)
                ->orderBy('updated_at', 'desc')
                ->first();


            if ($topicCommentLatest !== null ) {
                $topicCommentLatest = DB::table('topics')
                    ->where('id', $item->topic_id)
                    ->orderBy('topics.updated_at', 'desc')
                    ->first();
                $topicCommentLatest->comment = $topicCommentLatest->topic_body;
                $topicCommentLatest->poster_id = $topicCommentLatest->creater_id;
                $topicCommentLatest->topic_id = $topicCommentLatest->id;
                unset($topicCommentLatest->topic_body,
                    $topicCommentLatest->creater_id,
                    $topicCommentLatest->topic_name);
            }


            $topicCommentLatestPostedBy = DB::table('topic_comments')
                ->select('users.id as comment_poster_id',
                    'users.name as comment_poster_name',
                    'users.email as comment_poster_email')
                ->where('topic_id', $item->topic_id)
                ->join('users', 'users.id', 'topic_comments.poster_id')
                ->orderBy('topic_comments.updated_at', 'desc')
                ->first();


            if ($topicCommentLatestPostedBy!== null) {
                $topicCommentLatestPostedBy = DB::table('users')
                    ->select('users.id as comment_poster_id',
                        'users.name as comment_poster_name',
                        'users.email as comment_poster_email')
                    ->where('users.id', $item->creater_id)
                    ->first();
            }

            $item->topic_comments_total = $topicCommentsCount;
            $item->topic_comment_latest = $topicCommentLatest;
            $item->topic_comment_latest_posted_by = $topicCommentLatestPostedBy;

            $item->topic_created_at_human = str_replace('before', 'ago', Carbon::parse($item->topic_created_at)->diffForHumans(Carbon::now()));
            $item->topic_created_at_noob = Carbon::parse($item->topic_created_at)->format('l jS \\of F Y h:i:s A');
            $item->topic_updated_at_human = str_replace('before', 'ago', Carbon::parse($item->topic_updated_at)->diffForHumans(Carbon::now()));
            $item->topic_updated_at_noob = Carbon::parse($item->topic_updated_at)->format('l jS \\of F Y h:i:s A');
        }

        return response()->json($topics);
    }
}
