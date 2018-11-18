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

Route::get('/', 'IndexController@index')->name('index');
Route::get('login', 'IndexController@index');
Route::post('login', 'IndexController@login')->name('login');
Route::post('logout', 'IndexController@logout')->name('logout');

Route::get('home', 'PostController@index')->name('home');
Route::get('home/archive/{timestamp}', 'PostController@archive')->name('archive');
Route::post('home/search', 'PostController@search')->name('search');

Route::get('account/edit/{id}', 'AccountController@edit')->name('account_edit');
Route::post('account/update', 'AccountController@update')->name('account_update');
Route::get('account/deactivate/{id}', 'AccountController@deactivate')->name('account_deactivate');
Route::get('account/password/{id}', 'AccountController@password')->name('password');
Route::post('account/password/{id}', 'AccountController@changePassword')->name('change_password');
Route::get('account/{id}', 'AccountController@show')->name('account');

Route::get('posts/{user_id}', 'PostController@postList')->name('posts');
Route::get('post/create', 'PostController@create')->name('post_create');
Route::post('post/create', 'PostController@save')->name('post_save');
Route::get('post/edit/{id}', 'PostController@edit')->name('post_edit');
Route::post('post/edit/{id}', 'PostController@update')->name('post_update');
Route::get('post/{id}', 'PostController@show')->name('post');

Route::post('comment/save', 'CommentController@save')->name('comment_save');
Route::post('comment/update', 'CommentController@update')->name('comment_update');
Route::get('comment/delete/{comment_id}/{post_id}', 'CommentController@delete')->name('comment_delete');
Route::get('comment/edit/{comment_id}/{post_id}', 'CommentController@edit')->name('comment_edit');

Route::get('events', 'EventController@index')->name('events');
Route::get('event/{event}', 'EventController@show')->name('event');

Route::get('announcements', 'AnnouncementController@index')->name('announcements');
Route::get('announcement/{id}', 'AnnouncementController@show')->name('announcement');

Route::get('reports/{status}/{user_id}', 'ReportController@index')->name('reports');
Route::get('report/{id}', 'ReportController@show')->name('report');
Route::get('report/add/{type}/{id}', 'ReportController@create')->name('report_add');
Route::post('report/add/{type}', 'ReportController@save')->name('report_save');
Route::get('report/cancel/{id}', 'ReportController@cancel')->name('report_cancel');
Route::post('report/update/{id}', 'ReportController@update')->name('report_update');




Route::prefix('admin')->group(function () {
    Route::get('/', 'admin\HomeController@index');
    Route::get('login', 'admin\LoginController@index');
    Route::post('login', 'admin\LoginController@checkLogin');
    Route::get('logout', 'admin\LoginController@logout');

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
