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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','App\Http\Controllers\PagesController@welcome');

/*Route::get('/aboutus', function () {
    return view('pages.aboutus');
});*/

Route::get('/aboutus','App\Http\Controllers\PagesController@aboutus');
Route::get('/calendar','App\Http\Controllers\PagesController@calendar');
Route::get('/widgets', function () {
    return view('pages.widgets');
});