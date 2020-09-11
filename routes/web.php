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
$GLOBALS['AppTitle'] = "Plugun";

//Get Requests
Route::get('/', function () {
    return view('landing', ["Title" => $GLOBALS['AppTitle'], "ActivationVal"=> 0]);
});
// /User/*
Route::get('/user/dashboard', 'UserController@Dashboard')->middleware('IsSessionValid');
Route::get('/user/profile', 'UserProfile')->middleware('IsSessionValid');
Route::get('/user/profile/userinfo/{name}/{surname}/{username}', 'UserProfileController@SaveUserPersonalInfo')->middleware('IsSessionValid');
Route::get('/user/profile/SaveUserAddressInfo/{address}/{city}/{country}', 'UserProfileController@SaveUserInfo')->middleware('IsSessionValid');

//Get Requests from /
Route::get('/register/email/{email}/password/{password}/name/{name}/surname/{surname}', 'IndexController@register');
Route::get('/login/email/{email}/password/{password}', 'IndexController@login');
Route::get('/subscribe/email/{email}', 'IndexController@subscribe');
Route::get('/CURRENCY_EXCHANGE', 'IndexController@exchangeRate');
Route::get('/activate/{code}', 'IndexController@activate');
Route::get('/news/frontpage', 'IndexController@getNews');
Route::get('/logout', 'IndexLogout');