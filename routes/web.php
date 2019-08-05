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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/signup',[
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);
Route::post('/signup',[
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);
Route::get('/login',[
    'uses' => 'UserController@getLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);
Route::post('/login',[
    'uses' => 'UserController@postLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);
Route::get('/dashboard', function(){
    return view('admin.index');
});
Route::get('/register', function(){
    return view('admin.register');
});
Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);


Route::get('/sd1', ['uses' => 'SdsatusController@index', 'middleware' => 'auth']);
Route::get('/sd2', ['uses' => 'SdduasController@index', 'middleware' => 'auth']);
Route::get('/sd3', ['uses' => 'SdtigasController@index', 'middleware' => 'auth']);
Route::get('/sd4', ['uses' => 'SdempatsController@index', 'middleware' => 'auth']);
Route::get('/sd5', ['uses' => 'SdlimasController@index', 'middleware' => 'auth']);
Route::get('/sd6', ['uses' => 'SdenamsController@index', 'middleware' => 'auth']);
Route::get('/smp1', ['uses' => 'SmpsatusController@index', 'middleware' => 'auth']);
Route::get('/smp2', ['uses' => 'SmpduasController@index', 'middleware' => 'auth']);
Route::get('/smp3', ['uses' => 'SmptigasController@index', 'middleware' => 'auth']);
Route::get('/sma1', ['uses' => 'SmasatusController@index', 'middleware' => 'auth']);
Route::get('/sma2', ['uses' => 'SmaduasController@index', 'middleware' => 'auth']);
Route::get('/sma3', ['uses' => 'SmatigasController@index', 'middleware' => 'auth']);
Route::get('/soshum', ['uses' => 'SoshumsController@index', 'middleware' => 'auth']);
Route::get('/saintek', ['uses' => 'SainteksController@index', 'middleware' => 'auth']);