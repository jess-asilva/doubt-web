<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeOfUser;

class TypeOfUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfUser::create([
           'id_type_user' => 1,
           'office' => 'Adm'
        ]);

        TypeOfUser::create([
            'id_type_user' => 2,
            'office' => 'Monitor',
         ]);

         TypeOfUser::create([
            'id_type_user' => 3,
            'office' => 'Aluno',
         ]);
    }
}

