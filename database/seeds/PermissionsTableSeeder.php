<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'User create',]);
        Permission::create(['name' => 'User update',]);
        Permission::create(['name' => 'User delete',]);
        Permission::create(['name' => 'Role CRUD',]);
        Permission::create(['name' => 'Permission CRUD',]);
        Permission::create(['name' => 'Tag CRUD',]);
        Permission::create(['name' => 'Category CRUD',]);
        Permission::create(['name' => 'Post create',]);
        Permission::create(['name' => 'Post update',]);
        Permission::create(['name' => 'Post delete',]);
        Permission::create(['name' => 'Post publish',]);
    }
}
