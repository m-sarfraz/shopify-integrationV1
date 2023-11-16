<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SopController;
use Illuminate\Support\Facades\Route;

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
// Auth routes came from bootstrap scaffolding
Auth::routes();

// admin dashboard routes
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/manage-shipping', [AdminController::class, 'manageShipping'])->name('manage-shipping');
Route::get('/anz', [SopController::class, 'anz'])->name('anz');
Route::get('/anzHL', [SopController::class, 'anzHL'])->name('anzHL');
Route::get('/bnz', [SopController::class, 'bnz'])->name('bnz');
Route::get('/asb', [SopController::class, 'asb'])->name('asb');
Route::get('/default', [SopController::class, 'default'])->name('default');
