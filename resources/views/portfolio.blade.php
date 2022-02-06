@extends('layout')

@section('title', 'Portfolio')

@section('content')

    <h1>Portfolio</h1>

    <!-- Al trabajar con blade nos podemos ahoorar las etiquetas php: <?php ?> -->
    <ul>
        @if ($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endif
    </ul>


    <h3>Validar con isset()</h3>

    {{-- También podemos vaildar si la variable está seteada con un isset y podemos trabajar con el de la misma forma que lo hariamos con una cadena de condicionales --}}
    <ul>
        @isset($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endisset
    </ul>


    <h3>Validar con forelse</h3>

    {{-- Otra forma de la cual podemos validar es utilizando un forelse, esto quiere decir que cuando la variable 'titulo' se encuentre vacia mostrará un mensaje --}}
    <ul>
        @forelse ($portfolio as $portfolioItem) 
        {{-- Implementación de la variable LOOP --}}
            <li>{{ $portfolioItem['title'] }}<small>{{ $loop->first ? 'Es el primero' : '' }}</small></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>

    {{-- ESTRUCTURAS DE DATOS MÁS COMÚNES --}}
{{-- 
    @for()
    @endfor()

    @while()
    @endwhile()

    @switch() --}}

@endsection
