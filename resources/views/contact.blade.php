@extends('layout')

@section('title', 'Contact')

@section('content')

    <h1>Contact</h1>

    {{-- Implementación de la variable LOOP --}}
    {{-- <ul>
        @forelse ($contactos as $contacto) 
            <li>{{ $contacto['title'] }}<small>{{ $loop->first ? 'Es el primero' : '' }}</small></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul> --}}

    @if($errors->any())

    <ol>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ol>

    @endif
    
    
    <form method="POST" action="{{ route('contact') }}">

        @csrf

        <input name="name" placeholder="Name..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="Mensaje..." >{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}


        <button>Enviar</button>
    </form>

@endsection