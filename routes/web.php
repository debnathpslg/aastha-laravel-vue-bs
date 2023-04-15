<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Master\RoleController;
use App\Http\Controllers\Master\DesignationController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    Route::get('/home', function () {
        return redirect()->route('home');
    });

    Route::resource('/master/role', RoleController::class)->only('index');
    Route::resource('/master/designation', DesignationController::class)->only('index');
});

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'validateLogin'])->name('validateLogin');
Route::delete('/logout', [AuthController::class, 'logoutUser'])->name('logout')->middleware('auth');
