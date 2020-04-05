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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/find', 'PersonController@index');

//Route::post('/find', 'PersonController@index');
//Route::get('/get-data', 'PersonController@getData');

//Route::post('/login', 'UserController@login');
//Route::post('/register', 'UserController@register');
//Route::group(['middleware' => 'auth:api'], function(){
//    Route::post('details', 'UserController@details');
//    Route::post('/find', 'PersonController@index');
//});
