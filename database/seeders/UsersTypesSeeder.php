<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserType;

class UsersTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::create([
            'id' => 1,
            'role' => 'Adm'
        ]);

        UserType::create([
            'id' => 2,
            'role' => 'Monitor',
        ]);

        UserType::create([
            'id' => 3,
            'role' => 'Aluno',
        ]);
    }
}
