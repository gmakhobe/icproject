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
Route::get('/forgotpassword', function () {
    return view('/forgotpassword', ["Title" => $GLOBALS['AppTitle'], "Name"=> "Forgot Password", "Indicator"=> 1]);
});
Route::get('/forgotpassword/email/{email}', 'IndexController@ForgotPassword');
Route::get('/passwordreset/{hash}', 'IndexController@PasswordResetView');
Route::get('/resetpasswordhard/password/{password}/hash/{hash}/email/{email}', 'IndexController@PasswordResetHard');
// /User/*
Route::get('/alert/alertcenter', 'AlertsController@AlertGetAlertCenterContent')->middleware('IsSessionValid');
Route::get('/alert/messagecenter', 'AlertsController@AlertGetMessageCenterContent')->middleware('IsSessionValid');
Route::get('/alert/alertcenter/off', 'AlertsController@AlertShutAlertCenter')->middleware('IsSessionValid');
Route::get('/alert/messagecenter/off', 'AlertsController@AlertShutMessagesCenter')->middleware('IsSessionValid');

// /Alerts/AlertCenter*
Route::get('/user/dashboard', 'UserController@Dashboard')->middleware('IsSessionValid');

// /User/Profile
Route::get('/user/profile', 'UserProfile')->middleware('IsSessionValid');
Route::get('/user/profile/userinfo/{name}/{surname}/{username}', 'UserProfileController@SaveUserPersonalInfo')->middleware('IsSessionValid');
Route::get('/user/profile/SaveUserAddressInfo/{address}/{city}/{country}', 'UserProfileController@SaveUserInfo')->middleware('IsSessionValid');

// /User/Create
Route::get('/user/create', 'CreateController@Index')->middleware('IsSessionValid');

// /User/Store-Room
Route::get('/user/storeroom', 'UserController@Storeroom')->middleware('IsSessionValid');

// /User/News /user/news/
Route::get('/user/news', 'NewsController@NewsView')->middleware('IsSessionValid');
Route::get('/user/news/read/{heading}/{id}', 'NewsController@NewsViewRead')->middleware('IsSessionValid');
Route::get('/user/news/article/read/{heading}/{id}', 'NewsController@NewsViewArticleRead')->middleware('IsSessionValid');
Route::get('/user/news/comment/{comment}/{newsId}/{commentInd}', 'NewsController@NewsViewReadComment')->middleware('IsSessionValid');
Route::get('/user/news/articles', 'NewsController@ArticlesView')->middleware('IsSessionValid');
Route::get('/user/news/channels', 'NewsController@ChannelsView')->middleware('IsSessionValid');
Route::get('/user/news/channel/name/{name}/{id}/{type}', 'NewsController@ChannelNameView')->middleware('IsSessionValid');
Route::get('/user/news/channel/search/{search}/{id}', 'NewsController@ChannelsViewSearch')->middleware('IsSessionValid');
Route::get('/user/news/video/{name}/{id}', 'NewsController@NewsViewVideo')->middleware('IsSessionValid');
Route::get('/user/news/podcasts', 'NewsController@PodcastView')->middleware('IsSessionValid');
Route::get('/user/news/podcasts/increment/{PodcastId}', 'NewsController@PodcastAddView')->middleware('IsSessionValid');
Route::get('/user/news/where-to-invest', 'NewsController@WhereToInvestView')->middleware('IsSessionValid');
Route::get('/user/news/blog', 'NewsController@NewsBlogView')->middleware('IsSessionValid');
Route::get('/user/news/blog/read/{heading}/{id}', 'NewsController@NewsBlogReadView')->middleware('IsSessionValid');
Route::get('/user/news/blog/author/{name}/{id}', 'NewsController@NewsBlogAuthorView')->middleware('IsSessionValid');
Route::get('/user/news/blog/search/{search}', 'NewsController@NewsBlogSearch')->middleware('IsSessionValid');

// /User/News/Subject

// Start /User/Investment
Route::get('/user/investment', 'InvestmentController@InvestmentView')->middleware('IsSessionValid');
Route::get('/user/investment/company/{name}', 'InvestmentController@Company')->middleware('IsSessionValid');
Route::get('/user/investment/service/{name}', 'InvestmentController@Service')->middleware('IsSessionValid');
Route::get('/user/investment/startupindex/{name}', 'InvestmentController@StartUpIndex')->middleware('IsSessionValid');
Route::get('/user/investment/hedgefund/{name}', 'InvestmentController@HedgeFund')->middleware('IsSessionValid');
Route::get('/user/investment/event/{name}', 'InvestmentController@Event')->middleware('IsSessionValid');
Route::get('/user/investment/newschannel/{name}', 'InvestmentController@NewsChannel')->middleware('IsSessionValid');
// End /User/Investment

//Route::get('/user/news/podcast', 'NewsController@PodcastView')->middleware('IsSessionValid');

// /User/rawmate
Route::get('/user/rawmate', 'RawmateterialController@RawmateView')->middleware('IsSessionValid');
Route::get('/user/rawmate/product/{name}/{id}', 'RawmateterialController@RawmateProductView')->middleware('IsSessionValid');
Route::get('/user/rawmate/seller/{name}/{id}', 'RawmateterialController@RawmateSellerProfileView')->middleware('IsSessionValid');
Route::get('/user/rawmate/brand/{name}', 'RawmateterialController@RawmateBrandView')->middleware('IsSessionValid');

// /User/profile
Route::get('/user/profile', 'ProfileController@ProfileView')->middleware('IsSessionValid');
Route::get('/user/profile/awards', 'ProfileController@AwardsView')->middleware('IsSessionValid');
Route::get('/user/profile/calender', 'ProfileController@CalenderView')->middleware('IsSessionValid');

// /User/Create
Route::get('/user/create', 'CreateController@CreateView')->middleware('IsSessionValid');

//Get Requests from /
Route::get('/register/email/{email}/password/{password}/name/{name}/surname/{surname}', 'IndexController@register');
Route::get('/login/email/{email}/password/{password}', 'IndexController@login');
Route::get('/subscribe/email/{email}', 'IndexController@subscribe');
Route::get('/CURRENCY_EXCHANGE', 'IndexController@exchangeRate');
Route::get('/activate/{code}', 'IndexController@activate');
Route::get('/news/frontpage', 'IndexController@getNews');
Route::get('/logout', 'IndexLogout');
Route::get('/contactus/{name}/{email}/{comments}', 'IndexController@contactus');

//User Login and Register
Route::get('/user/login', 'IndexController@LoginView');
Route::get('/user/register', 'IndexController@RegisterView');


//User Ideas
Route::get('/user/ideas', 'IdeasController@IndexView')->middleware('IsSessionValid');
Route::get('/user/ideas/strategies-and-indicators', 'IdeasController@StrategiesIndicatorsView')->middleware('IsSessionValid');
Route::get('/user/ideas/financial-literacy', 'IdeasController@FinancialLiteracy')->middleware('IsSessionValid');
