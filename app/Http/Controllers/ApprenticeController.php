<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index(Request $request)
    {
        $query = Apprentice::query();

        if ($request->has('with')) {
            $relations = explode(',', $request->with);
            $query->include($relations);
        }

        $filters = $request->all();
        $query->filterBy($filters);

        return $query->get();
    }






    protected $apprentice;

    public function __construct(Apprentice $apprentice)
    {
        $this->apprentice = $apprentice;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'cell_number' => 'required|string|max:50',
            'course_id' => 'required|string|max:50',
            'computer_id' => 'required|string|max:50',


        ]);

        $apprentices = $this->apprentice->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $apprentices,
        ], 201);
    }
}
