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

Route::get('/','FrondEndController@homePage')->name('home');
//Route::get('about-us','FrondEndController@aboutUs')->name('about');
Route::get('about-us',['uses'=>'FrondEndController@aboutUs', 'as'=>'about']);
