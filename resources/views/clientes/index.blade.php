@extends('layouts/template')

@section('title', 'clientes | Contratista')

@section('contenido')

<main>
    <div class="container py-4"></div>
    <h2>Listado de clientes</h2>
    <a href="{{ url('clientes/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Fecha de nacimiento</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->dni }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->fecha_nac }}</td>
                <td><a href="{{ url('clientes/'.$cliente->id.'/edit' ) }}" class="btn btn-warning btn-sm">Editar</a></td>
                <td>
                <form action="{{ url('clientes/'.$cliente->id) }}" method="post">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
