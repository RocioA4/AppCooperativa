<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RetiroController;
use App\Http\Controllers\DepositoController;

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
    return view('welcome');
});



Route::get('/afiliado/{empleado}', [AfiliadoController::class, 'index']);
Route::get('/deposito/{empleado}/{afiliado}/{nombre}', [DepositoController::class, 'index']);
Route::get('/deposito/create/{empleado}/{afiliado}/{nombre}', [DepositoController::class, 'create']);

Route::get('/empleado/create', [EmpleadoController::class, 'create']);
Route::get('/afiliado/create', [AfiliadoController::class, 'create']);
Route::get('/afiliado/create/{empleado}', [AfiliadoController::class, 'create']);

Route::get('/retiro/{empleado}/{afiliado}/{nombre}', [RetiroController::class, 'index']);
Route::get('/retiro/create/{empleado}/{afiliado}/{nombre}', [RetiroController::class, 'create']);


Route::delete('/empleado/delete', [EmpleadoController::class, 'destroy']);
Route::delete('/empleado/delete/{id}', [EmpleadoController::class, 'destroy']);

Route::delete('/afiliado/delete', [AfiliadoController::class, 'destroy']);
Route::delete('/afiliado/delete/{id}', [AfiliadoController::class, 'destroy']);

Route::resource('/empleado', 'App\Http\Controllers\EmpleadoController');
Route::resource('/afiliado', 'App\Http\Controllers\AfiliadoController');
Route::resource('/retiro', 'App\Http\Controllers\RetiroController');
Route::resource('/deposito', 'App\Http\Controllers\DepositoController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
