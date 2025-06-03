<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'name',
        'description',
        'area_id',
        'training_center_id',
    ];
}
