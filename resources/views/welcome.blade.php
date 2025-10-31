@extends('layout.app');
@section('title', 'Inicio')
@section('content')
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Bienvenidos a mi sitio web</h1>
        <p>Prueba técnica de conocimiento en Laravel 10</p>
    </div>

    {{-- Poblema --}}
    @include('extends.problema')

    {{-- Modal --}}
    @include('extends.modal')
@endsection