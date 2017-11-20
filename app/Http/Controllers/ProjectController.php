<?php

namespace App\Http\Controllers;

use Auth, DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller {
	//

	public function __construct() {
		$this->middleware( 'auth' );
	}

	public function index(): View {
		$id       = Auth::id();
		$projects = DB::table( 'projects' )
		              ->join( 'users', 'users.id', '=', 'projects.owner_id' )
		              ->where( 'owner_id', '=', $id )
		              ->get();
		dump( $projects );

		return view( 'project.index', [ 'projects' => $projects ] );
	}

	public function createProject(): View {
		return view( 'project.create_new' );
	}

	public function postCreateProject( Request $request ) {
		$validatedData = $request->validate( [
			'project_name'        => 'required|max:255',
			'project_description' => 'required',
		] );

		DB::table( 'projects' )->insert( [
				'owner_id'            => Auth::id(),
				'project_name'        => $request->post( 'project_name' ),
				'project_description' => $request->post( 'project_description' ),
				'state'               => 'active',
				'created_at'           => Carbon::now(),
				'updated_at'           => Carbon::now()
			]
		);

		return view( 'project.create_new' );

	}
}
