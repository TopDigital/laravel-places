<?php

namespace TopDigital\Places\Seeders;

use Illuminate\Database\Seeder;
use TopDigital\Places\Models\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            factory(Place::class)->create();
        }
    }
}
