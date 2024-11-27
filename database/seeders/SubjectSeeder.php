<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'id' => 1,
            'name' => 'Base de datos I',
            'created_at' => '2024-11-27 08:53:42',
            'updated_at' => '2024-11-27 08:53:42',
        ]);

        Subject::create([
            'id' => 2,
            'name' => 'Sistema de Informacion I',
            'created_at' => '2024-11-27 08:54:39',
            'updated_at' => '2024-11-27 08:54:39',
        ]);
    }
}
