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
//Get Requests
Route::get('/', function () {
    return view('landing');
});

Route::get('/terminal', function () {

    echo "Terminal";
});
//Post requests
Route::get('/register/email/{email}/password/{password}', 'IndexController@register');
Route::get('/login/email/{email}/password/{password}', 'IndexController@login');

