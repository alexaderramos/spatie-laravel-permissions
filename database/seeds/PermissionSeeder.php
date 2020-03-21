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
        Permission::create(['name' => 'notes.edit']);
        Permission::create(['name' => 'notes.create']);
        Permission::create(['name' => 'notes.destroy']);
        Permission::create(['name' => 'notes.show']);
    }
}
