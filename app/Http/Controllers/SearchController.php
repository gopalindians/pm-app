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
            ->where('topic_name', 'like', "%" . $query . "%")
            ->orWhere('topic_body', 'like', "%" . $query . "%")->get();

        $topicComments = DB::table('topic_comments')
            ->where('comment', 'like', "%" . $query . "%")->get();


        $documents = DB::table('documents')
            ->where('document_title', 'like', "%" . $query . "%")
            ->orWhere('document_body', 'like', "%" . $query . "%")
            ->get();

        $result = array_merge($topics->toArray(), $documents->toArray(), $topicComments->toArray());
        return response()->json($result);

    }
}
