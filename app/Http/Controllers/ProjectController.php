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
		              ->select(
			              'projects.id as project_id',
			              'projects.owner_id as project_owner_id',
			              'projects.project_name',
			              'projects.project_description',
			              'projects.state as project_state',
			              'projects.created_at as project_created_at',
			              'projects.updated_at as project_updated_at',

			              'users.id as owner_id',
			              'users.name as owner_name',
			              'users.email as owner_email'
		              )
		              ->join( 'users', 'users.id', '=', 'projects.owner_id' )
		              ->where( 'owner_id', '=', $id )
		              ->get();
		dump( $projects );

		return view( 'project.index', [ 'projects' => $projects ] );
	}

	public function createProject(): View {
		return view( 'project.create_new' );
	}

	public function postCreateProject( Request $request ): View {
		$validatedData = $request->validate( [
			'project_name'        => 'required|max:255',
			'project_description' => 'required',
		] );

		$id = DB::table( 'projects' )->insertGetId( [
				'owner_id'            => Auth::id(),
				'project_name'        => $request->post( 'project_name' ),
				'project_description' => $request->post( 'project_description' ),
				'state'               => 'active',
				'created_at'          => Carbon::now(),
				'updated_at'          => Carbon::now()
			]
		);


		if ( ! empty( $id ) ) {
			$request->session()->flash( 'success', 'Project created successfully!' );

			return view( 'project.create_new' );
		} else {
			$request->session()->flash( 'error', 'Unable to create Project!' );

			return view( 'project.create_new' );
		}


	}


	/**
	 *
	 * To show the Project detail
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view( Request $request ) {
		$id = $request->route( 'id' );

		$project = DB::table( 'projects' )
		             ->where( 'id', '=', $id )
		             ->get();

		return view( 'project.view', [ 'project' => $project ] );
	}

}
