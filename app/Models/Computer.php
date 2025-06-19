<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Computer extends Model
{
    protected $fillable = ['number','brand'];

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }

    public function scopeInclude($query, $relations)
    {
        $allowedRelations = ['apprentices'];
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
