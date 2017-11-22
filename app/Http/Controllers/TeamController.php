<?php

namespace App\Http\Controllers;

use App\Mail\AddToTeamRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Auth, DB, Mail, Crypt;
use Illuminate\View\View;

/**
 * Class TeamController
 * @package App\Http\Controllers
 *
 */
class TeamController extends Controller
{

    /**
     * TeamController constructor.
     */
    public function __construct(Request $request)
    {
        if ($request->getPathInfo() == '/team/join') {

        } else {
            $this->middleware('auth');
        }
    }

    /**
     * Default view
     * @return \Illuminate\Contracts\View\Factory|View
     */
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


    /**
     *
     * Show add new team member form
     *
     * @return \Illuminate\View\View
     */
    public function addNew(): View
    {

        return view('team.add_new');
    }

    /**
     *
     * To send email
     * @param Request $request
     * @return View
     */
    public function postAddNew(Request $request): View
    {
        $userEmail = $request->post('user_email');

        //check for valid email
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $request->session()->flash('error', 'Email is not valid!');
            return view('team.add_new');
        }


        //check if user is already a owner of the project
        $owner = DB::table('users')->where('email', $userEmail)->get();
        if (count($owner) !== 0 && $owner[0]->id == Auth::id()) {
            $request->session()->flash('error', 'You cannot send request to yourself');
            return view('team.add_new');
        }


        //check if the mail is already a team member
        $data = DB::table('users')
            ->where('users.email', $userEmail)
            ->get();
        if (count($data) !== 0) {
            $userData = DB::table('teams')
                ->where('teams.user_id', $data[0]->id)
                ->get();
            if (count($userData)) {
                $request->session()->flash('error', 'This user is already in your team');
                return view('team.add_new');
            }
        }


        //check of valid mail server
        if (!$this->validateEmail($userEmail)) {
            $request->session()->flash('error', 'Email domain is not invalid or down!');
            return view('team.add_new');
        }


        //send email to the valid user
        $user = User::where('id', Auth::id())->first();

        DB::table('team_add_requests')->insert([
            'sender_id' => Auth::id(),
            'receiver_email' => $userEmail,
            'request_accepted' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Mail::to($userEmail)->send(new AddToTeamRequest($user, $userEmail));

        return view('team.add_new');
    }


    /**
     *
     * validate email using dns
     * see https://stackoverflow.com/a/15098724/1847730
     * @param $email
     * @return bool
     *
     */
    private function validateEmail($email): bool
    {
        list($user, $domain) = explode('@', $email);
        if (checkdnsrr($domain, 'MX')) {
            return true;
        }
        return false;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getJoin(Request $request)
    {
        $sender = $request->get('sender');

        $result = DB::table('users')->where('email', $sender)->get();

        // if sender email not found in database send for sign up

        if (count($result) == 0) {
            return redirect('/register');
        }

        //check if sender exists
        //check if receiver is already a member
        //check if sender(project owner) has sent the add request to the joiner(person who got the email)


    }


    public function getJoinPrompt(Request $request)
    {

        $key = $request->get('key');

        list($sender, $receiver) = explode('.', $key);

        try {
            $senderDecrypted = Crypt::decryptString($sender);
            $receiverDecrypted = Crypt::decryptString($receiver);
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Invalid request');
            return view('team.join_prompt');
        }


        //check if the sender exists in database
        $checkSender = DB::table('users')->where('email', $senderDecrypted)->get();

        if (count($checkSender) === 0) {
            $request->session()->flash('error', 'Invalid request');
            return view('team.join_prompt');
        }

        //check if sender has actually sent the request to sender
        $data = DB::table('team_add_requests')
            ->where('sender_id', $checkSender[0]->id)
            ->where('receiver_email', $receiverDecrypted)
            ->get();


        if (count($data) === 0) {
            $request->session()->flash('error', 'Invalid request');
            return view('team.join_prompt');
        }


        dump($senderDecrypted);
        dump($receiverDecrypted);

        return view('team.join_prompt', [
            'sender' => $checkSender,
            'receiverEmail' => $receiverDecrypted,
        ]);

    }
}