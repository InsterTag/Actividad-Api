<?php

namespace App\Services\Impl;

use App\Models\Teacher;
use App\Services\TeacherService;

class TeacherServiceImpl
{
    public function create(array $data){
        return Teacher::create($data);
    }
}
