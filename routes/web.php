<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('home');
});

Route::get('/tiket/{id}', [TiketController::class, 'show']);
Route::get('/', [TiketController::class, 'create']);
Route::post('/tiket', [TiketController::class, 'store']);
Route::get('/tiket-edit/{id}', [TiketController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('/tiket/{id}', [TiketController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('/buang-tiket/{id}', [TiketController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::post('/cek-tiket', [TiketController::class, 'checkID']);
Route::get('/admin-dashboard/{id}', [TiketController::class, 'checkID'])->name('admin-dashboard');



Route::get('/admin-dashboard', [TiketController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
