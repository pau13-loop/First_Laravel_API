<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// RANDOM LEARNING

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return 'welcome';
// });



// APRENDIBLE

Route::get('/', function() {
    return "Hola desde la página de inicio";
});

Route::get('contacto', function() {
    return "Hola desde la página de CONTACTOS";
});

// Posibles rutas nativas que podemos crear

// Route::get();
// Route::put();
// Route::post();
// Route::delete();

// Pase de parámetros OBLIGATORIOS o OPCIONALES

/**
 * Para no hacer el pase de parametros obligatio cambiamos la ruta de,
 * 
 * 'saludo/{nombre}' a 'saludo/{nombre?}'
 * 
 * y 
 * 
 * function($nombre) a function($nombre = "invitado")
 * 
 * de está forma al añadir el interrogante no hacemos obligatorio el pase del parámetro $nombre y devolverá el valor por defecto especificado
 *  */ 
Route::get('saludo/{nombre?}', function($nombre = "invitado") {
    return "Saludos " . $nombre;
});


// NAMED ROUTES

// Llamar a estas rutas desde el navegador en lugar de Postman para comprobar que el redireccionamiento de los links funciona

Route::get('contacto', function() {
    return "Sección de los creados del contenido";
})->name('creadores');

/**
 * Por si en un futuro cambiamos la ruta de "creadores" a alomejor por ejemplo "contactos" será mejor que referenciamos a la ruta que queremos redirigir por el nombre que le hemos dado al método en lugar del nombre que le hemos dado al endpoint, a continuación podemos ver la forma antigua y la nueva de hacerlo
 */

Route::get('/contenido', function() {
    // old, not working
    echo "<a href='/creadores'>Creadores 1</a><br>";
    // new
    echo "<a href='" . route('creadores') . "'>Creadores 2</a><br>";
    echo "<a href='" . route('creadores') . "'>Creadores 3</a><br>";
});


// RETURN HTML VIEWS

/**
 * Como utilizamos el método .view() no tenemos que especificar la ruta completa al archivo html ya que laravel buscará dentro del directorio /resources/views para obentener el documento que queremos devolver.
 * 
 * NO tenemos que agregar la extensión del archivo
 */
Route::get('/', function() {
    // return view('resource/views/home.blade.php');

    // De este modo le pasamos la información a la vista, de las siguientes maneras:
    $nombre = "Jorge";
    return view('home')->with('nombre', $nombre);
    // return view('home')->with(['nombre' => $nombre]);
    // return view('home', ['nombre' => $nombre]);
})->name('home');

// O otra forma mucho más simplificada sería de la siguiente forma:
    Route::view('/home', 'home', ['nombre' => 'Jorge'])->name('simplified_home');
    Route::view('/about', 'about')->name('about');
    Route::view('/portfolio', 'portfolio')->name('portfolio');
    Route::view('/contact', 'contact')->name('contact');