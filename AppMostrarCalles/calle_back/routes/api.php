<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionesController;
use App\Http\Controllers\ProvinciasAysenController;
use App\Http\Controllers\ProvinciasBioBioController;
use App\Http\Controllers\ProvinciasMauleController;
use App\Http\Controllers\CiudadesAysenController;
use App\Http\Controllers\CiudadesCoyhaiqueController;
use App\Http\Controllers\CiudadesConcepcionController;
use App\Http\Controllers\CiudadesAraucoController;
use App\Http\Controllers\CiudadesCauquenesController;
use App\Http\Controllers\CiudadesLinaresController;
use App\Http\Controllers\CallesAysenController;
use App\Http\Controllers\CallesCisnesController;
use App\Http\Controllers\CallesCoyhaiqueController;
use App\Http\Controllers\CallesLagoVerdeController;
use App\Http\Controllers\CallesConcepcionController;
use App\Http\Controllers\CallesAraucoController;
use App\Http\Controllers\CallesLebuController;
use App\Http\Controllers\CallesCauquenesController;
use App\Http\Controllers\CallesPelluhueController;
use App\Http\Controllers\CallesLinaresController;
use App\Http\Controllers\CallesParralController;
use App\Http\Controllers\CallesChiguayanteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'regiones'
], function ($router) {
Route::get('get_region', [RegionesController::class, 'get_region']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'provincias'
], function ($router) {
Route::get('Aysen', [ProvinciasAysenController::class, 'get_provincia']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'provincias'
], function ($router) {
Route::get('BioBio', [ProvinciasBioBioController::class, 'get_provincia']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'provincias'
], function ($router) {
Route::get('Maule', [ProvinciasMauleController::class, 'get_provincia']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ciudades'
], function ($router) {
Route::get('Aysen', [CiudadesAysenController::class, 'get_ciudad']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ciudades'
], function ($router) {
Route::get('Coyhaique', [CiudadesCoyhaiqueController::class, 'get_ciudad']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ciudades'
], function ($router) {
Route::get('Concepcion', [CiudadesConcepcionController::class, 'get_ciudad']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ciudades'
], function ($router) {
Route::get('Arauco', [CiudadesAraucoController::class, 'get_ciudad']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ciudades'
], function ($router) {
Route::get('Cauquenes', [CiudadesCauquenesController::class, 'get_ciudad']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'ciudades'
], function ($router) {
Route::get('Linares', [CiudadesLinaresController::class, 'get_ciudad']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Aysen', [CallesAysenController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Cisnes', [CallesCisnesController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Coyhaique', [CallesCoyhaiqueController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('LagoVerde', [CallesLagoVerdeController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Concepcion', [CallesConcepcionController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Chiguayante', [CallesChiguayanteController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Arauco', [CallesAraucoController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Lebu', [CallesLebuController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Cauquenes', [CallesCauquenesController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Pelluhue', [CallesPelluhueController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Linares', [CallesLinaresController::class, 'get_calle']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'calles'
], function ($router) {
Route::get('Parral', [CallesParralController::class, 'get_calle']);
});
