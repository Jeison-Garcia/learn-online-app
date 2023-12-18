<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::all();

        return view('admin.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:areas'
        ]);

        $area = Area::create($request->all());
        return redirect()->route('admin.areas.edit', $area)->with('info', 'La nueva área se creó correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        return view('admin.areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        return view('admin.areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:areas,slug,$area->id"
        ]);

        $area->update($request->all());
        return redirect()->route('admin.areas.edit', $area)->with('info', 'El nombre del área se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('admin.areas.index')->with('info', 'El área se ha eliminado correctamente.');
    }
}
