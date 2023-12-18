<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();

        return view('admin.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:careers'
        ]);

        $career = Career::create($request->all());
        return redirect()->route('admin.careers.edit', compact('career'))->with('info', 'La nueva carrera se creó correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        return view('admin.careers.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:careers,slug,$career->id"
        ]);

        $career->update($request->all());
        return redirect()->route('admin.careers.edit', compact('career'))->with('info', 'El nombre de la carrera se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('info', 'La carrera se ha eliminado correctamente.');
    }
}
