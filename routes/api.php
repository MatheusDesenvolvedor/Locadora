<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\locadoraController;
use App\Http\Controllers\generoController;
use App\Http\Controllers\listaController;
use App\Http\Controllers\relacionamentoController;
use App\Models\locadora;
use App\Models\genero;
use App\Models\lista;
use App\Models\relacionamento;

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

// List artigos
Route::get('locadora', [locadoraController::class, 'index']);

// List single artigo
Route::get('locadora/{id}', [locadoraController::class, 'show']);

// Create new artigo
Route::post('locadora', [locadoraController::class, 'store']);

// Update artigo
Route::put('locadora/{id}', [locadoraController::class, 'update']);

// Delete artigo
Route::delete('locadora/{id}', [locadoraController::class, 'destroy']);


//genero

// List artigos
Route::get('genero', [generoController::class, 'index']);

// List single artigo
Route::get('genero/{id}', [generoController::class, 'show']);

// Create new artigo
Route::post('genero', [generoController::class, 'store']);

// Update artigo
Route::put('genero/{id}', [generoController::class, 'update']);

// Delete artigo
Route::delete('genero/{id}', [generoController::class, 'destroy']);

//lista

Route::get('lista', [listaController::class, 'index']);

// List single artigo
Route::get('lista/{id}', [listaController::class, 'show']);

// Create new artigo
Route::post('lista', [listaController::class, 'store']);

// Update artigo
Route::put('lista/{id}', [listaController::class, 'update']);

// Delete artigo
Route::delete('lista/{id}', [listaController::class, 'destroy']);



//relacionamento
Route::get('relacionamento', [relacionamentoController::class, 'index']);

// List single artigo
Route::get('relacionamento/{id}', [relacionamentoController::class, 'show']);

// Create new artigo
Route::post('relacionamento', [relacionamentoController::class, 'store']);

// Update artigo
Route::put('relacionamento/{id}', [relacionamentoController::class, 'update']);

// Delete artigo
Route::delete('relacionamento/{id}', [relacionamentoController::class, 'destroy']);
