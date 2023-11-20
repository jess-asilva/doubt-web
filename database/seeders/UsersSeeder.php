<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'ra/rm' => '20222930156',
            'id_type_user' => 1,
        ]);

        User::create([
            'name' => 'Monitor',
            'email' => 'monitor@gmail.com',
            'password' => bcrypt('654321'),
            'ra/rm' => '20222930157',
            'id_type_user' => 2,
        ]);


        User::create([
            'name' => 'aluno',
            'email' => 'aluno@gmail.com',
            'password' => bcrypt('111222'),
            'ra/rm' => '20222930158',
            'id_type_user' => 3,
        ]);
    }
}
