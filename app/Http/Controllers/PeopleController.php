<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PeopleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {


        $peopleId = $request->route('people_id');
        $result = DB::table('users')->where(
            'id', $peopleId
        )->get();

        if(count($result)==0){
            return abort(404);
        }


        return view('people.index');
    }

    public function getPeople(Request $request)
    {
        $peopleId = $request->route('people_id');
        $result = DB::table('users')->where(
            'id', $peopleId
        )->get();

        foreach ($result as $item) {
            unset($item->password,$item->remember_token);
        }
        return response()->json($result[0]);
    }
}
