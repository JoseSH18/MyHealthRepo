<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/option', function () {
    return view('auth/option');
})->name('option');
Route::get('/pacienteregister', function () {
    return view('auth/pacienteregister');
})->name('pacienteregister');
Route::get('/medicoregister', function () {
    return view('auth/medicoregister');
})->name('medicoregister');



Route::get('/paciente/index', [App\Http\Controllers\PacientesController::class, 'index'])->middleware('can:paciente.index')->name('paciente.index');

Route::get('/paciente/historial', [App\Http\Controllers\PacientesController::class, 'historial'])->middleware('can:paciente.historial')->name('paciente.historial');
Route::get('/paciente/perfil', [App\Http\Controllers\PacientesController::class, 'perfil'])->middleware('can:paciente.perfil')->name('paciente.perfil');
Route::post('/paciente/{cedula_paciente}/update', [App\Http\Controllers\PacientesController::class, 'update'])->middleware('can:paciente.update')->name('paciente.update');

Route::get('/paciente/grafica_de_Azucar', [App\Http\Controllers\PacientesController::class, 'grafica_de_Azucar'])->name('paciente.grafica_de_Azucar');
Route::post('/paciente/store', [App\Http\Controllers\PacientesController::class, 'store'])->middleware('can:paciente.grafica_de_Azucar')->name('paciente.store');


Route::get('/medico/index', [App\Http\Controllers\MedicosController::class, 'index'])->middleware('can:medico.index')->name('medico.index');
Route::get('/medico/perfil', [App\Http\Controllers\MedicosController::class, 'perfil'])->middleware('can:medico.perfil')->name('medico.perfil');
Route::post('/medico/{codigo_medico}/update', [App\Http\Controllers\MedicosController::class, 'update'])->middleware('can:medico.update')->name('medico.update');

Auth::routes();


