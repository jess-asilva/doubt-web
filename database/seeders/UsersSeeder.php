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
            'ra-rm' => '20222930156',
            'user_type_id' => 1,
        ]);

        User::create([
            'name' => 'Monitor',
            'email' => 'monitor@gmail.com',
            'password' => bcrypt('654321'),
            'ra-rm' => '20222930157',
            'user_type_id' => 2,
        ]);


        User::create([
            'name' => 'aluno',
            'email' => 'aluno@gmail.com',
            'password' => bcrypt('111222'),
            'ra-rm' => '20222930158',
            'user_type_id' => 3,
        ]);
    }
}
