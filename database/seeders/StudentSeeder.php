<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'id' => 1,
            'name' => 'Lautaro Rodriguez',
            'email' => 'lautaro.rodriguez553@gmail.com',
            'created_at' => '2024-11-27 08:53:56',
            'updated_at' => '2024-11-27 08:53:56',
        ]);

        Student::create([
            'id' => 2,
            'name' => 'Simon Malvinas',
            'email' => 'simonmalvinas@gmail.com',
            'created_at' => '2024-11-27 08:54:05',
            'updated_at' => '2024-11-27 08:54:05',
        ]);
    }
}
