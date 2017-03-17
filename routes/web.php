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

use App\ProxyItem;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proxy/{id}', 'HomeController@proxy');

Auth::routes();

Route::get('/list', 'HomeController@list');

Route::get('/create', 'HomeController@create');

Route::post('/create', 'HomeController@store');
