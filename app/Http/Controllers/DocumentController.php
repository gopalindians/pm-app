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
            ->paginate(5);

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
        $body = $request->post('document_title');
        $projectId = $request->route('id');
        $projectName = $request->route('name');

        $newDocumentId = DB::table('documents')->insertGetId([
            'project_id' => $projectId,
            'creator_id' => Auth::id(),
            'document_title' => $title,
            'document_body' => $body,
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

        return response()->json($document);
    }
}
