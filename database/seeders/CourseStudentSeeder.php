<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseStudent;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseStudent::create([
            'id' => 1,
            'student_id' => 1,
            'course_id' => 1,
            'commission_id' => 1,
            'created_at' => '2024-11-27 09:04:32',
            'updated_at' => '2024-11-27 09:04:32',
        ]);
    }
}
