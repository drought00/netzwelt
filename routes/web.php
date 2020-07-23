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

Route::get('/netzwelt/login', function() {
    if(session('username')){
        return redirect('netzwelt/home');
    }
    return view('login');
});

Route::get('/netzwelt/home', "NetzweltController@home");

Route::post('/netzwelt/home', "NetzweltController@login");

Route::get('/netzwelt/logout', "NetzweltController@logout");

Route::get('/netzwelt/public', function () {
    return view('public');
});