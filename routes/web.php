<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\guardian_users\IndexController as GuardianUsersIndexController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\system_users\IndexController as SystemUsersIndexController;
use App\Http\Controllers\system_users\ProfileController;
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
 * Auth group
 */
Route::name('dashboard.')->group(function () {

    Route::prefix('systeem')->name('system_users.')->middleware('auth:system_users')->group(function () {
        Route::get('/', [SystemUsersIndexController::class, 'index'])
            ->name('index');

        Route::prefix('profiel')->group(function () {
            Route::get('/', [ProfileController::class, 'index'])
                ->name('profile');

            Route::post('/', [ProfileController::class, 'update'])
                ->name('profile.update');
        });

        Route::resource('staff', StaffController::class);
    });

    Route::prefix('verzorger')->name('guardian_users.')->middleware('auth:guardian_users')->group(function () {
        Route::get('/', [GuardianUsersIndexController::class, 'index'])
            ->name('index');
    });
});

/**
 * Unauthenticated routes
 *
 * KEEP THIS AT THE BOTTOM
 */
Route::get('/', function () {
    if (auth('system_users')->user()) {
        return redirect()->route('dashboard.system_users.index');
    } elseif (auth('guardian_users')->user()) {
        return redirect()->route('dashboard.guardian_users.index');
    } else {
        return redirect()->route('login');
    }
})->name('index');

Route::get('login', [AuthController::class, 'index'])
    ->name('login');

Route::post('login', [AuthController::class, 'login'])
    ->name('login.post');

Route::name('password.')->prefix('password')->group(function () {
    Route::get('set/{token}', [AuthController::class, 'setPasswordView'])
        ->name('set');

    Route::post('set/{token}', [AuthController::class, 'setPasswordPost'])
        ->name('set.post');
});

Route::get('forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('forgot-password');

Route::post('forgot-password', [AuthController::class, 'forgotPasswordSend'])
    ->name('forgot-password.post');

Route::get('logout', function () {
    // todo: must be build in somewhere, something for later
    auth()->logout();
    session()->flush();
    return redirect()->route('login');
})->name('logout');
