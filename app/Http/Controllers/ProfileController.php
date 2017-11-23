<?php

namespace App\Http\Controllers;

use Auth, DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Handles the profile related operations
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Default view for ProfileController
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $result = DB::table('users')->where(
            'id', Auth::id()
        )->get();
        return view('profile.index', ['user' => $result]);
    }

    public function getProfile(Request $request)
    {
        $id = $request->route('id');
        $result = DB::table('users')->where(
            'id', $id
        )->get();
        return view('profile.index', ['user' => $result]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function editProfile(Request $request)
    {
        $id = $request->route('id');
        if ($id == Auth::id()) {
            $result = DB::table('users')->where(
                'id', $id
            )->get();
            return view('profile.edit', ['user' => $result]);
        } else {
            Auth::logout();
            $request->session()->flash('info', 'Login before editing profile');
          return  redirect('login');
        }
    }

    public function postEditProfile(Request $request)
    {
        dump($request->file('profileImage'));


    }
}
