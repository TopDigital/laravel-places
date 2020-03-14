<?php

Route::group([
    'namespace' => 'TopDigital\Places\Http\Controllers',
    'middleware' => ['api', 'cors', 'auth:api'],
    'prefix' => 'api'
], function () {
    Route::resource('places', 'PlacesController')->only(['index', 'store', 'update', 'destroy']);
});

