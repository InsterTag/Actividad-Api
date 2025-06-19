<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\TrainingCenter;
use Illuminate\Support\Facades\DB;

class TrainingCentersSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        TrainingCenter::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        TrainingCenter::insert([
            ['name' => 'Centro de Software', 'location' => 'Popayán'],
            ['name' => 'Centro de Diseño', 'location' => 'Cali'],
            ['name' => 'Centro Agropecuario', 'location' => 'Palmira'],
        ]);
    }
}