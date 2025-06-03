<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasSeeder extends Seeder
{
    public function run()
    {
        
        Area::insert([
            ['name' => 'Matemáticas'],
            ['name' => 'Ciencias'],
            ['name' => 'Tecnología'],
        ]);
    }
}