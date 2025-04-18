<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Backend\RrhhController;

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


// Ruta principal para mostrar la tabla de clientes
Route::get('/', [ClienteController::class, 'index']);

// Ruta para importar clientes desde JSON
Route::get('/importar', [ClienteController::class, 'importar']);

// Ruta API para obtener los clientes en JSON
Route::get('/api', [ClienteController::class, 'api']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* Protegemos la vista de los usuarios por el rol */
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Creando un Dashboard Personalizado para cada tipo de usuario
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminProfileController::class, 'updateProfile'])->name('admin.profile.update');
});

Route::middleware(['auth', 'role:rrhh'])->group(function () {
    // Creando un Dashboard Personalizado para cada tipo de usuario
    Route::get('/rrhh/dashboard', [RrhhController::class, 'dashboard'])->name('rrhh.dashboard');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
