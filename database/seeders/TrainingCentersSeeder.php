<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\TrainingCenter;

class TrainingCentersSeeder extends Seeder
{
    public function run()
    {
        TrainingCenter::insert([
            ['name' => 'Centro A', 'location' => 'Ciudad A'],
            ['name' => 'Centro B', 'location' => 'Ciudad B'],
        ]);
    }
}