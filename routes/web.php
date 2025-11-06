<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});->name('home');

Route::resource('actividades', 'ActividadController::class)->parameters([
    'actividades' => 'actividad']);

Route::resource('inscripciones', 'InscripcionController::class)->parameters([
    'inscripciones' => 'inscripcion']);

Route::resource('alumnos', 'AlumnoController::class);

Route::get('/actividades-con-alumnos', [ActividadController::class, 'listadoConAlumnos'])
->name('actividades.con-alumnos');

