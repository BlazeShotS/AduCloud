<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'Inicio']) ->name('inicio') ; //Nombre del metodo del controlador, Inicio
Route::get('/acerca-de', [PagesController::class, 'Acercade']) ->name('acerca');

