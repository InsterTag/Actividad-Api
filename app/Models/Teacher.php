<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Teacher extends Model
{
    protected $fillable = ['name','email', 'area_id', 'training_center_id'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }

    public function scopeInclude($query, $relations)
    {
        $allowedRelations = ['area', 'trainingCenter', 'courses'];
        $validRelations = array_intersect($allowedRelations, $relations);

        return $query->with($validRelations);
    }

    public function scopeFilterBy($query, array $filters)
    {
        foreach ($filters as $key => $value) {
            if ($key !== 'with') {
                $query->where($key, 'LIKE', "%{$value}%");
            }
        }

        return $query;
    }
}
