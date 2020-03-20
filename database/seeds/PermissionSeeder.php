<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit notes']);
        Permission::create(['name' => 'create notes']);
        Permission::create(['name' => 'destroy notes']);
    }
}
