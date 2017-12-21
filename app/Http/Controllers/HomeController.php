<?php

namespace App\Http\Controllers;

use Auth, DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $projects = DB::table('project_members')
            ->select(
                'projects.id as project_id',
                'projects.owner_id as project_owner_id',
                'projects.project_name',
                'projects.project_description',
                'projects.state as project_state',
                'projects.created_at as project_created_at',
                'projects.updated_at as project_updated_at',
                'project_members.*'
            )->join('projects', 'projects.id', '=', 'project_members.project_id')
            ->where('project_members.member_id', '=', Auth::id())
            ->orderBy('project_updated_at', 'desc')
            ->paginate(7);

        foreach ($projects as $project) {
            if ($project->project_owner_id == Auth::id()) {
                $project->is_owner = true;
            } else {
                $project->is_owner = false;
            }
            $project->project_created_at = str_replace('before', 'ago', Carbon::parse($project->project_created_at)->diffForHumans(Carbon::now()));
            $project->project_updated_at = str_replace('before', 'ago', Carbon::parse($project->project_updated_at)->diffForHumans(Carbon::now()));
        }


        return view('home', ['projects' => $projects]);
    }
}
