<?php

use Illuminate\Http\Request;

Route::group([
    'middleware' => 'api'
], function () {
    Route::get('/generate-token', 'PersonController@tokenGenerator');
    Route::get('/find', 'PersonController@index');
    Route::get('/get-data', 'PersonController@getData');
    Route::get('/remove-data', 'PersonController@deleteData');
});
