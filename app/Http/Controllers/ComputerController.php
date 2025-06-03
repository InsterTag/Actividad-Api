<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return response()->json(Computer::select('id', 'name')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'serial_number' => 'required|max:255',
        ]);


        $computer = Computer::create($request->all());
        return response()->json($computer);
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }
}