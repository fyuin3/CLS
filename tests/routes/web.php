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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/resources', function () {
    return view('resources');
});
Route::get('/livestream', function () {
    return view('livestream');
});
Route::get('/achievement', function () {
    return view('achievement');
});
Route::get('/tournament', function () {

    return view('tournament');
});

Route::get('/forum', function () {
    return view('forum');
});
Route::get('/forcasting', function () {
    return view('forcasting');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/projectDetail', function () {
    return view('projectDetail');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/leaderboard', function () {
    return view('leaderboard');
});
Route::get('/try', function () {
    return view('try');
});
Route::get('/tryLeader', function () {
    return view('tryLeader');
});
Route::get('/calendar2', function () {
    return view('calendar2');
});
Route::get('/coba', function () {
    return view('/blog/coba');
});

Route::get('/event', function () {
    return view('/event');
});

Route::get('/manage', function () {
    return view('/manage');
});

Route::get('/courseRating', function () {
    return view('/courseRating');
});

Route::get('/notification', function () {
    return view('/notification');
});

Route::get('/superadmin', function () {
    return view('/superadmin');
});
Route::get('/login','RegisterController@login');
Route::get('/login','RegisterController@index');
Route::post('/login','RegisterController@create');



Route::get('/test1','CobaController@index');
Route::get('/test1/{id}','CobaController@show');
