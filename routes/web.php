<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para las secciones del minimercado
Route::middleware(['auth'])->group(function () {
    Route::get('/clientes', function () {
        return view('clientes');
    })->name('clientes');

    Route::get('/productos', function () {
        return view('productos');
    })->name('productos');

    Route::get('/facturas', function () {
        return view('facturas');
    })->name('facturas');

    Route::get('/proveedores', function () {
        return view('proveedores');
    })->name('proveedores');
});
