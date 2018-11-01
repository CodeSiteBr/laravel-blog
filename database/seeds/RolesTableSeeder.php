<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create(['name' => 'Admin',]);
        role::create(['name' => 'Editor',]);
        role::create(['name' => 'Write',]);
        role::create(['name' => 'Publisher',]);
    }
}
