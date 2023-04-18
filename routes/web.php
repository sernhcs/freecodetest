<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(\App\Http\Controllers\CursoController::class)->group(function (){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{id}','show')->name('cursos.show');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

Route::get('prueba', function (){
    return "Has accedido";
})->middleware(['age','auth:sanctum']);

Route::get('no-autorizado', function (){
    return "NO ews mayor de edad";
});























