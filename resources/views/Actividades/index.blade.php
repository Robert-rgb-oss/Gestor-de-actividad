@extends('layouts.app')

@section('title', 'actividades')

@section('content')
    <div class="d-flex justify-content-between align-center mb-4">
        <h1>Actividades</h1>

        <form action="{{ route('actividades.index') }}" method="get" class="d-flex me-2">
            <input type="text" name="search" class="form-control me-2" placeholder="Buscar actividad..."
                value="{{ request('search') }}">
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </form>

        <a href="{{ route('actividades.create') }}" class="btn btn-success">Añadir actividad</a>
    </div>

    @if($actividades->isEmpty())
        <div class="alert alert-info">No hay actividades registradas.</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Día</th>
                        <th>Horario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actividades as $actividad)
                        <tr>
                            <td>{{ $actividad->nombre }}</td>
                            <td>{{ ucfirst($actividad->dia) }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($actividad->hora_inicio)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($actividad->hora_fin)->format('H:i')}}
                            </td>
                            <td>
                                <a href="{{ route('actividades.show', $actividad) }}" class="btn btn-sm btn-info" >Ver</a>
                                <a href="{{ route('actividades.edit', $actividad) }}" class="btn btn-sm btn-warning" >Editar</a>
                                <form action="{{ route('actividades.destroy', $actividad) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Estas seguro de elimnar esta actividad?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    @endif
    <div class="d-flex justify-content-center mt-4">
        {{ $actividades-links('pagination::bootstrap-5') }}
    </div>


@endsection

   