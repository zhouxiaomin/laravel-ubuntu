<?php

//Auth::loginUsingId(2);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    return view('welcome');
    return view('template.blackexplore.index');
});

Route::get('/task', function () {

    $tasks = \App\Task::latest()->get();
//   dd($tasks);
    return view('task.list', compact('tasks'));
});

//Route::get('api/tasks',function (){
//    return \App\Task::latest()->get();
//});

Route::resource('api/tasks','TaskController');

Route::get('/services', function () {
    return view('template.blackexplore.services');
});

Route::get('/work', function () {
    return view('template.blackexplore.work');
});

Route::get('/about', function () {
    return view('template.blackexplore.about');
});

Route::get('/blog', function () {
    return view('template.blackexplore.blog');
});

Route::get('/contact', function () {
    return view('template.blackexplore.contact');
});

Route::get('/minions', function () {
    return view('minions.minions');
});

Route::resource('articles', 'ArticlesController');
//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles', 'ArticlesController@store');

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');

Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/logout', 'Auth\AuthController@getLogout');



