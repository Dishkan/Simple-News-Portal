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

Route::get('/',['uses'=>'App\Http\Controllers\IndexController@show','as'=>'home']);
Route::get('/business',['uses'=>'App\Http\Controllers\IndexController@business','as'=>'business']);
Route::get('/sport',['uses'=>'App\Http\Controllers\IndexController@sport','as'=>'sport']);
Route::get('/music',['uses'=>'App\Http\Controllers\IndexController@music','as'=>'music']);
Route::get('/Finance',['uses'=>'App\Http\Controllers\IndexController@finance','as'=>'Finance']);
Route::get('/Economics',['uses'=>'App\Http\Controllers\IndexController@economics','as'=>'Economics']);
Route::get('/Entrepreneurship',['uses'=>'App\Http\Controllers\IndexController@entrepreneurship','as'=>'Entrepreneurship']);
Route::get('/Football',['uses'=>'App\Http\Controllers\IndexController@football','as'=>'Football']);
Route::get('/Workout',['uses'=>'App\Http\Controllers\IndexController@workout','as'=>'Workout']);
Route::get('/Swimming',['uses'=>'App\Http\Controllers\IndexController@swimming','as'=>'Swimming']);
Route::get('/Rapping',['uses'=>'App\Http\Controllers\IndexController@rapping','as'=>'Rapping']);
Route::get('/Classical',['uses'=>'App\Http\Controllers\IndexController@classical','as'=>'Classical']);
Route::get('/Vocal',['uses'=>'App\Http\Controllers\IndexController@vocal','as'=>'Vocal']);
Route::get('/allcategory',['uses'=>'App\Http\Controllers\IndexController@allcat','as'=>'allcategory']);

