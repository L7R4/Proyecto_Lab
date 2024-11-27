<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'id' => 1,
            'name' => 'Juan Pablo Merino',
            'created_at' => '2024-11-27 08:54:15',
            'updated_at' => '2024-11-27 08:54:15',
        ]);

        Professor::create([
            'id' => 2,
            'name' => 'Rossi Valentino',
            'created_at' => '2024-11-27 08:55:09',
            'updated_at' => '2024-11-27 08:55:09',
        ]);
    }
}
