<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\MutationController;
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

// API User
Route::post('/auth/register', [UserController::class, 'tambah']);
Route::get('/user/detail/{id}', [UserController::class, 'detail']);
Route::put('/user/update', [UserController::class, 'update']);
Route::post('/auth/login', [UserController::class, 'login']);

// API Product
Route::get('/product', [ProductController::class, 'index']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::delete('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/detail/{id}', [ProductController::class, 'detail']);

// API BALANCE
Route::get('/balance/detail/{id}', [BalanceController::class, 'detail']);
Route::post('/balance/increase', [BalanceController::class, 'increase']);
Route::post('/balance/decrease', [BalanceController::class, 'decrease']);

// API MUTATION
Route::get('/mutations/{id}', [MutationController::class, 'index']);
Route::post('/mutation/store', [MutationController::class, 'store']);

//route Transaction
Route::get('/transaction/{id}', [TransactionController::class, 'index']);
Route::post('/transaction/tambah', [TransactionController::class, 'tambah']);
Route::get('/transaction/detail/{id}', [TransactionController::class, 'detail']);
Route::post('/transaction/update', [TransactionController::class, 'update']);