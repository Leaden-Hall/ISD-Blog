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

Route::get('account/edit/{id}', function () { return view('account/account_edit'); })->name('account_edit');
Route::get('account/password/{id}', 'AccountController@password')->name('password');
Route::put('account/password/{id}', 'AccountController@changePassword')->name('change_password');
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

Route::get('search', function () { return view('search/search'); })->name('search');


