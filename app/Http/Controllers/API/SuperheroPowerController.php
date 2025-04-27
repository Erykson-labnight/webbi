<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Power;
use Illuminate\Http\Request;

class SuperheroPowerController extends Controller
{
    public function index()
    {
        return response()->json(Power::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'power_name' => 'required|string',
            'superhero_id' => 'required|exists:superheroes,id',
        ]);

        $power = Power::create($request->all());

        return response()->json($power, 201);  
    }

    public function show(string $id)
    {
        $power = Power::find($id);

        if (!$power) {
            return response()->json(['message' => 'Power not found'], 404);
        }

        return response()->json($power);
    }

    public function update(Request $request, string $id)
    {
        $power = Power::find($id);

        if (!$power) {
            return response()->json(['message' => 'Power not found'], 404);
        }

        $power->update($request->all());

        return response()->json($power);
    }

    public function destroy(string $id)
    {
        $power = Power::find($id);

        if (!$power) {
            return response()->json(['message' => 'Power not found'], 404);
        }

        $power->delete();

        return response()->json(['message' => 'Power deleted successfully']);
    }
}
