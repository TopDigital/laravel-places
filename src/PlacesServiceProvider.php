<?php

namespace TopDigital\Places;

use Illuminate\Support\ServiceProvider;
use TopDigital\Places\Models\Place;
use TopDigital\Places\Policies\PlacePolicy;

class PlacesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadFactoriesFrom(__DIR__.'/../database/factories');

        \Gate::policy(Place::class, PlacePolicy::class);
    }
}
