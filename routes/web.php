<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/proyectos', function () {
    return "Hola Mundo";
});*/

Route::get('/proyectos', [App\Http\Controllers\proyectosController::class,'index']);

Route::get('/proyectos/mostrar', [App\Http\Controllers\proyectosController::class,'mostrar']);

Route::get('/proyectos/crear', [App\Http\Controllers\proyectosController::class,'crear']);

Route::post('/proyectos/dataFormulario', [App\Http\Controllers\proyectosController::class,'dataFormulario'])->name('proyecto.formdata');

Route::get('/app', function(){
    return view('app',['nombre'=>'Juan Carlos Polanco']);
});

Route::get('/home', function(){
    return view('home');
});