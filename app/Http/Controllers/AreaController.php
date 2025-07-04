<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $query = Area::query();

        if ($request->has('with')) {
            $relations = explode(',', $request->with);
            $query->include($relations);
        }

        $filters = $request->all();
        $query->filterBy($filters);

        return $query->get();
    }





    protected $area;

    public function __construct(Area $area)
    {
        $this->area = $area;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
        ]);

        $areas = $this->area->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $areas,
        ], 201);
    }
}