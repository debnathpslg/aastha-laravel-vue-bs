<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Master\DesignationController;
use App\Http\Controllers\Master\RoleController;

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

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::resource('/master/role', RoleController::class)->only('index');
Route::resource('/master/designation', DesignationController::class)->only('index');
