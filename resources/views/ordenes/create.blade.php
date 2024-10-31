@extends('layouts/template')

@section('title', 'Registrar Ordenes | Contratista')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Registrar Ordenes</h2>

        <form action="{{ url('ordenes') }}" method="post">
        @csrf <!-- Protección CSRF -->

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ url('ordenes') }}" method="post">
            @csrf

            <div class="mb-3 row">
                <label for="nrOrden" class="col-sm-2 col-form-label">Nro. de orden</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nrOrden" id="nrOrden" value="{{ old('nrOrden') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tarea_id" class="col-sm-2 col-form-label">Tarea ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tarea_id" id="tarea_id" value="{{ old('tarea_id') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="cliente_id" class="col-sm-2 col-form-label">Cliente ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cliente_id" id="cliente_id" value="{{ old('cliente_id') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="fecha" id="fecha" value="{{ old('fecha') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="estado_id" class="col-sm-2 col-form-label">Estado ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="estado_id" id="estado_id" value="{{ old('estado_id') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="vehiculo_id" class="col-sm-2 col-form-label">Vehiculo ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="vehiculo_id" id="vehiculo_id" value="{{ old('vehiculo_id') }}" required>
                </div>
            </div>

            <a href="{{ url('ordenes') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
@endsection
