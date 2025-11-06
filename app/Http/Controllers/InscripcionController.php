<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Actividad;
use App\Models\Alumno;

class InscripcionController extends Controller
{
    
    public function index()
    {
        $inscripciones = Inscripcion::with(['alumno', 'actividad'])->paginate(12);
        return view('inscripciones.index', compact('inscripciones'));   
    }

    
    public function create()
    {
        $alumnos = Alumno::all();
        $actividades = Actividad::all();
        return view('inscripciones.create', compact('alumnos', 'actividades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
