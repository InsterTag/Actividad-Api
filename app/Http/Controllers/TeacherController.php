<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Teacher::query();

        if ($request->has('with')) {
            $relations = explode(',', $request->with);
            $query->include($relations);
        }

        $filters = $request->all();
        $query->filterBy($filters);

        return $query->get();
    }





    protected $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'area_id' => 'required|string|max:50',
            'training_center_id' => 'required|string|max:50',
        ]);

        $teachers = $this->teacher->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $teachers,
        ], 201);
    }
}

