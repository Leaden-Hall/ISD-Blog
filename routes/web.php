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


Route::get('account/{id}', function () { return view('account/account'); })->name('account');
Route::get('account/edit', function () { return view('account/account_edit'); })->name('account_edit');
Route::get('account/password', function () { return view('account/changePassword'); })->name('changePassword');


Route::get('posts/{user_id}', 'PostController@postList')->name('posts');
Route::get('post/{id}', 'PostController@show')->name('post');
Route::get('post/add', function () { return view('blog/post_add'); })->name('post_add');

Route::get('events', 'EventController@index')->name('events');
Route::get('event/{event}', 'EventController@show')->name('event');

Route::get('announcements', 'AnnouncementController@index')->name('announcements');
Route::get('announcement/{id}', 'AnnouncementController@show')->name('announcement');

Route::get('reports/{user_id}', 'ReportController@index')->name('reports');
Route::get('report/{id}', 'ReportController@show')->name('report');
Route::get('report/add', 'ReportController@create')->name('report_add');

Route::get('search', function () { return view('search/search'); })->name('search');

