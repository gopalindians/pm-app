<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth, DB;
use Illuminate\View\View;

class TeamController extends Controller {
	//

	public function __construct() {
		$this->middleware( 'auth' );

	}

	public function index() {
		$id    = Auth::id();
		$teams = DB::table( 'teams' )
		           ->select(
			           'users.name as member_name',
			           'users.email as member_email',
			           'users.id as member_id'
		           )
		           ->rightJoin( 'users', 'users.id', '=', 'teams.user_id' )
		           ->where( 'owner_id', '=', $id )
		           ->get();

		return view( 'team.index', [ 'teams' => $teams ] );
	}


	/**
	 *
	 * Show add new team member form
	 *
	 * @return \Illuminate\View\View
	 */
	public function addNew(): View {

		return view( 'team.add_new' );
	}

	public function postAddNew(): View {
		//check for valid email
		//check if user is already a member of the app
		//check if the mail is already a team member or owner
		//check of valid mail server
	}
}