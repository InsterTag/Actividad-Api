<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index(Request $request)
    {
        $query = TrainingCenter::query();

        if ($request->has('with')) {
            $relations = explode(',', $request->with);
            $query->include($relations);
        }

        $filters = $request->all();
        $query->filterBy($filters);

        return $query->get();
    }

    
}