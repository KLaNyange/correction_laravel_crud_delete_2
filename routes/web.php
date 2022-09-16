<?php

use App\Http\Controllers\CarController;
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

Route::get('/', [CarController::class, 'index']);
Route::get('/formulaire', [CarController::class, 'create']);
Route::post('/store', [CarController::class, 'store']);
Route::get('/discount', [CarController::class, 'discount']);
Route::get('/over', [CarController::class, 'over']);
Route::get('/under', [CarController::class, 'under']);
Route::delete('/car/delete/{id}', [CarController::class, 'destroy']);
