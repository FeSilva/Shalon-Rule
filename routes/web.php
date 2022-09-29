<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmployessController;
use App\Http\Controllers\ConfigApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OmieAccountController;
use App\Http\Controllers\OmieServiceController;
use App\Http\Controllers\OmieOrdersServiceController;

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
        Route::get('/view/account/{id}', [UserController::class, 'show'])->name('users.account');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
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

    //omie accounts
    Route::prefix('/omie_accounts')->group(function () {
        Route::get('/', [OmieAccountController::class, 'index'])->name('omie_accounts.index');
        Route::get('/create', [OmieAccountController::class, 'create'])->name('omie_accounts.create');
        Route::get('/show/{id}', [OmieAccountController::class, 'show'])->name('omie_accounts.show');
        Route::post('/store', [OmieAccountController::class, 'create'])->name('omie_accounts.store');
        Route::get('/edit/{id}', [OmieAccountController::class, 'edit'])->name('omie_accounts.edit');
        Route::put('/update', [OmieAccountController::class, 'update'])->name('omie_accounts.update');
        Route::delete('/destroy/{id}', [OmieAccountController::class, 'destroy'])->name('omie_accounts.destroy');
    });

    //Omie Services
    Route::prefix('/omie_services')->group(function () {
        Route::get('/', [OmieServiceController::class, 'index'])->name('omie_services.index');
        Route::get('/create', [OmieServiceController::class, 'create'])->name('omie_services.create');
        Route::get('/show/{id}', [OmieServiceController::class, 'show'])->name('omie_services.show');
        Route::post('/store', [OmieServiceController::class, 'create'])->name('omie_services.store');
        Route::get('/edit/{id}', [OmieServiceController::class, 'edit'])->name('omie_services.edit');
        Route::put('/update', [OmieServiceController::class, 'update'])->name('omie_services.update');
        Route::delete('/destroy/{id}', [OmieServiceController::class, 'destroy'])->name('omie_services.destroy');
    });

    //Omie Order Services
    Route::prefix('/omie_orders_services')->group(function () {
        Route::get('/', [OmieOrdersServiceController::class, 'index'])->name('omie_orders_services.index');
        Route::get('/create', [OmieOrdersServiceController::class, 'create'])->name('omie_orders_services.create');
        Route::get('/show/{id}', [OmieOrdersServiceController::class, 'show'])->name('omie_orders_services.show');
        Route::post('/store', [OmieOrdersServiceController::class, 'create'])->name('omie_orders_services.store');
        Route::get('/edit/{id}', [OmieOrdersServiceController::class, 'edit'])->name('omie_orders_services.edit');
        Route::put('/update', [OmieOrdersServiceController::class, 'update'])->name('omie_orders_services.update');
        Route::delete('/destroy/{id}', [OmieOrdersServiceController::class, 'destroy'])->name('omie_orders_services.destroy');
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
