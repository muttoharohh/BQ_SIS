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
Route::get('/register',[
    'uses' => 'UserController@getRegister',
    'as' => 'register.admin',
]);
Route::post('/register',[
    'uses' => 'UserController@postRegister',
    'as' => 'register.admin',
]);
Route::get('/adminuser',[
    'uses' => 'UserController@getUser',
    'as' => 'admin.user',
    'middleware' => 'auth'
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
Route::get('/loginadmin',[
    'uses' => 'UserController@getLoginadmin',
    'as' => 'admin.login',
    'middleware' => 'guest'
]);
Route::post('/loginadmin',[
    'uses' => 'UserController@postLoginadmin',
    'as' => 'admin.login',
    'middleware' => 'guest'
]);
Route::get('/dashboard',[
    'uses' => 'DashboardController@getdashboard',
    'as' => 'dashboard.admin',
    'middleware' => 'auth'
]);
Route::get('/register', function(){
    return view('admin.register');
});
Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);
Route::get('/logoutadmin',[
    'uses' => 'UserController@getLogoutadmin',
    'as' => 'admin.logout',
    'middleware' => 'auth'
]);


Route::get('/adminsd1',[
    'uses' => 'SdsatusController@sdsatu_viewadmin',
    'as' => 'admin.sd1',
    'middleware' => 'auth'
]);
Route::post('/adminsd1/create',[
    'uses' => 'SdsatusController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsd1/{id}/delete',[
    'uses' => 'SdsatusController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsd1/{id}/edit',[
    'uses' => 'SdsatusController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsd1/{id}/update',[
    'uses' => 'SdsatusController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsd2',[
    'uses' => 'SdduasController@sddua_viewadmin',
    'as' => 'admin.sd2',
    'middleware' => 'auth'
]);
Route::post('/adminsd2/create',[
    'uses' => 'SdduasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsd2/{id}/delete',[
    'uses' => 'SdduasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsd2/{id}/edit',[
    'uses' => 'SdduasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsd2/{id}/update',[
    'uses' => 'SdduasController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsd3',[
    'uses' => 'SdtigasController@sdtiga_viewadmin',
    'as' => 'admin.sd3',
    'middleware' => 'auth'
]);
Route::post('/adminsd3/create',[
    'uses' => 'SdtigasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsd3/{id}/delete',[
    'uses' => 'SdtigasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsd3/{id}/edit',[
    'uses' => 'SdtigasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsd3/{id}/update',[
    'uses' => 'SdtigasController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsd4',[
    'uses' => 'SdempatsController@sdempat_viewadmin',
    'as' => 'admin.sd4',
    'middleware' => 'auth'
]);
Route::post('/adminsd4/create',[
    'uses' => 'SdempatsController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsd4/{id}/delete',[
    'uses' => 'SdempatsController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsd4/{id}/edit',[
    'uses' => 'SdempatsController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsd4/{id}/update',[
    'uses' => 'SdempatsController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsd5',[
    'uses' => 'SdlimasController@sdlima_viewadmin',
    'as' => 'admin.sd5',
    'middleware' => 'auth'
]);
Route::post('/adminsd5/create',[
    'uses' => 'SdlimasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsd5/{id}/delete',[
    'uses' => 'SdlimasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsd5/{id}/edit',[
    'uses' => 'SdlimasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsd5/{id}/update',[
    'uses' => 'SdlimasController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsd6',[
    'uses' => 'SdenamsController@sdenam_viewadmin',
    'as' => 'admin.sd6',
    'middleware' => 'auth'
]);
Route::post('/adminsd6/create',[
    'uses' => 'SdenamsController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsd6/{id}/delete',[
    'uses' => 'SdenamsController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsd6/{id}/edit',[
    'uses' => 'SdenamsController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsd6/{id}/update',[
    'uses' => 'SdenamsController@update',
    'middleware' => 'auth'
]);



Route::get('/adminsmp1',[
    'uses' => 'SmpsatusController@smpsatu_viewadmin',
    'as' => 'admin.smp1',
    'middleware' => 'auth'
]);
Route::post('/adminsmp1/create',[
    'uses' => 'SmpsatusController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsmp1/{id}/delete',[
    'uses' => 'SmpsatusController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsmp1/{id}/edit',[
    'uses' => 'SmpsatusController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsmp1/{id}/update',[
    'uses' => 'SmpsatusController@update',
    'middleware' => 'auth'
]);



Route::get('/adminsmp2',[
    'uses' => 'SmpduasController@smpdua_viewadmin',
    'as' => 'admin.smp2',
    'middleware' => 'auth'
]);
Route::post('/adminsmp2/create',[
    'uses' => 'SmpduasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsmp2/{id}/delete',[
    'uses' => 'SmpduasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsmp2/{id}/edit',[
    'uses' => 'SmpduasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsmp2/{id}/update',[
    'uses' => 'SmpduasController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsmp3',[
    'uses' => 'SmptigasController@smptiga_viewadmin',
    'as' => 'admin.smp3',
    'middleware' => 'auth'
]);
Route::post('/adminsmp3/create',[
    'uses' => 'SmptigasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsmp3/{id}/delete',[
    'uses' => 'SmptigasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsmp3/{id}/edit',[
    'uses' => 'SmptigasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsmp3/{id}/update',[
    'uses' => 'SmptigasController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsma1',[
    'uses' => 'SmasatusController@smasatu_viewadmin',
    'as' => 'admin.sma1',
    'middleware' => 'auth'
]);
Route::post('/adminsma1/create',[
    'uses' => 'SmasatusController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsma1/{id}/delete',[
    'uses' => 'SmasatusController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsma1/{id}/edit',[
    'uses' => 'SmasatusController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsma1/{id}/update',[
    'uses' => 'SmasatusController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsma2',[
    'uses' => 'SmaduasController@smadua_viewadmin',
    'as' => 'admin.sma2',
    'middleware' => 'auth'
]);
Route::post('/adminsma2/create',[
    'uses' => 'SmaduasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsma2/{id}/delete',[
    'uses' => 'SmaduasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsma2/{id}/edit',[
    'uses' => 'SmaduasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsma2/{id}/update',[
    'uses' => 'SmaduasController@update',
    'middleware' => 'auth'
]);


Route::get('/adminsma3',[
    'uses' => 'SmatigasController@smatiga_viewadmin',
    'as' => 'admin.sma3',
    'middleware' => 'auth'
]);
Route::post('/adminsma3/create',[
    'uses' => 'SmatigasController@create',
    'middleware' => 'auth'
]);
Route::get('/adminsma3/{id}/delete',[
    'uses' => 'SmatigasController@delete',
    'middleware' => 'auth'
]);
Route::get('/adminsma3/{id}/edit',[
    'uses' => 'SmatigasController@edit',
    'middleware' => 'auth'
]);
Route::post('/adminsma3/{id}/update',[
    'uses' => 'SmatigasController@update',
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