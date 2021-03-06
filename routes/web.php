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
Route::get('/register', 'Auth\RegisterController@create');
Route::post('/register', 'Auth\RegisterController@store');

Route::get('/logout', 'LoginController@destroy');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');

Route::get('/', 'TeamsController@index');
Route::get('/teams/create', 'TeamsController@create');
Route::get('/teams/{id}', 'TeamsController@show');
Route::post('/teams', 'TeamsController@store');

Route::post('/teams/{id}/comment', 'CommentsController@store');

Route::get('/players/create/{id}', 'PlayersController@create');
Route::get('/players/{id}', 'PlayersController@show');
Route::post('/players/create/{id}', 'PlayersController@store');

Route::get('/news', 'PostsController@index');
Route::get('/news/create', 'PostsController@create');
Route::get('/news/{id}', 'PostsController@show');
Route::post('/news', 'PostsController@store');

Route::get('news/teams/{team}', 'TeamsController@teamPosts');
