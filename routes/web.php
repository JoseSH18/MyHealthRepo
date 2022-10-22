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

Route::get('/paciente/index', [App\Http\Controllers\PacientesController::class, 'index'])->middleware('can:paciente.index')->name('paciente.index');
Route::get('/paciente/historial', [App\Http\Controllers\PacientesController::class, 'historial'])->name('paciente.historial');

Route::get('/medico/index', [App\Http\Controllers\MedicosController::class, 'index'])->middleware('can:medico.index')->name('medico.index');

Auth::routes();


