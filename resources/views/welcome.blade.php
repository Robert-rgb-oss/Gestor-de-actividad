@extends('layouts.init')

@section('title', 'Bienvenido')

@section('content')
    <div class="p-5 mb-4 g-light rounded-3 shadow-sw">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Gestión de actividades</h1>
            <p class="col-md-8 fs-5">Organiza y administra alumnos, actividades extracurriculares e inscripciones de manera eficiente y rápida</p>
            <a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-lg mt-3">Comenzar</a>
        </div>
    </div>
    <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sw">
                <div class="card-body">
                    <h5 class="card-title">Gestión Alumnos</h5>
                    <p class="card-text">Registra, edita y consulta la información de los estudiantes.</p>
                    <a href="{{ route('alumnos.index') }}" class="btn btn-outline-primary">Ver Alumnos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sw">
                <div class="card-body">
                    <h5 class="card-title">Actividades</h5>
                    <p class="card-text">Administra taller, deportes y eventos escolares fácilmente.</p>
                    <a href="{{ route('actividades.index') }}" class="btn btn-outline-success">Ver Actividades</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sw">
                <div class="card-body">
                    <h5 class="card-title">Inscripciones</h5>
                    <p class="card-text">Asigna a alumnos a actividades lleva un control completo de los participantes.</p>
                    <a href="{{ route('inscripciones.index') }}" class="btn btn-outline-warning">Ver Inscripciones</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 text-center">
        <p class="text-muted">&copy; 2025 Gestor de Actividades Escolares | Desarrollado por: Robert </p>
    </div>
@endsection