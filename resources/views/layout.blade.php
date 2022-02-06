<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le pasamos un segundo parámetro para que lo muestre por defecto en el caso de que no hayamos definido el título -->
    <title>@yield('title', 'Curso Aprendible')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>

<body>

    @include('/partials/navigation')

    <!-- Agregar contenido dinámicamente con yield -->
    @yield('content')
</body>

</html>