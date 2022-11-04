<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OperationController;

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

/*Route::get('home', [StaterkitController::class, 'home'])->name('home');
// Route Components
Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');*/


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::prefix('/pre-schedule')->group(function () {
    Route::get('/', [CalendarController::class, 'preSchedule'])->name('preSchedule');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

    Route::get('/', [DashboardController::class, 'index'], function () {
        return view('dashboard.index');
    })->name('dashboard');


    Route::prefix('/calendar')->group(function () {
        Route::get('/', [CalendarController::class, 'index'])->name('calendar');
    });

    //Usuários
    Route::prefix('/user')->group(function () {
        Route::get('/list', [UserController::class, 'index'])->name('users.list');
        Route::get('/view/account/{id}', [UserController::class, 'show'])->name('users.account');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
        Route::post('/update', [UserController::class, 'update'])->name('users.update');
    });


    //Usuários
    Route::prefix('/services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');

        Route::get('/show/{id}', [ServiceController::class, 'store'])->name('services.show');

        Route::PATCH('/update/{id}', [ServiceController::class, 'update'])->name('services.update');
        Route::DELETE('/destroy/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
    });

       //Usuários
    Route::prefix('/operations')->group(function () {
        Route::get('/', [OperationController::class, 'create'])->name('operations.create');
        Route::post('/store', [OperationController::class, 'store'])->name('operations.store');
        Route::get('/edit/{id}', [OperationController::class, 'edit'])->name('operations.edit');

        Route::get('/show/{id}', [OperationController::class, 'store'])->name('operations.show');

        Route::PATCH('/update/{id}', [OperationController::class, 'update'])->name('operations.update');
        Route::DELETE('/destroy/{id}', [OperationController::class, 'destroy'])->name('operations.destroy');
    });
});
/*

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin'
])->group(function () {
    /*Route::get('/', [DashboardController::class, 'index'], function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::prefix('/company')->group(function () {
        Route::get('/', [CompanyController::class, 'index'])->name('company');
        Route::get('/create', [CompanyController::class, 'create'])->name('company.create');

    });


    Route::prefix('/employess')->group(function () {
        Route::get('/', [EmployessController::class, 'index'])->name('employess');
    });
});*/
