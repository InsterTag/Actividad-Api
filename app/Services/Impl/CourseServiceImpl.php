<?php

namespace App\Services\Impl;

use App\Models\Course;
use App\Services\CourseService;

class CourseServiceImpl
{
    public function create(array $data){
        return Course::create($data);
    }
}

