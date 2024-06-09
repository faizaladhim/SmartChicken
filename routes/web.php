<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ConfigHeaterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConfigLampController;
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
Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('/auth/login',[AuthController::class, 'login']);
Route::post('/auth/logout',[AuthController::class, 'logout']);

Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::middleware('role:farmer')->prefix('config')->name('config.')->group(function(){
        Route::get('heater', [ConfigHeaterController::class, 'index']);
    });
    Route::middleware('role:admin')->prefix('management')->name('management.')->group(function(){
        Route::resource('users', UserController::class);
        Route::resource('devices', DeviceController::class);
    });

    Route::get('/heater',[ConfigHeaterController::class, 'index'])->name('heater.index');
    
    Route::get('/lamp',[ConfigLampController::class, 'index'])->name('lamp.index');

// User routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// Device routes
Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
Route::get('/device/create', [DeviceController::class, 'create'])->name('device.create');
Route::post('/device', [DeviceController::class, 'store'])->name('device.store');
Route::get('/device/{id}/edit', [DeviceController::class, 'edit'])->name('device.edit');
Route::put('/device/{id}', [DeviceController::class, 'update'])->name('device.update');
Route::delete('/device/{id}', [DeviceController::class, 'destroy'])->name('device.destroy');
});



