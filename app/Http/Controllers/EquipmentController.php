<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    // Метод для создания нового оборудования
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price_per_day' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $equipment = Equipment::create($validatedData);

        return response()->json($equipment, 201);
    }

    // Метод для получения списка оборудования
    public function index()
    {
        $equipment = Equipment::all();

        return response()->json($equipment);
    }

    // Метод для получения конкретного оборудования по id
    public function show($id)
    {
        $equipment = Equipment::find($id);

        if (!$equipment) {
            return response()->json(['message' => 'Equipment not found'], 404);
        }

        return response()->json($equipment);
    }
}
