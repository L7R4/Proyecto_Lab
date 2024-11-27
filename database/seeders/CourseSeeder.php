<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'id' => 1,
            'name' => 'Curso 1',
            'subject_id' => 1,
            'created_at' => '2024-11-27 08:54:29',
            'updated_at' => '2024-11-27 08:54:29',
        ]);

        Course::create([
            'id' => 2,
            'name' => 'Curso 2',
            'subject_id' => 2,
            'created_at' => '2024-11-27 08:54:49',
            'updated_at' => '2024-11-27 08:54:49',
        ]);
    }
}
