<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;


class ComputerController extends Controller
{
    public function index(Request $request)
    {
        $query = Computer::query();

        if ($request->has('with')) {
            $relations = explode(',', $request->with);
            $query->include($relations);
        }

        $filters = $request->all();
        $query->filterBy($filters);

        return $query->get();
    }


    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function create(Request $request)
    {
        $request->validate([
            'number' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
        ]);

        $computers = $this->computer->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $computers,
        ], 201);
    }
}