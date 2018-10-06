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

Route::get('/', function () { return view('index'); });

Route::get('account', function () { return view('account/account'); })->name('account');
Route::get('account/edit', function () { return view('account/account_edit'); })->name('account_edit');
Route::get('account/password', function () { return view('account/changePassword'); })->name('changePassword');

Route::get('home', function () { return view('blog/index'); })->name('home');
Route::get('posts', function () { return view('blog/post_listing'); })->name('posts');
Route::get('post', function () { return view('blog/post'); })->name('post');
Route::get('post/add', function () { return view('blog/post_add'); })->name('post_add');

Route::get('events', function () { return view('event/index'); })->name('events');
Route::get('event', function () { return view('event/event'); })->name('event');

Route::get('announcements', function () { return view('announcement/index'); })->name('announcements');
Route::get('announcement', function () { return view('announcement/announcement'); })->name('announcement');

Route::get('reports', function () { return view('report/index'); })->name('reports');
Route::get('report', function () { return view('report/report'); })->name('report');
Route::get('report/add', function () { return view('report/report_add'); })->name('report_add');

Route::get('search', function () { return view('search/search'); })->name('search');

Auth::routes();

