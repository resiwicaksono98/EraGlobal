<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


// Employees
Route::get('/', [EmployeeController::class, 'index']);
Route::get('/create', [EmployeeController::class, 'create']);
Route::get('/detail/{id}', [EmployeeController::class, 'detail']);
Route::post('/', [EmployeeController::class, 'store']);
Route::get('/{id}', [EmployeeController::class, 'edit']);
Route::put('/{id}', [EmployeeController::class, 'update']);
Route::delete('/{id}', [EmployeeController::class, 'destroy']);
