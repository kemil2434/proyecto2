<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nueva-ruta', function () {
    return view('vistaDos');
});

Route::get('/lista-personas',
 [PersonaController::class, 'listarPersona']
)->name('lista-personas');

Route::get('/lista-personas/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar-personas');


//------------------------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina-web');
//------------------------------------------------------------------------------


  

   
  
   //categoria descripcion img precio , fecha registro

//Route::get('/lista-productos', function () {

    Route::get('/lista-productos', [ProductoController::class,'listaProducto'])->name('lista-producto');

    Route::get('/lista-productos/{id}',[ProductoController::class, 'mostrarProducto'])->name('mostrar-producto');
    
    
    