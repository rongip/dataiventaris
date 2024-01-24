<?php

use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', [PetugasController::class, 'index']);

Route::resource('petugas', PetugasController::class);
Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update');
Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

