<?php

use App\User;
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
            'name'      => 'Administrador master',
            'email'     => 'admin@exemplo.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Usuário comum',
            'email'     => 'user@exemplo.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
