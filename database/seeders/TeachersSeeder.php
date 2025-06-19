<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::insert([
            ['name' => 'Pepe', 'email' => 'estiven@gmail.com', 'area_id' => 1, 'training_center_id' => 1, 'created_at' => now(),'updated_at' => now(),],
            ['name' => 'Mayra', 'email' => 'Mayra@gmail.com',  'area_id' => 2, 'training_center_id' => 2, 'created_at' => now(),'updated_at' => now(),],
            ['name' => 'Julieta', 'email' => 'Julieta@gmail.com',  'area_id' => 3, 'training_center_id' => 3, 'created_at' => now(),'updated_at' => now(),],
        ]);

    }
}
