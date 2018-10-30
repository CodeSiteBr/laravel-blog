<?php

use App\Models\User\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Administrador',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Usuário',
            'email'     => 'user@user.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
