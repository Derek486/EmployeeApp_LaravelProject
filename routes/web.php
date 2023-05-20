<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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

Route::get('/', [EmployeesController::class, 'index']) -> name('employee-index');
Route::post('/employee-insert', [EmployeesController::class, 'store']) -> name('employee-insert');
Route::get('/employee-edit/{id}', [EmployeesController::class, 'show']) -> name('employee-edit');
Route::delete('/employee-delete/{id}', [EmployeesController::class, 'delete']) -> name('employee-delete');
Route::patch('/employee-update/{id}', [EmployeesController::class, 'update']) -> name('employee-update');


