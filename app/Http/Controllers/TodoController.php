<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB, Auth;

class TodoController extends Controller {
	public function __construct() {
		$this->middleware( 'auth' );
	}

	public function index() {
		return view( 'todo.index' );

	}

	public function postAddNewTodoList( Request $request ) {

		$listName    = $request->post( 'listName' );
		$projectId   = $request->route( 'id' );
		$projectName = $request->post( 'name' );

		$todoListId = DB::table( 'todolists' )
		                ->insertGetId( [
			                'project_id' => $projectId,
			                'poster_id'  => Auth::id(),
			                'todo_name'  => $listName,
			                'created_at' => Carbon::now(),
			                'updated_at' => Carbon::now(),
		                ] );


		DB::table( 'projects' )
		  ->where( 'id', $projectId )
		  ->update( [
			  'updated_at' => Carbon::now(),
		  ] );

		$todoData = DB::table( 'todolists' )->where( 'id', $todoListId )->get();


		return response()->json( $todoData );


	}

	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function apiGetTodoLists( Request $request ) {
		$projectId = $request->route( 'id' );
		$todoLists = DB::table( 'todolists' )
		               ->where( 'project_id', $projectId )
		               ->get();

		return response()->json( $todoLists );
	}

	public function getTodoList() {
		return view( 'todo.specific' );
	}

	public function apiGetTodoList( Request $request ) {
		$todoListId = $request->route( 'todoListId' );
		$projectId  = $request->route( 'id' );

		$todoListsData = DB::table( 'todolists' )
		                   ->where( [
			                   [ 'id', $todoListId ],
			                   [ 'project_id', $projectId ],
		                   ] )
		                   ->get();


		return response()->json( $todoListsData );
	}
}
