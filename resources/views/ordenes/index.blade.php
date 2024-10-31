@extends('layouts/template')

@section('title', 'Ordenes | Contratista')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de Ordenes</h2>
        <a href="{{ url('ordenes/create')}}" class="btn btn-primary btn-sm mb-3">Nuevo registro</a>

        <table class="table table-hover table-striped table-bordered">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Nro. de orden</th>
                    <th>Direccion</th>
                    <th>Tarea ID</th>
                    <th>Cliente ID</th>
                    <th>Fecha</th>
                    <th>Estado ID</th>
                    <th>Vehiculo ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ordenes as $orden)
                <tr>
                    <td class="text-end">{{ $orden->id }}</td>
                    <td>{{ $orden->nrOrden }}</td>
                    <td>{{ $orden->direccion }}</td>
                    <td class="text-end">{{ $orden->tarea_id }}</td>
                    <td class="text-end">{{ $orden->cliente_id }}</td>
                    <td>{{ $orden->fecha }}</td>
                    <td class="text-end">{{ $orden->estado_id }}</td>
                    <td class="text-end">{{ $orden->vehiculo_id }}</td>
                    <td class="text-center">
                        <a href="{{ url('ordenes/'.$orden->id.'/edit' ) }}" class="btn btn-warning btn-sm me-1">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        <form action="{{ url('ordenes/'.$orden->id) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta orden?');">
                    <i class="bi bi-trash"></i> Eliminar
                </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
