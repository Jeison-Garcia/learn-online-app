<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Area;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        $areas = Area::pluck('nombre', 'id');

        return view('admin.subjects.index', compact('subjects', 'areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::pluck('nombre', 'id');

        return view('admin.subjects.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:careers',
            'imagen' => 'required',
            'area_id' => 'required'
        ]);

        $subject = Subject::create($request->all());
        return redirect()->route('admin.subjects.edit', compact('subject'))->with('info', 'La nueva materia se creó correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return view('admin.subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('admin.subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:careers,slug,$subject->id",
            'imagen' => 'required'
        ]);

        $subject->update($request->all());
        return redirect()->route('admin.subjects.edit', compact('subject'))->with('info', 'La materia se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('admin.subjects.index')->with('info', 'La materia se ha eliminado correctamente.');
    }
}
