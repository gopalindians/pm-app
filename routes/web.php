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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/you', 'ProfileController@index')->name('you');


Route::get('/team', 'TeamController@index')->name('team');
Route::get('/team/add', 'TeamController@addNew');
Route::post('/team/add', 'TeamController@postAddNew');
Route::post('/team/join', 'TeamController@postJoin');
Route::get('/team/join_prompt', 'TeamController@getJoinPrompt');

Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/createProject', 'ProjectController@createProject');
Route::post('/createProject', 'ProjectController@postCreateProject');
Route::get('/project/{id}', 'ProjectController@view');


//not for production
Route::get('/mailable', function () {

    $user = \App\User::where('id', \Illuminate\Support\Facades\Auth::id())->first();
    return new App\Mail\AddToTeamRequest($user, 'xyz@gyahoo.com');
});

