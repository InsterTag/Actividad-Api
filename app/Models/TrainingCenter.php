<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class TrainingCenter extends Model
{
    protected $fillable = ['name', 'address', 'area_id'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function scopeInclude($query, $relations)
    {
        $allowedRelations = ['teachers', 'courses'];
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
