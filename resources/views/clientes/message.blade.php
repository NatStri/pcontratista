@extends('layouts/template')

@section('title', 'clientes | Contratista')

@section('contenido')

<main>
    <div class="container py-4">
    <h2>{{ $msg }}</h2>
    <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>
    </div>
</main>