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
        //1
        User::create([
            'name' => 'Coordenação',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'rarm' => '20222930156',
            'user_type_id' => 1,
        ]);

        //2
        User::create([
            'name' => 'Brenda Cristina',
            'email' => 'monitor@gmail.com',
            'password' => bcrypt('123456'),
            'rarm' => '20222930181',
            'user_type_id' => 2,
        ]);

        //3
        User::create([
            'name' => 'Heloysa Conceição',
            'email' => 'aluno@gmail.com',
            'password' => bcrypt('668272'),
            'rarm' => '20222930161',
            'user_type_id' => 3,
        ]);

        //4
        User::create([
            'name' => 'Jéssica Alves',
            'email' => 'jessica@gmail.com',
            'password' => bcrypt('123456'),
            'rarm' => '20222930166',
            'user_type_id' => 3,
        ]);

        //5
        User::create([
            'name' => 'Isabella Araújo',
            'email' => 'isabellaa@gmail.com',
            'password' => bcrypt('654321'),
            'rarm' => '20222930178',
            'user_type_id' => 2,
        ]);

        //6
        User::create([
            'name' => 'Ronald Araújo',
            'email' => 'ronald@gmail.com',
            'password' => bcrypt('123456'),
            'rarm' => '20222930176',
            'user_type_id' => 2,
        ]);
    }
}
