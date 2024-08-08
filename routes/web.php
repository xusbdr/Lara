<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Micontrolador;  // importar el controlador para que reconoxca las clases
use App\Models\Productos; // Asegúrate de importar el modelo Articulo




// Definir las rutas usando el método Route::get
Route::get('/Inicio', [Micontrolador::class, 'Inicio']);

Route::get('/', [Micontrolador::class, 'Bienvenido']);

Route::get('/Bienvenido', [Micontrolador::class, 'Bienvenido']);



Route::get('/Contacto', [Micontrolador::class, 'contacto']);



Route::get('/SobreNosotros', [Micontrolador::class, 'sobrenosotros']);



Route::get('/Politica', [Micontrolador::class, 'politica']);








Route::get('/galeria', [Micontrolador::class, 'galeria']);






