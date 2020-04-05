<?php

use Illuminate\Http\Request;

Route::group([
    'middleware' => 'checkAuthenticationToken'
], function () {
    Route::get('/person', 'PersonController@index');
});

Route::group([
    'middleware' => 'checkToken'
], function () {
    Route::get('/generate-token', 'PersonController@tokenGenerator');
    Route::post('/insert', 'PersonController@insert');
});
