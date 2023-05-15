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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'frontend'], function(){
    Route::resource('home', 'HomeController');
});

Route::group(['namespace'=>'backend'], function(){
    Route::resource('dashboard', 'DashboardController');
});


// Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
