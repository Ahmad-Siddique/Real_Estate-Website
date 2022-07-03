<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\Posts@home');



Route::get('/signup', function () {
    return view('sign_up');
});


Route::get('/signin ', function () {
    return view('sign_in');
});


Route::get('/dashboard' , function () {
    return view('dashboard');
});


Route::get('/homepriceprediction', function () {
    return view('home_price_prediction');
});

Route::get('/aboutus ', function () {
    return view('aboutUs');
});

Route::get('/contactus', function () {
    return view('contactUs');
});

Route::get('/createpost', function () {
    return view('create_housing');
});

Route::get('/yourposts', 'App\Http\Controllers\Posts@allPosts');

Route::get('/editpost/{id}', 'App\Http\Controllers\Posts@edit');

Route::get('/houseposts', 'App\Http\Controllers\Posts@displaying');

Route::get('/housedetails/{id}', 'App\Http\Controllers\Posts@details');


Route::get('/updateinfo', function () {
    return view('update_info');
});

Route::get('/delete/{id}', 'App\Http\Controllers\Posts@delete');



Route::post('/editpost/{id}', 'App\Http\Controllers\Posts@update');


Route::post('/contactus', 'App\Http\Controllers\ContactController@store');

Route::post('/createpost', 'App\Http\Controllers\Posts@store');



Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index' )->name('/');


Route::post('/houseposts', 'App\Http\Controllers\Posts@filter');


Route::get('/logout','App\Http\Controllers\Posts@logout');