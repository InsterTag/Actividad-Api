<?php

namespace App\Services\Impl;

use App\Services\ApprenticeService;
use App\Models\Apprentice;

class ApprenticeServiceImpl
{
    public function create(array $data){
        return Apprentice::create($data);
    }
}
