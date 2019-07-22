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
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/sd1', function () {
    return view('sd1');
});
Route::get('/sd2', function () {
    return view('sd2');
});
Route::get('/sd3', function () {
    return view('sd3');
});
Route::get('/sd4', function () {
    return view('sd4');
});
Route::get('/sd5', function () {
    return view('sd5');
});
Route::get('/sd6', function () {
    return view('sd6');
});
Route::get('/smp1', function () {
    return view('smp1');
});
Route::get('/smp2', function () {
    return view('smp2');
});
Route::get('/smp3', function () {
    return view('smp3');
});
Route::get('/sma1', function () {
    return view('sma1');
});
Route::get('/sma2', function () {
    return view('sma2');
});
Route::get('/sma3', function () {
    return view('sma3');
});
Route::get('/soshum', function () {
    return view('soshum');
});
Route::get('/saintek', function () {
    return view('saintek');
});