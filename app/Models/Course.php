<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{

    protected $fillable = ['course_number','day', 'area_id', 'training_center_id'];

    protected $allowIncluded = ['apprentice'];


    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teacher');
    }

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }

    public function scopeInclude($query, $relations)
    {
        $allowedRelations = ['area', 'trainingCenter', 'teachers', 'apprentices'];
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
