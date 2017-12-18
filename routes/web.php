<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get( '/', 'HomeController@index' )->name( 'home' );
Route::get( '/home', 'HomeController@index' )->name( 'home' );


//People

Route::get( '/people/{people_id}', 'PeopleController@index' );



Route::prefix( 'profile' )->group( function () {
	Route::get( '/edit/{id}', 'ProfileController@editProfile' );
	Route::post( '/edit/{id}', 'ProfileController@postEditProfile' );
	Route::get( '/{id}/{name?}', 'ProfileController@getProfile' );
} );


Route::get( '/team', 'TeamController@index' )->name( 'team' );
Route::get( '/team/add', 'TeamController@addNew' );
Route::post( '/team/add', 'TeamController@postAddNew' );
Route::post( '/team/join', 'TeamController@postJoin' );
Route::get( '/team/join_prompt', 'TeamController@getJoinPrompt' );


Route::get( '/projects', 'ProjectController@index' )->name( 'projects' );


Route::get( '/createProject', 'ProjectController@createProject' );



//Todolists
Route::get( '/project/{id}/{name?}/todolists', 'TodoController@index' );
Route::get( '/project/{id}/{name?}', 'ProjectController@view' );

Route::get( '/project/{id}/{name?}/topics', 'TopicController@index' );
Route::get( '/api/project/{id}/{name?}/document/{documentId}', 'DocumentController@apiGetDocument' );

Route::prefix( '/project/{id}/{name?}' )->group( function () {
	//messages
	Route::prefix( '/messages' )->group( function () {
		Route::get( '/new', 'MessageController@index' );
		Route::get( '/{topicId}', 'MessageController@getTopic' );
		Route::post( '/{topicId}/edit', 'MessageController@postEditTopic' );
		Route::get( '/{topicId}/edit', 'MessageController@getEditTopic' );
		Route::get( '/{topicId}/trash', 'MessageController@deleteMessage' );
		Route::post( '/', 'MessageController@postNew' );
	} );

	//documents
	Route::prefix( '/documents' )->group( function () {
		Route::get( '/', 'DocumentController@getDocuments' );
	} );

    Route::get( '/document/{documentId}', 'DocumentController@getDocument' );
    Route::post( '/document/', 'DocumentController@postNewDocument' );
    Route::get( '/document/new', 'DocumentController@getNewDocumentView' );
    Route::get( '/document/{documentId}/edit', 'DocumentController@getDocument' );

} );


//Search
Route::get( '/search', 'SearchController@getSearch' );


Route::get( '/project/{id}/{name?}/topics', 'TopicController@index' );


//people
Route::get( '/people/{people_id}', 'PeopleController@index' );


Route::prefix( '/api' )->group( function () {

	Route::get( '/search', 'SearchController@getSearchQuery' );

	Route::get( '/people/{people_id}', 'PeopleController@getPeople' );

	Route::get( '/projects', 'ProjectController@apiGetProjects' );
	Route::post( '/createProject', 'ProjectController@postCreateProject' );


	Route::prefix('/project /{id}' )->group( function () {
		Route::get( '/{projectName?}', 'ProjectController@apiGetProject' );
		Route::get( '/{name?}/topics', 'TopicController@apiGetTopics' );
		Route::get( '/{name?}/messages/{topicId}', 'MessageController@apiGetTopic' );
		Route::get( '/{name?}/documents', 'DocumentController@apiGetDocuments' );
		Route::get( '/{name?}/messages/{topicId}', 'MessageController@apiGetTopic' );
	} );


	Route::get( '/projects', 'ProjectController@apiGetProjects' );
	Route::get( '/project/{id}/{projectName?}', 'ProjectController@apiGetProject' );
	Route::post( '/createProject', 'ProjectController@postCreateProject' );
	Route::get( '/project/{id}/{name?}/topics', 'TopicController@apiGetTopics' );
	Route::get( '/project/{id}/{name?}/messages/{topicId}', 'MessageController@apiGetTopic' );
	Route::post( '/project/{id}/{name?}/messages/{topicId}', 'MessageController@apiPostTopicComment' );
	Route::get( '/project/{id}/{name?}/documents', 'DocumentController@apiGetDocuments' );
	Route::get( '/project/{id}/{name?}/messages/{topicId}', 'MessageController@apiGetTopic' );

	Route::get( '/project/{id}/{name?}/document/{documentId}', 'DocumentController@apiGetDocument' );
	Route::post( '/project/{id}/{name?}/document/{documentId}', 'DocumentController@apiPostDocumentComment' );

} );