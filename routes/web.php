<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', 'ContactController@index');

Route::post('/contact/send', 'ContactController@ContactRequest');