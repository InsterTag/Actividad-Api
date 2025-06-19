<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_teachers')->insert([
            ['course_id' => 1, 'teacher_id' => 1],
            ['course_id' => 2, 'teacher_id' => 2],
            ['course_id' => 3, 'teacher_id' => 3],
        ]);
    }
}
