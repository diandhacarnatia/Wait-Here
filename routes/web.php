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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/namaaz', function () {
    return view('namaaz');
});

Route::get('/awan', function () {
    return view('awan');
});

Route::get('/delicious', function () {
    return view('delicious');
});

Route::get('/honu', function () {
    return view('honu');
});

Route::get('/brunch', function () {
    return view('brunch');
});

Route::get('/bar', function () {
    return view('bar');
});

Route::get('/finedining', function () {
    return view('finedining');
});

Route::get('/beverages', function () {
    return view('beverages');
});

Route::get('/fastfood', function () {
    return view('fastfood');
});

Route::get('/streetfood', function () {
    return view('streetfood');
});

Route::get('/union', function () {
    return view('union');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/ecaps', function () {
    return view('ecaps');
});

Route::get('/dearbutter', function () {
    return view('dearbutter');
});

Route::get('/bottega', function () {
    return view('bottega');
});

Route::get('/3wise', function () {
    return view('3wise');
});

Route::get('/skye', function () {
    return view('skye');
});

Route::get('/casual', function () {
    return view('casual');
});

Route::get('/kkuldak', function () {
    return view('kkuldak');
});

Route::get('/pepper', function () {
    return view('pepper');
});

Route::get('/ayce', function () {
    return view('ayce');
});

Route::get('/livemusic', function () {
    return view('livemusic');
});

Route::get('/struk', function () {
    return view('struk');
});

//Route::get('/brunch', array('brunch' => 'WelcomeController@brunch', 'as' => 'brunch'));