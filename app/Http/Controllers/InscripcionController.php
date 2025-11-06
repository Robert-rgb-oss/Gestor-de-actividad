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

    
    public function store(InscripcionRequest $request)
    {
        $existe = Inscripcion::where('alumno_id', $request->alumno_id)
            ->where('actividad_id', $request->actividad_id)
            ->exist();
        if ($existe) {
            return back()->withErrors(['El alumno ya está inscrito.']);
            inscripcion ::create($request->all());
            return redirect()->route('inscripciones.index')
                ->with('success', 'Inscripción creada con éxito!');    
    }

    
    public function show(Inscripcion $inscripcion)
    {
        return view('inscripciones.show', compact('inscripcion'));   
    }

   
    public function edit(Inscripcion $inscripcion)
    {
        $alumnos = Alumno::all();
        $actividades = Actividad::all();
        return view('inscripciones.edit', compact('inscripcion', 'alumnos', 'actividades'));
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
