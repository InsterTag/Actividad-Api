<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        AreasSeeder::class,
        TrainingCentersSeeder::class,
        ComputersSeeder::class,
        CoursesSeeder::class,
        TeachersSeeder::class,
        ApprenticesSeeder::class,
        CourseTeacherSeeder::class,
    ]);
    }
}
