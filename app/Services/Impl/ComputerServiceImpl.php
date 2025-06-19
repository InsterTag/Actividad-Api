<?php

namespace App\Services\Impl;

use App\Services\ComputerService;
use App\Models\Computer;

class ComputerServiceImpl
{
    public function create(array $data){
        return Computer::create($data);
    }
}
