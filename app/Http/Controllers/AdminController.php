<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //

    public function index()
    {

        $users = DB::table('users')->get();

        return view('admin.index', ['users' => $users]);

    }
}
