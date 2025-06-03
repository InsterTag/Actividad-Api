<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return response()->json(Area::select('id', 'name')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $areas = Area::create($request->all());
        return response()->json($areas);
    }
    

    public function show($id)
    {
        $area = Area::findOrFail($id);
        return response()->json($area);
    }

}