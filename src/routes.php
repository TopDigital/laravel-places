<?php

Route::group([
    'namespace' => 'TopDigital\Content\Http\Controllers',
    'middleware' => ['api', 'cors', 'auth:api'],
    'prefix' => 'api'
], function () {
    Route::resource('places', 'PlacesController')->only(['index', 'store', 'update', 'destroy']);
});

