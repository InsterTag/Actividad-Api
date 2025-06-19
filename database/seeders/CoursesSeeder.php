<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            ['course_number' => '2020', 'day' => '2025-12-10', 'area_id' => 1, 'training_center_id' => 1],
            ['course_number' => '3030', 'day' => '2025-12-11', 'area_id' => 2, 'training_center_id' => 2],
            ['course_number' => '4040', 'day' => '2025-12-12', 'area_id' => 3, 'training_center_id' => 3],
        ]);
    }
}
