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
//ruta que a la gestion del expediente médico 
Route::get('/paciente/presion', [App\Http\Controllers\PacientesController::class, 'presion'])->middleware('can:paciente.presion')->name('paciente.presion');
Route::post('/paciente/agregarPresion', [App\Http\Controllers\PacientesController::class, 'agregarPresion'])->name('paciente.agregarPresion');
Route::get('/paciente/historial', [App\Http\Controllers\PacientesController::class, 'historial'])->middleware('can:paciente.historial')->name('paciente.historial');
Route::get('/paciente/perfil', [App\Http\Controllers\PacientesController::class, 'perfil'])->middleware('can:paciente.perfil')->name('paciente.perfil');
Route::post('/paciente/{cedula_paciente}/update', [App\Http\Controllers\PacientesController::class, 'update'])->middleware('can:paciente.update')->name('paciente.update');



Route::get('/paciente/grafica_de_Azucar', [App\Http\Controllers\PacientesController::class, 'grafica_de_Azucar'])->name('paciente.grafica_de_Azucar');
Route::post('/paciente/store', [App\Http\Controllers\PacientesController::class, 'store'])->middleware('can:paciente.grafica_de_Azucar')->name('paciente.store');
Route::post('/paciente/{cedula_paciente}/updateSugar', [App\Http\Controllers\PacientesController::class, 'updateSugar'])->middleware('can:paciente.grafica_de_Azucar')->name('paciente.updateSugar');
Route::delete('/paciente/{cedula_paciente}/deleteSugar', [App\Http\Controllers\PacientesController::class, 'deleteSugar'])->middleware('can:paciente.grafica_de_Azucar')->name('paciente.deleteSugar');

Route::get('/paciente/vista_recordatorio', [App\Http\Controllers\PacientesController::class, 'vista_recordatorio'])->name('paciente.vista_recordatorio');
Route::post('/paciente/agregar_recordatorio', [App\Http\Controllers\PacientesController::class, 'agregar_recordatorio'])->name('paciente.agregar_recordatorio');
Route::get('/paciente/recordatorios', [App\Http\Controllers\PacientesController::class, 'recordatorios'])->middleware('can:paciente.recordatorio')->name('paciente.recordatorios');
Route::post('/paciente/{cedula_paciente}/update', [App\Http\Controllers\PacientesController::class, 'update'])->middleware('can:paciente.update')->name('paciente.update');
Route::post('/paciente/{codigo_medico}/reservar_cita', [App\Http\Controllers\PacientesController::class, 'reservar_cita'])->middleware('can:paciente.reservar_cita')->name('paciente.reservar_cita');
Route::get('/paciente/buscar_medicos', [App\Http\Controllers\PacientesController::class, 'buscar_medicos'])->middleware('can:paciente.buscar_medicos')->name('paciente.buscar_medicos');


Route::get('/medico/index', [App\Http\Controllers\MedicosController::class, 'index'])->middleware('can:medico.index')->name('medico.index');
Route::get('/medico/perfil', [App\Http\Controllers\MedicosController::class, 'perfil'])->middleware('can:medico.perfil')->name('medico.perfil');
Route::post('/medico/{codigo_medico}/update', [App\Http\Controllers\MedicosController::class, 'update'])->middleware('can:medico.update')->name('medico.update');

Auth::routes();


