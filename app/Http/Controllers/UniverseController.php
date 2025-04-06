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
            'name' => 'required|string|max:255',
        ]);

        Universe::create($request->all());

        return redirect()->route('universes.index');
    }

    public function show(Universe $universe)
    {
        return view('universes.show', compact('universe'));
    }
}
