<?php

namespace App\Http\Controllers;

use Auth, DB;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MessageController extends Controller {


	public function __construct() {
		$this->middleware( 'auth' );
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index() {
		return view( 'message.new' );
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postNew( Request $request ) {
		$projectId   = $request->segment( '2' );
		$projectName = $request->segment( '3' );

		$form = $request->post( 'message' );

		$topicName = $form['subject'];
		$topicBody = $form['content'];

		$topicId = DB::table( 'topics' )
		             ->insertGetId( [
			             'project_id' => $projectId,
			             'creater_id' => Auth::id(),
			             'topic_name' => $topicName,
			             'topic_body' => $topicBody,
			             'created_at' => Carbon::now(),
			             'updated_at' => Carbon::now(),
		             ] );


        DB::table('projects')
            ->where('id', $projectId)
            ->update([
                'updated_at' => Carbon::now()
            ]);

		return redirect( 'project/' . $projectId . '/' . $projectName . '/messages/' . $topicId );
	}


	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getTopic( Request $request ) {
		return view( 'message.specific' );
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function apiGetTopic( Request $request ): JsonResponse {

		$topicId   = $request->route( 'topicId' );
		$projectId = $request->route( 'id' );
		$topic     = DB::table( 'topics' )
		               ->select(
			               'topics.id as topic_id',
			               'topics.topic_name',
			               'topics.topic_body',
			               'topics.created_at as topic_created_at',
			               'topics.updated_at as topic_updated_at',

			               'users.id as creater_id',
			               'users.name as creater_name',
			               'users.email as creater_email',
			               'users.profile_image as creater_profile_image',

			               'projects.id as project_id',
			               'projects.owner_id as project_creater_id',
			               'projects.project_name',
			               'projects.project_description',
			               'projects.state as project_state'
		               )
		               ->join( 'users', 'users.id', 'topics.creater_id' )
		               ->join( 'projects', 'projects.id', 'topics.project_id' )
		               ->where( 'topics.id', $topicId )
		               ->get();

		foreach ( $topic as $item ) {

			$topicComments = DB::table( 'topic_comments' )
			                   ->where( 'topic_comments.topic_id', $item->topic_id )
			                   ->get();
			foreach ( $topicComments as $tc ) {
				$tc->comment_poster = DB::table( 'users' )
				                        ->where( 'users.id', $tc->poster_id )
				                        ->first();
				unset($tc->comment_poster->password,$tc->comment_poster->remember_token);

				$tc->created_at_human = str_replace( 'before', 'ago', Carbon::parse( $tc->created_at )->diffForHumans( Carbon::now() ) );
				$tc->created_at_noob  = Carbon::parse( $tc->created_at )->format( 'l jS \\of F Y h:i:s A' );

				$tc->updated_at_human = str_replace( 'before', 'ago', Carbon::parse( $tc->updated_at )->diffForHumans( Carbon::now() ) );
				$tc->updated_at_noob  = Carbon::parse( $tc->updated_at )->format( 'l jS \\of F Y h:i:s A' );

			}
			$item->topic_comments         = $topicComments;
			$item->topic_created_at_human = str_replace( 'before', 'ago', Carbon::parse( $item->topic_created_at )->diffForHumans( Carbon::now() ) );
			$item->topic_created_at_noob  = Carbon::parse( $item->topic_created_at )->format( 'l jS \\of F Y h:i:s A' );
			$item->topic_updated_at_human = str_replace( 'before', 'ago', Carbon::parse( $item->topic_updated_at )->diffForHumans( Carbon::now() ) );
			$item->topic_updated_at_noob  = Carbon::parse( $item->topic_updated_at )->format( 'l jS \\of F Y h:i:s A' );
		}

		return response()->json( $topic[0] );
	}


	public function getEditTopic() {
		return view( 'message.edit' );
	}
}

