<?php

namespace App\Services\Impl;

use App\Services\AreaService;
use App\Models\Area;


class AreaServiceImpl
{
    public function create(array $data){
        return Area::create($data);
    }
}
