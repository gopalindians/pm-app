<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPeople(Request $request)
    {
        $peopleId = $request->route('people_id');

        $result = DB::table('users')->where(
            'id', $peopleId
        )->get();
        return view('people.index', ['user' => $result]);

    }
}
