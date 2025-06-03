<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        return response()->json(TrainingCenter::select('id', 'name')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $trainning = TrainingCenter::create($request->all());
        return response()->json($trainning);
    }

    public function show($id)
    {
        $center = TrainingCenter::findOrFail($id);
        return response()->json($center);
    }
}