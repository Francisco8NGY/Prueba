<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Controllers\FiltroController;
use App\Http\Controllers\PropiedadController;

use  App\Http\Livewire\Filter;

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

    Route::get('/', function () {
    return view('welcome');
}); 


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/propiedades', [PropiedadController::class, 'index'])->name('propiedades.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/create', [PropiedadController::class, 'create'])->name('propiedades.create');

Route::get('/all-info/{id}', [FiltroController::class, 'info'])->name('info');

Route::post('/store', [PropiedadController::class, 'store'])->name('propiedades.store');




