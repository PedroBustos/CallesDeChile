<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionesController;
use App\Http\Controllers\ProvinciasController;
use App\Http\Controllers\CiudadesController;

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


Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/regiones', [RegionesController::class, 'get_region']);
Route::get('/provincias', [ProvinciasController::class, 'get_provincia']);
Route::get('/ciudades', [CiudadesController::class, 'get_ciudad']);
