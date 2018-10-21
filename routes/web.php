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

    Route::get('posts', 'PostController@index');
    Route::get('/post/delete/{id}','PostController@destroy');
    Route::get('/post/status/{id}/{status}','PostController@changeStatus');

    Route::get('events', 'EventController@index');
    Route::get('addEvent', 'EventController@create');
    Route::post('/event/create','EventController@store');
    Route::get('/event/edit/{id}','EventController@edit');
    Route::put('/event/update/{id}','EventController@update');
    Route::get('/event/delete/{id}','EventController@destroy');

    Route::get('announcements', 'AnnouncementsController@index');
    Route::get('/announcement/delete/{id}','AnnouncementsController@destroy');
    Route::get('addAnnouncement', 'AnnouncementsController@create');
    Route::post('/announcement/create','AnnouncementsController@store');
    Route::get('/announcement/edit/{id}','AnnouncementsController@edit');
    Route::put('/announcement/update/{id}','AnnouncementsController@update');
    
    Route::get('reports', 'ReportController@index');
    Route::get('/report/status/{id}/{status}','ReportController@changeStatus');
});