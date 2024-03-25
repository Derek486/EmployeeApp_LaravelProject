<?php

use App\Http\Controllers\AuthController;
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

Route::redirect('/','/employees');

Route::get('/register', [AuthController::class, 'index_register']) -> name('register');
Route::post('/register', [AuthController::class, 'register']) -> name('register.store');

Route::get('/login', [AuthController::class, 'index_login']) -> name('login');
Route::post('/login', [AuthController::class, 'authenticate']) -> name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/employees', [EmployeesController::class, 'index']) -> name('employees.index');
    Route::post('/employees', [EmployeesController::class, 'store']) -> name('employees.insert');
    Route::get('/employees/{id}', [EmployeesController::class, 'show']) -> name('employees.edit');
    Route::delete('/employee/{id}', [EmployeesController::class, 'delete']) -> name('employees.delete');
    Route::put('/employees/{id}', [EmployeesController::class, 'update']) -> name('employees.update');
});