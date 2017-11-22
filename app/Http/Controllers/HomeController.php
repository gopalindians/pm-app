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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('home');
    }*/
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
            ->paginate(2);
        //dump($projects);

        return view('home', ['projects' => $projects]);
    }
}
