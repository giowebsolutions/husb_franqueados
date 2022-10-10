<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardClientsController;

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
// Home
Route::get('/', [HomeController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('home'); // Login
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Login
Route::post('/login', [LoginController::class, 'login'])->name('login.auth'); // Autenticação

//Dashboard
Route::group( ['middleware' => 'auth'], function () {
    
    // Dashboard
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'admin'])->name('dashboard');
    });
    
    //Dashboard Admin
    Route::prefix('dashboard/admin')->group(function(){
        Route::get('/', [DashboardController::class, 'admin'])->name('dashboard.admin'); // Admin
        Route::get('/perfil', [DashboardController::class, 'profile'])->name('dashboard.admin.profile');// Perfil
        Route::post('/perfil', [UserController::class, 'update'])->name('update.user.profile');// Perfil
        Route::resource('/clientes', DashboardClientsController::class)->names([
            'create' => 'clientes.create',
            'edit' => 'clientes.edit',
            'store' => 'clientes.store',
            'update' => 'clientes.update'
        ]);// Admin / Clientes
    
    });

});

// //Contato
// Route::get('/contato', [ContatoController::class, 'coletaContato']);