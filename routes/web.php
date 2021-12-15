<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
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

/**
 * Unauthenticated routes
 */

// todo: use in dashboard

Route::get('dashy', function () {
    return view('dashy');
});

Route::get('login', [AuthController::class, 'index'])
    ->name('login');

Route::post('login', [AuthController::class, 'login'])
    ->name('login.post');

Route::get('logout', function () {
    auth()->logout();
    return redirect()->route('login');
});

Route::name('password.')->prefix('password')->group(function () {

    Route::get('set/{token}', [AuthController::class, 'setPasswordView'])->name('set');
    Route::post('set/{token}', [AuthController::class, 'setPasswordPost'])->name('set.post');

});


/**
 * Auth group
 */
Route::middleware('auth:system_users')->name('dashboard.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])
        ->name('index');

    Route::prefix('profiel')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])
            ->name('profile');

        Route::post('/', [ProfileController::class, 'update']);
    });

});
