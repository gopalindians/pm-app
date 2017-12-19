<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth, DB;

class DocumentController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');

    }

    public function getDocuments()
    {
        return view('documents.index');
    }

    public function apiGetDocuments(Request $request)
    {

        $projectId = $request->route('id');


        $documents = DB::table('documents')
            ->where('project_id', $projectId)
            ->orderBy('updated_at', 'desc')
            ->paginate(6);

        foreach ($documents as $doc) {

            $doc->created_by = DB::table('users')->select('name')->where('id', $doc->creator_id)->first();
            $doc->created_at_human = str_replace('before', 'ago', Carbon::parse($doc->created_at)->diffForHumans(Carbon::now()));
            $doc->created_at_noob = Carbon::parse($doc->created_at)->format('l jS \\of F Y h:i:s A');
            $doc->updated_at_human = str_replace('before', 'ago', Carbon::parse($doc->updated_at)->diffForHumans(Carbon::now()));
            $doc->updated_at_noob = Carbon::parse($doc->updated_at)->format('l jS \\of F Y h:i:s A');
        }
        return response()->json($documents);
    }

    public function getNewDocumentView()
    {
        return view('documents.create_new');

    }

    public function postNewDocument(Request $request)
    {

        $title = $request->post('document_title');
        $body = $request->post('document_body');
        $projectId = $request->route('id');
        $projectName = $request->route('name');


        $newDocumentId = DB::table('documents')->insertGetId([
            'project_id' => $projectId,
            'creator_id' => Auth::id(),
            'document_title' => isset($title) ? $title : '',
            'document_body' => isset($body) ? $body : '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/project/' . $projectId . '/' . $projectName . '/document/' . $newDocumentId);
    }

    public function getDocument(Request $request)
    {
        return view('documents.view');
    }

    public function apiGetDocument(Request $request)
    {
        $documentId = $request->route('documentId');
        $projectId = $request->route('id');

        $document = DB::table('documents')->where([
            'project_id' => $projectId,
            'id' => $documentId
        ])->first();
        $document->comments = DB::table('document_comments')
            ->join('users', 'users.id', 'document_comments.poster_id')
            ->select('users.name as user_name', 'document_comments.*')
            ->where('document_id', $document->id)
            ->get();
        return response()->json($document);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiPostDocumentComment(Request $request)
    {
        $documentComment = $request->post('document_comment');
        $projectId = $request->route('id');
        $documentId = $request->route('documentId');


        $commentId = DB::table('document_comments')
            ->insertGetId([
                'project_id' => $projectId,
                'document_id' => $documentId,
                'poster_id' => Auth::id(),
                'comment' => $documentComment,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        $commentData = DB::table('document_comments')
            ->join('users', 'users.id', 'document_comments.poster_id')
            ->select('users.name as user_name', 'document_comments.*')
            ->where('document_comments.id', $commentId)
            ->get();

        DB::table('documents')
            ->where('id', $documentId)
            ->update(['updated_at' => Carbon::now()]);

        DB::table('projects')
            ->where('id', $projectId)
            ->update(['updated_at' => Carbon::now()]);


        $response['message'] = 'Comment posted successfully!';
        $response['type'] = 'SUCCESS';
        $response['data'] = $commentData[0];
        return response()->json($response);
    }

    public function getEditDocument()
    {
        return view('documents.edit');

    }

    public function postEditDocument(Request $request)
    {
        $documentId = $request->route('documentId');
        $projectId = $request->route('id');
        $projectName = $request->route('name');


        $documentTitle = $request->post('document_title');
        $documentBody = $request->post('document_body');

        DB::table('documents')->where('documents.id', $documentId)
            ->update([
                'document_title' => isset($documentTitle) ? $documentTitle : '',
                'document_body' => isset($documentBody) ? $documentBody : '',
                'updated_at' => Carbon::now(),
            ]);

        DB::table('projects')
            ->where('id', $projectId)
            ->update(['updated_at' => Carbon::now()]);
        return response()->redirectTo(url('/project/' . $projectId . '/' . $projectName . '/document/' . $documentId));


    }
}
