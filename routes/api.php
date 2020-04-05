<?php

Route::group([
    'middleware' => 'checkAuthenticationToken'
], function () {
    Route::get('/person', 'PersonController@index');
});

Route::group([
    'middleware' => 'checkToken'
], function () {
    Route::get('/generate-token', 'InitiateController@tokenGenerator');
    Route::post('/insert', 'InitiateController@insert');
});
