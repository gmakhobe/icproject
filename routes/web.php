<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
$GLOBALS['AppTitle'] = "IC Application";

//Get Requests
Route::get('/', function () {
    return view('landing', ["Title" => $GLOBALS['AppTitle']]);
});
// /User/*
Route::get('/user/dashboard', 'UserController@Dashboard')->middleware('IsSessionValid');

//Get Requests from /
Route::get('/register/email/{email}/password/{password}', 'IndexController@register');
Route::get('/login/email/{email}/password/{password}', 'IndexController@login');
Route::get('/subscribe/email/{email}', 'IndexController@subscribe');
Route::get('/CURRENCY_EXCHANGE', 'IndexController@exchangeRate');

