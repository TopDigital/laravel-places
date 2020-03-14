<?php

Route::group([
    'namespace' => 'TopDigital\Places\Http\Controllers',
    'middleware' => ['api', 'auth:api'],
    'prefix' => 'api'
], function () {
    Route::resource('places', 'PlacesController')->only(['index', 'store', 'update', 'destroy']);
});

