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
$GLOBALS['AppTitle'] = "Plugin";

//Get Requests
Route::get('/', function () {
    return view('landing', ["Title" => $GLOBALS['AppTitle'], "ActivationVal"=> 0]);
});
// /User/*
Route::get('/alert/alertcenter', 'AlertsController@AlertGetAlertCenterContent')->middleware('IsSessionValid');
Route::get('/alert/messagecenter', 'AlertsController@AlertGetMessageCenterContent')->middleware('IsSessionValid');
Route::get('/alert/alertcenter/off', 'AlertsController@AlertShutAlertCenter')->middleware('IsSessionValid');
Route::get('/alert/messagecenter/off', 'AlertsController@AlertShutMessageCenter')->middleware('IsSessionValid');

// /Alerts/AlertCenter*
Route::get('/user/dashboard', 'UserController@Dashboard')->middleware('IsSessionValid');

// /User/Profile
Route::get('/user/profile', 'UserProfile')->middleware('IsSessionValid');
Route::get('/user/profile/userinfo/{name}/{surname}/{username}', 'UserProfileController@SaveUserPersonalInfo')->middleware('IsSessionValid');
Route::get('/user/profile/SaveUserAddressInfo/{address}/{city}/{country}', 'UserProfileController@SaveUserInfo')->middleware('IsSessionValid');

// /User/Create
Route::get('/user/create', 'CreateController@Index')->middleware('IsSessionValid');

// /User/News
Route::get('/user/news', 'NewsController@NewsView')->middleware('IsSessionValid');
Route::get('/user/news/podcast', 'NewsController@PodcastView')->middleware('IsSessionValid');

// /User/Investment
Route::get('/user/investment', 'InvestmentController@InvestmentView')->middleware('IsSessionValid');
Route::get('/user/investment/company/{name}', 'InvestmentController@Company')->middleware('IsSessionValid');
Route::get('/user/investment/service/{name}', 'InvestmentController@Service')->middleware('IsSessionValid');
Route::get('/user/investment/event/{name}', 'InvestmentController@Event')->middleware('IsSessionValid');
Route::get('/user/investment/hedge-fund/{name}', 'InvestmentController@HedgeFund')->middleware('IsSessionValid');
//Route::get('/user/news/podcast', 'NewsController@PodcastView')->middleware('IsSessionValid');

//Get Requests from /
Route::get('/register/email/{email}/password/{password}/name/{name}/surname/{surname}', 'IndexController@register');
Route::get('/login/email/{email}/password/{password}', 'IndexController@login');
Route::get('/subscribe/email/{email}', 'IndexController@subscribe');
Route::get('/CURRENCY_EXCHANGE', 'IndexController@exchangeRate');
Route::get('/activate/{code}', 'IndexController@activate');
Route::get('/news/frontpage', 'IndexController@getNews');
Route::get('/logout', 'IndexLogout');
Route::get('/contactus/{name}/{email}/{comments}', 'IndexController@contactus');