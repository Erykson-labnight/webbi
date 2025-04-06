<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index', compact('universes'));
    }

    public function create()
    {
        return view('universes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:universes',
        ]);

        Universe::create($request->all());

        return redirect()->route('universes.index');
    }

    public function show(Universe $universe)
    {
        return view('universes.show', compact('universe'));
    }

    public function edit(Universe $universe)
    {
        return view('universes.edit', compact('universe'));
    }

    public function update(Request $request, Universe $universe)
    {
        $request->validate([
            'name' => 'required|unique:universes,name,' . $universe->id,
        ]);

        $universe->update($request->all());

        return redirect()->route('universes.index');
    }

    public function destroy(Universe $universe)
    {
        $universe->delete();

        return redirect()->route('universes.index');
    }
}
