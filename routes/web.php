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
    return view('auth\login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('/solicitud','solicitud.index');

Route::get('/solicitud', function () { 
    return view('solicitud');
})->name('solicitud');

Route::get('/registro_guia', function () { 
    return view('registro_guia');
})->name('registro_guia');

Route::get('/aprobacion_solicitud', function () { 
    return view('aprobacion_solicitud');
})->name('aprobacion_solicitud');