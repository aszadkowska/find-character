<?php

use Illuminate\Http\Request;

Route::group([
    'middleware' => 'api'
], function () {
    Route::get('/generate-token', 'PersonController@tokenGenerator');
    Route::get('/characters', 'PersonController@index');
    Route::post('/insert', 'PersonController@insert');
});
