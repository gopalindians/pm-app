<?php

namespace App\Http\Controllers;

use Auth, DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index():View
    {
        $id = Auth::id();
        $projects = DB::table('projects')
            ->join('users', 'users.id', '=', 'projects.owner_id')
            ->where('owner_id', '=', $id)
            ->get();
        dump($projects);
        return view('project.index', ['projects' => $projects]);
    }

    public function createProject():View
    {
        return view('project.create_new');
    }

    public function postCreateProject(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|max:255',
            'project_description' => 'required',
        ]);

        //DB::table('projects')->;

        return view('project.create_new');

    }
}
