<?php

namespace TopDigital\Places\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create place']);
        Permission::create(['name' => 'update place']);
        Permission::create(['name' => 'delete place']);

        Role::findByName('admin')
            ->givePermissionTo([
                'create place',
                'update place',
                'delete place',
            ]);

        Role::findByName('manager')
            ->givePermissionTo([
                'create place',
                'update place',
                'delete place',
            ]);
    }
}
