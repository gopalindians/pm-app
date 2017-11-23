<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request, DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $sender = Request::post('sender');
        $receiver = Request::post('receiver');
        $from = Request::post('from');


        if (isset($from) && $from == 'join_prompt') {

            //create new user
            /*$id = DB::table('users')->insertGetId([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);*/


            $returnable = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
                ]);

            $senderData = DB::table('users')->where('email', $sender)->get();
            $receiverData = DB::table('users')->where('email', $receiver)->get();


            DB::table('team_add_requests')
                ->where('receiver_email', $receiver)
                ->where('sender_id', $senderData[0]->id)
                ->update([
                    'request_accepted' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);


            //add new user to team
            DB::table('teams')
                ->insert([
                    'owner_id' => $senderData[0]->id,
                    'user_id' => $receiverData[0]->id,
                    'confirmed' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

            Request::session()->flash('success', 'Welcome! you are now part of '. $senderData[0]->email.'\'s team.');
            return $returnable;

        } else {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
    }
}
