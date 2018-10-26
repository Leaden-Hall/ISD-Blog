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

    Route::get('/', 'admin\HomeController@index');

    Route::get('users', 'admin\UserController@index');
    Route::get('/user/delete/{id}','admin\UserController@destroy');
    Route::get('/user/status/{id}','admin\UserController@changeStatus');
    Route::post('/user/create','admin\UserController@store');
    Route::get('addUser', 'admin\UserController@create');

    Route::get('posts', 'admin\PostController@index');
    Route::get('/post/delete/{id}','admin\PostController@destroy');
    Route::get('/post/status/{id}/{status}','admin\PostController@changeStatus');

    Route::get('events', 'admin\EventController@index');
    Route::get('addEvent', 'admin\EventController@create');
    Route::post('/event/create','admin\EventController@store');
    Route::get('/event/edit/{id}','admin\EventController@edit');
    Route::put('/event/update/{id}','admin\EventController@update');
    Route::get('/event/delete/{id}','admin\EventController@destroy');

    Route::get('announcements', 'admin\AnnouncementsController@index');
    Route::get('/announcement/delete/{id}','admin\AnnouncementsController@destroy');
    Route::get('addAnnouncement', 'admin\AnnouncementsController@create');
    Route::post('/announcement/create','admin\AnnouncementsController@store');
    Route::get('/announcement/edit/{id}','admin\AnnouncementsController@edit');
    Route::put('/announcement/update/{id}','admin\AnnouncementsController@update');
    
    Route::get('reports', 'admin\ReportController@index');
    Route::get('/report/status/{id}/{status}','admin\ReportController@changeStatus');
});