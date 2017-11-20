<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth, DB;

class ProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $id = Auth::id();

        $result = DB::table('users')->where(
            'id', '=', $id
        )->get();

        dump($result);
        return view('profile.index', ['user' => $result ]);

    }
}
