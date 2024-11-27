<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SubjectSeeder::class,
            StudentSeeder::class,
            ProfessorSeeder::class,
            CourseSeeder::class,
            CommissionSeeder::class,
            CourseStudentSeeder::class,
        ]);
    }
}
