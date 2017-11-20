<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth, DB;

class TeamController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $id = Auth::id();
        $teams = DB::table('teams')
            ->select(
                'users.name as member_name',
                'users.email as member_email',
                'users.id as member_id'
            )
            ->rightJoin('users', 'users.id', '=', 'teams.user_id')
            ->where('owner_id', '=', $id)
            ->get();

        return view('team.index', ['teams' => $teams]);
    }
}
