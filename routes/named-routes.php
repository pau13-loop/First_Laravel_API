<?php 

use Illuminate\Support\Facades\Route;

//TODO: NO FUNCIONA, PORQUE ?

Route::get('/creadores', function() {
    return "Sección de los creados del contenido";
});


Route::get('/contenido', function() {
    echo "<a href='/creadores'>Creadores 1</a>";
    echo "<a href='/creadores'>Creadores 2</a>";
    echo "<a href='/creadores'>Creadores 3</a>";
    echo "<a href='/creadores'>Creadores 4</a>";
});