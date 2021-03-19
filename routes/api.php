<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('obterenderecos',[UserController::class,'enderecos']);
Route::get('endereco/{id}',[UserController::class,'enderecoId']);

Route::get('obtercidades',[UserController::class,'cidades']);
Route::get('cidade/{id}',[UserController::class,'cidadeId']);

Route::get('obterestados',[UserController::class,'estados']);
Route::get('estado/{id}',[UserController::class,'estadoId']);

Route::get('obterusers',[UserController::class,'users']);
Route::get('user/{id}',[UserController::class,'userId']);

