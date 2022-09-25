<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmployessController;
use App\Http\Controllers\ConfigApiController;
use App\Http\Controllers\UserController;

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
  Route::get('/', [DashboardController::class, 'index'], function () {
        return view('dashboard.index');
    })->name('dashboard');


    Route::prefix('/company')->group(function () {
        Route::get('/', [CompanyController::class, 'index'])->name('company');
        Route::get('/create', [CompanyController::class, 'create'])->name('company.create');

    });

    Route::prefix('/employess')->group(function () {
        Route::get('/', [EmployessController::class, 'index'])->name('employess');
    });
    Route::prefix('/calendar')->group(function () {
        Route::get('/', [CalendarController::class, 'index'])->name('calendar');
    });

    //Usuários
    Route::prefix('/user')->group(function () {
        Route::get('/list', [UserController::class, 'index'])->name('users.list');
    });

    //Configurações
    Route::prefix('/config-apis')->group(function () {
        Route::get('/', [ConfigApiController::class, 'index'])->name('config-apis.index');
        Route::get('/create', [ConfigApiController::class, 'create'])->name('config-apis.create');
        Route::get('/show/{id}', [ConfigApiController::class, 'show'])->name('config-apis.show');
        Route::post('/store', [ConfigApiController::class, 'create'])->name('config-apis.store');
        Route::get('/edit/{id}', [ConfigApiController::class, 'edit'])->name('config-apis.edit');
        Route::put('/update', [ConfigApiController::class, 'update'])->name('config-apis.update');
        Route::delete('/destroy/{id}', [ConfigApiController::class, 'destroy'])->name('config-apis.destroy');
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
