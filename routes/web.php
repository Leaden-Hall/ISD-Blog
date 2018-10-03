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

Route::get('/ad', function () {
    return view('admin/admin_app');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });

    Route::get('users', function () {
        return view('admin/users');
    });

    Route::get('addUser', function () {
        return view('admin/addUser');
    });

    Route::get('posts', function () {
        return view('admin/posts');
    });

    Route::get('events', function () {
        return view('admin/events');
    });

    Route::get('addEvent', function () {
        return view('admin/addEvent');
    });

    Route::get('notifications', function () {
        return view('admin/notifications');
    });

    Route::get('addNotification', function () {
        return view('admin/addNotification');
    });

    Route::get('reports', function () {
        return view('admin/reports');
    });
});