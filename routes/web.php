<?php

use App\Http\Controllers\PandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('crear-nombre', PandaController::class.'@crearNombre')->name('crear-nombre');


