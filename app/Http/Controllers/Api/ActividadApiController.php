<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Http\Controllers\Controller;

class ActividadApiController extends Controller
{

    public function index()
    {
        $actividades = Actividad::select('id', 'nombre', 'descripcion', 'día', 'hora_inicio', 'hora_fin')
                                ->orderBy('dia')
                                ->orderBy('hora_inicio')
                                ->get();    

        return response()->json([
            'success' => true,
            'data' => $actividades,
            'message' => 'Actividades obtenidas correctamente.',
            'count' => $actividades->count(),
        ], 200);
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
