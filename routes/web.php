<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/area_triangulo', [Secuenciales::class, 'triangulo']);





Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/trapecio', function () {
    return view('trapecio');
});


Route::get('/circun', function () {
    return view('circun');
});

Route::get('/edad', function () {
    return view('edad');
});

Route::get('/calif', function () {
    return view('calif');
});

Route::get('/sueldo', function () {
    return view('sueldo');
});

Route::get('/tabla', function () {
    return view('tabla_multiplicacion');
});

Route::get('/caja', function () {
    return view('caja');
});

Route::get('/salario', function () {
    return view('salario');
});