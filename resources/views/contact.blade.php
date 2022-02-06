@extends('layout')

@section('title', 'Contact')

@section('content')

    <h1>Contact</h1>

    <ul>
        @forelse ($contactos as $contacto) 
        {{-- Implementación de la variable LOOP --}}
            <li>{{ $contacto['title'] }}<small>{{ $loop->first ? 'Es el primero' : '' }}</small></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>

@endsection