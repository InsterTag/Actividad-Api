<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        if ($request->has('with')) {
            $relations = explode(',', $request->with);
            $query->include($relations);
        }

        $filters = $request->all();
        $query->filterBy($filters);

        return $query->get();
    }



    
    protected $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function create(Request $request)
    {
        $request->validate([
            'course_number' => 'required|string|max:50',
            'day' => 'required|string|max:50',
            'area_id' => 'required|string|max:50',
            'training_center_id' => 'required|string|max:50',
        ]);

        $courses = $this->course->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $courses,
        ], 201);
    }
}
