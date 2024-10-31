@extends('layouts/template')

@section('title', 'Editar Cliente | Contratista')

@section('contenido')

<main>
    <div class="container py-4"></div>
    <h2>Editar cliente</h2>

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

    <form action="{{ url('clientes/'.$cliente->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni" id="dni" value="{{ old('dni', $cliente->dni) }}" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido', $cliente->apellido) }}" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $cliente->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="{{ old('fecha_nac', $cliente->fecha_nac) }}" required>
        </div>


        <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</main>

@endsection
