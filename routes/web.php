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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });

    Route::get('users', 'UserController@index');
    Route::get('/user/delete/{id}','UserController@destroy');
    Route::get('/user/status/{id}','UserController@changeStatus');
    Route::post('/user/create','UserController@store');

    Route::get('addUser', 'UserController@create');
    // Route::get('addUser', function () {
    //     return view('admin/addUser');
    // });


    Route::get('posts', 'PostController@index');
    Route::get('/post/delete/{id}','PostController@destroy');
    Route::get('/post/status/{id}/{status}','PostController@changeStatus');


    Route::get('addEvent', function () {
        return view('admin/addEvent');
    });
    Route::get('events', 'EventController@index');
    Route::post('/event/create','EventController@store');

    Route::get('notifications', function () {
        return view('admin/notifications');
    });
    Route::get('announcements', 'AnnouncementsController@index');
    Route::get('/announcement/delete/{id}','AnnouncementsController@destroy');
    Route::post('/announcement/create','AnnouncementsController@store');

    Route::get('addAnnouncement', function () {
        return view('admin/addAnnouncement');
    });

    
    Route::get('reports', 'ReportController@index');
    Route::get('/report/status/{id}/{status}','ReportController@changeStatus');
});