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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('profile')->group(function () {
    Route::get('/edit/{id}', 'ProfileController@editProfile');
    Route::post('/edit/{id}', 'ProfileController@postEditProfile');
    Route::get('/{id}/{name?}', 'ProfileController@getProfile');
});


Route::get('/team', 'TeamController@index')->name('team');
Route::get('/team/add', 'TeamController@addNew');
Route::post('/team/add', 'TeamController@postAddNew');
Route::post('/team/join', 'TeamController@postJoin');
Route::get('/team/join_prompt', 'TeamController@getJoinPrompt');

Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/api/projects', 'ProjectController@apiGetProjects');
Route::get('/api/project/{id}/{projectName?}', 'ProjectController@apiGetProject');

Route::get('/createProject', 'ProjectController@createProject');
Route::post('/api/createProject', 'ProjectController@postCreateProject');

//Todolists
Route::get('/project/{id}/{name?}/todolists', 'TodoController@index');
Route::get('/project/{id}/{name?}', 'ProjectController@view');


Route::get('/project/{id}/{name?}/topics', 'TopicController@index');
Route::get('/api/project/{id}/{name?}/topics', 'TopicController@apiGetTopics');
Route::get('/project/{id}/{name?}/messages/new', 'MessageController@index');

Route::get('/project/{id}/{name?}/messages/{topicId}', 'MessageController@getTopic');
Route::get('/api/project/{id}/{name?}/messages/{topicId}', 'MessageController@apiGetTopic');

Route::get('/project/{id}/{name?}/messages/{topicId}/edit', 'MessageController@getEditTopic');
Route::post('/project/{id}/{name?}/messages/{topicId}/edit', 'MessageController@postEditTopic');

Route::post('/project/{id}/{name?}/messages', 'MessageController@postNew');


Route::get('/project/{id}/{name?}/documents', 'DocumentController@getDocuments');
Route::get('/api/project/{id}/{name?}/documents', 'DocumentController@apiGetDocuments');
Route::get('/project/{id}/{name?}/document/new', 'DocumentController@getNewDocumentView');
Route::post('/project/{id}/{name?}/document', 'DocumentController@postNewDocument');
Route::get('/project/{id}/{name?}/document/{documentId}', 'DocumentController@getDocument');
Route::get('/api/project/{id}/{name?}/document/{documentId}', 'DocumentController@apiGetDocument');

//Search
Route::get('/search', 'SearchController@getSearch');
Route::get('/api/search', 'SearchController@getSearchQuery');

//people

Route::get('/people/{people_id}', 'PeopleController@index');
Route::get('/api/people/{people_id}', 'PeopleController@getPeople');

