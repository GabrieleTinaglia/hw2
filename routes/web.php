<?php

use Illuminate\Support\Facades\Route;
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization'); 
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

Route::get('home', function () {
    return view('home');
});
Route::get('menu', function () {
    return view('menu');
});

Route::get('crew', function () {
    return view('crew');
});

Route::get('prenota', function () {
    return view('prenota');
});

Route::get('contatti', function () {
    return view('contatti');
});
Route::get('areap', function () {
    return view('areap');
});
Route::get('login', function () {
    return view('login');
});
Route::get('log', function(){
    return view('login');
});
Route::get('redirect', function(){
    return view('redirect');
});
Route::post('register', "RegisterController@create");
Route::get("regi", "LoginController@getUsernames");
Route::post("log", "LoginController@checkLogin");
Route::post("login", "RegisterController@create");
Route::post('postReviews', "ReviewController@create");
Route::get("reviews/all", "ReviewController@getReviews");
Route::get("area", "LoginController@getName");
Route::get("reviews/p", "PersonalController@getReviews");
Route::post("conta", "ContactController@create");
Route::get("reserve", "ReservationController@getReservations");
Route::post("postReservations", "ReservationController@create");
Route::get("getReservations", "PersonalController@getReservations");
Route::get("logout", "LoginController@logout");
Route::post("modifyPass", "PersonalController@modifyPassword");
Route::post("modifyEm", "PersonalController@modifyEmail");
Route::post("modifyNum", "PersonalController@modifyNumber");
Route::get("chef", "InstagramController@getChef");
Route::get("elimina/{valore}/{valore2}", "PersonalController@deleteReservations");
Route::get("menu/dish", "MenuController@getDishes");
Route::post("eliminaP", "MenuController@deleteDish");
Route::post("aggiungiP","MenuController@aggiungiPortata");