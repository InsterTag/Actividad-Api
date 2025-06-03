<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Computer;

class ComputersSeeder extends Seeder
{
    public function run()
    {
        Computer::insert([
            ['number' => 'PC-001', 'brand' => 'Dell'],
            ['number' => 'PC-002', 'brand' => 'HP'],
        ]);
    }
}