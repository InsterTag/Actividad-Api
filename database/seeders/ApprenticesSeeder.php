<?php

namespace Database\Seeders;

use App\Models\Apprentice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApprenticesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apprentice::insert([
            ['name' => 'Estiven', 'email' => 'estiven@gmail.com', 'cell_number' => '3104521475', 'course_id' => 1, 'computer_id' => 1, 'created_at' => now(),'updated_at' => now()],
            ['name' => 'Alejo', 'email' => 'Alejo@gmail.com', 'cell_number' => '3104991499', 'course_id' => 2, 'computer_id' => 2, 'created_at' => now(),'updated_at' => now(),],
            ['name' => 'Carlos', 'email' => 'carlos@gmail.com', 'cell_number' => '3155520005', 'course_id' => 3, 'computer_id' => 3, 'created_at' => now(),'updated_at' => now(),],
        ]);
    }
}
