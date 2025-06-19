<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Apprentice extends Model
{

    protected $fillable = ['name','email','cell_number', 'course_id', 'computer_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }

    public function scopeInclude($query, $relations)
    {
        $allowedRelations = ['course', 'computer'];
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
