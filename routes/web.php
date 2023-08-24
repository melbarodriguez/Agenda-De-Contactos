<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\NotasController;


Route::get('/', function () {
    return view('welcome');
});

//RUTAS CONTACTOS
Route::get('/contactos',[ContactosController::class,'index'])->name('contacto.index');
Route::get('/contactos/{id}/show',[ContactosController::class,'show'])->where('id','[0-9]+')->name('contacto.show');
Route::get('/contactos/create',[ContactosController::class,'create'])->name('contactos.crear');
Route::post('/contactos/create',[ContactosController::class,'store'])->name('contactos.store');
Route::get('/contactos/{id}/editar',[ContactosController::class,'edit'])->whereNumber('id')->name('contactos.editar');
Route::put('/contactos/{id}/editar',[ContactosController::class,'update'])->whereNumber('id')->name('contactos.update');
Route::delete('/contactos/{id}/borrar',[ContactosController::class,'destroy'])->whereNumber('id')->name('contactos.borrar');

//RUTAS EVENTOS
Route::get('/eventos',[EventosController::class,'index'])->name('evento.index');
Route::get('/eventos/{id}/show',[EventosController::class,'show'])->where('id','[0-9]+')->name('evento.show');
Route::get('/eventos/create',[EventosController::class,'create'])->name('eventos.crear');
Route::post('/eventos/create',[EventosController::class,'store'])->name('eventos.store');
Route::get('/eventos/{id}/editar',[EventosController::class,'edit'])->whereNumber('id')->name('eventos.editar');
Route::put('/eventos/{id}/editar',[EventosController::class,'update'])->whereNumber('id')->name('eventos.update');
Route::delete('/eventos/{id}/borrar',[EventosController::class,'destroy'])->whereNumber('id')->name('eventos.borrar');

//RUTAS NOTAS
Route::get('/notas',[NotasController::class,'index'])->name('nota.index');
Route::get('/notas/{id}/show',[NotasController::class,'show'])->where('id','[0-9]+')->name('nota.show');
Route::get('/notas/create',[NotasController::class,'create'])->name('notas.crear');
Route::post('/notas/create',[NotasController::class,'store'])->name('notas.store');
Route::get('/notas/{id}/editar',[NotasController::class,'edit'])->whereNumber('id')->name('notas.editar');
Route::put('/notas/{id}/editar',[NotasController::class,'update'])->whereNumber('id')->name('notas.update');
Route::delete('/notas/{id}/borrar',[NotasController::class,'destroy'])->whereNumber('id')->name('notas.borrar');