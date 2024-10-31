@extends('layouts/template')

@section('title', 'Registrar Clientes | Contratista')

@section('contenido')

<main>
    <div class="container py-4"></div>
    <h2>Registrar clientes</h2>

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

    <form action="{{ url('clientes') }}" method="post">
        @csrf

        <div class"mb-3 row">
            <label for="dni" class="col-sm-2 col-form-label">DNI</label>
            <div>
                <input type="text" class= "form-control" name="dni" id="dni" value="{{ old('dni') }}"+>
            </div>
        </div>

        <div class"mb-3 row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
            <div>
                <input type="text" class= "form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
            </div>
        </div>

        <div class"mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div>
                <input type="text" class= "form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
            </div>
        </div>

        <div class"mb-3 row">
            <label for="fecha_nac" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
            <div>
                <input type="date" class= "form-control" name="fecha_nac" id="fecha_nac" value="{{ old('Fecha de nacimiento') }}" required>
            </div>
        </div>
        <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</main>