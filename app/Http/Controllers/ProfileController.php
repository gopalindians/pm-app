<?php

namespace App\Http\Controllers;

use Auth, DB, Storage;
use Carbon\Carbon;
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
            return redirect('login');
        }
    }

    public function postEditProfile(Request $request)
    {

        $request->validate([
            'name' => 'required|min:1|max:255',
			'email' => 'required',
            'dob' => 'nullable',
			'phone' => 'nullable|min:10|max:15',
            'position' => 'nullable',
            'profile_image' => 'nullable|mimes:jpeg,bmp,png,gif,webp|dimensions:max_width=1024,max_height=768',
        ]);
        $name = $request->post('name');
		$email = $request->post('email');
        $dob = $request->post('dob');
        $phone = $request->post('phone');
        $position = $request->post('position');
        $profile_image = $request->file('profile_image');

        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            //
            //$path = $request->profile_image->store('uploads/profile_image');
            //Storage::disk('local')->put($profile_image, 'Contents');
            $file = Storage::putFile('public/uploads/' . Auth::id() . '/profile_image', $request->file('profile_image'));
            $user=DB::table('users')->where('id',Auth::id())->get();
            Storage::delete('public/'.$user[0]->profile_image);




            DB::table('users')
                ->where('id', Auth::id())
                ->update([
                    'name' => $name,
					'email' => $email,
                    'dob' => $dob,
                    'position' => $position,
                    'profile_image' => str_replace('public/', '', $file),
					'phone' => $phone,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

        } else {

            DB::table('users')
                ->where('id', Auth::id())
                ->update([
                    'name' => $name,
                    'email' => $email,
                    'dob' => $dob,
                    'position' => $position,
					'phone' => $phone,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

        }

        $result = DB::table('users')
            ->where('id', Auth::id())
            ->get();
        return view('profile.edit', ['user' => $result]);


    }
}
