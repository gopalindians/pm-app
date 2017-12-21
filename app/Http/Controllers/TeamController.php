<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessAddToTeamEmailRequest;
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
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        if ($request->getPathInfo() == '/team/join_prompt' || $request->getPathInfo() == '/team/join') {

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
        $teams = DB::table('teams')
            ->select(
                'users.name as member_name',
                'users.email as member_email',
                'users.id as member_id',
                'users.position as member_position'
            )
            ->join('users', 'users.id', '=', 'teams.user_id')
            ->where('owner_id', '=', Auth::id())
            ->orderBy('teams.updated_at', 'desc')
            ->paginate(5);


      /*  $projectIds = DB::table('project_members')
            ->select(
                'project_members.project_id'
            )->where('project_members.member_id', '=', Auth::id())
            ->orderBy('teams.updated_at', 'desc')
            ->get();


        foreach ($projectIds as $key => $projectId) {
            $projectIds[$key] = DB::table('project_members')
                ->select('project_members.member_id')
                ->where('project_members.project_id', $projectId->project_id)
                ->get();
        }

        dump($projectIds);

        //$projectIds = $projectIds->toArray();

        dd();
        dump($projectIds);


        $projectMembers = [];


        foreach ($projectIds as $item) {
            $projectMembers[] = array_unique(DB::table('project_members')
                ->select('project_members.member_id')
                ->where('project_members.project_id', $item->project_id)
                ->get()->toArray(), SORT_REGULAR);
        }

        // $projectMembers = array_unique($projectMembers, SORT_REGULAR);

        dump($projectMembers);

        dd();

        foreach ($projectMembers as $key => $projectMember) {


            foreach ($projectMember->toArray() as $k => $item) {


                if ($item->member_id == Auth::id()) {
                    unset($projectMember->toArray()[$k]);
                } else {
                    $projectMember->toArray()[$k] = DB::table('users')
                        ->select('users.name as member_name',
                            'users.email as member_email',
                            'users.id as member_id',
                            'users.position as member_position',
                            'users.profile_image as member_profile_image'
                        )
                        ->where('users.id', $item->member_id)->get()[0];
                }

            }


        }

        dump($projectMember);

        dd();*/

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
        $receiverData = DB::table('users')
            ->where('users.email', $userEmail)
            ->get();
        if (count($receiverData) !== 0) {
            $userData = DB::table('teams')
                ->where('teams.user_id', $receiverData[0]->id)
                ->where('teams.owner_id', Auth::id())
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
        ProcessAddToTeamEmailRequest::dispatch($userEmail, $user);

        $request->session()->flash('success', 'Mail sent successfully!');
        return view('team.add_new');
    }

    /**
     * Show screen after user click on the email
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
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


        //check if the sender does not exists in database
        $checkSender = DB::table('users')->where('email', $senderDecrypted)->get();
        if (count($checkSender) === 0) {
            $request->session()->flash('error', 'Invalid request');
            return view('team.join_prompt');
        }

        //check if sender has actually sent the request to sender
        $teamAddRequestsData = DB::table('team_add_requests')
            ->where('sender_id', $checkSender[0]->id)
            ->where('receiver_email', $receiverDecrypted)
            ->get();
        if (count($teamAddRequestsData) === 0) {
            $request->session()->flash('error', 'Invalid request');
            return view('team.join_prompt');
        }

        //check if receiver is already a member of sender
        $senderData = DB::table('users')->where(
            'email', $senderDecrypted)->get();
        $receiverData = DB::table('users')->where(
            'email', $receiverDecrypted)->get();

        //if receiver is a registered user
        if (count($receiverData) !== 0) {
            $checkAlreadyAddedTeamMember = DB::table('teams')
                ->where('owner_id', $senderData[0]->id)
                ->where('user_id', $receiverData[0]->id)
                ->get();
            if (count($checkAlreadyAddedTeamMember) !== 0) {
                //if the receiver is not logged in, send to login
                if (Auth::id() === null) {
                    $request->session()->flash('info', 'You are already a member of ' . $senderDecrypted . '\'s team. just login to continue');
                    return redirect('login?key=' . $sender . '.' . $receiver . '&from=email_click');
                }
                $request->session()->flash('info', 'You are already a member of ' . $senderDecrypted . '\'s team.');
                return redirect('\home');
            }

            // check for other user(user who is different than logged in user)
            Auth::logout();
            return view('team.join_prompt', [
                'sender' => $checkSender,
                'receiverEmail' => $receiverDecrypted,
            ]);
        } else {
            //if the user is not a registered user
            return view('team.join_prompt', [
                'sender' => $checkSender,
                'receiverEmail' => $receiverDecrypted,
            ]);
        }

    }

    /**
     *
     * handle accept request from user based on join_prompt
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postJoin(Request $request)
    {
        $senderEmail = $request->post('senderEmail');
        $senderId = $request->post('senderId');
        $receiverEmail = $request->post('receiverEmail');
        $senderEmailEncrypted = Crypt::encryptString($senderEmail);
        $receiverEmailEncrypted = Crypt::encryptString($receiverEmail);

        //check if the new user is already a customer
        //if not send to registration form
        $receiverData = DB::table('users')->where('email', $receiverEmail)->get();
        if (count($receiverData) === 0) {

            return redirect('/register?key=' . $senderEmailEncrypted . '.' . $receiverEmailEncrypted . '&from=join_prompt');
        }


        //if user is already a customer
        //check if already logged in
        $currentUserData = DB::table('users')->where('id', Auth::id())->get();

        if (count($currentUserData) !== 0 && $currentUserData[0]->email === $receiverData[0]->email) {
            //update the team_add_requests table
            DB::table('team_add_requests')
                ->update([
                    'sender_id' => $senderId,
                    'receiver_email' => $receiverEmail,
                    'request_accepted' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ])
                ->where('sender_id', $senderId)
                ->where('receiver_email', $receiverEmail);


            //save data in teams table
            DB::table('teams')
                ->insert([
                    'owner_id' => $senderId,
                    'user_id' => $receiverData[0]->id,
                    'confirmed' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);


            $request->session()->flash('success', 'Congrats! you are now part of ' . $senderEmail . '\'s team.');
            return redirect('/home');
        }

        //update the team_add_requests table
        DB::table('team_add_requests')
            ->where([
                ['sender_id', '=', $senderId],
                ['receiver_email', '=', $receiverEmail]
            ])
            ->update([
                'sender_id' => $senderId,
                'receiver_email' => $receiverEmail,
                'request_accepted' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);


        //save data in teams table
        DB::table('teams')->insert([
            'owner_id' => $senderId,
            'user_id' => $receiverData[0]->id,
            'confirmed' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        $request->session()->flash('info', 'Please login to continue in ' . $senderEmail . '\'s team.');
        return redirect('login?key=' . $senderEmailEncrypted . '.' . $receiverEmailEncrypted . '&from=email_click');


        //$result = DB::table('users')->where('email', $sender)->get();

        // if sender email not found in database send for sign up

        /* if (count($result) == 0) {
             return redirect('/register');
         }*/

        //check if sender exists
        //check if receiver is already a member
        //check if sender(project owner) has sent the add request to the joiner(person who got the email)
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
}