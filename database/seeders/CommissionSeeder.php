<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commission;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commission::create([
            'id' => 1,
            'classroom' => '1.2',
            'schedule' => '10:30',
            'professor_id' => 1,
            'course_id' => 2,
            'created_at' => '2024-11-27 08:55:28',
            'updated_at' => '2024-11-27 08:59:11',
        ]);

        Commission::create([
            'id' => 2,
            'classroom' => '1.3',
            'schedule' => '17:00',
            'professor_id' => 1,
            'course_id' => 1,
            'created_at' => '2024-11-27 08:55:54',
            'updated_at' => '2024-11-27 08:55:54',
        ]);

        Commission::create([
            'id' => 3,
            'classroom' => '1.2',
            'schedule' => '09:00',
            'professor_id' => 2,
            'course_id' => 2,
            'created_at' => '2024-11-27 08:56:10',
            'updated_at' => '2024-11-27 08:59:27',
        ]);
    }
}
