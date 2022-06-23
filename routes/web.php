<?php
use App\Http\Controllers\Registro_doctorController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\PerfildocController;
use App\Http\Controllers\PerfilpaciController;
use App\Http\Controllers\CitaController;
use App\Models\Especialidad;
use App\Models\Registro_doctor;
use App\Models\Perfildoc;
use App\Models\Perfilpaci;
use App\Models\Cita;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/', function () {
    return view('Template.Template');
});


Route::resource('perfildoc',PerfildocController::class);

Route::resource('especialidad',EspecialidadController::class);

Route::resource('perfilpaci',PerfilpaciController::class);

Route::resource('registro_doctor',Registro_doctorController::class);

Route::resource('cita',CitaController::class);
