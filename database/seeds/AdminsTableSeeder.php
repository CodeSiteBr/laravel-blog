<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'name'      => 'Administrador',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('123456'),
            'phone'     => '111111111',
            'status'    => '1',
        ]);
    }
}
