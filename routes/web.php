<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\SchoolController;

Route::get('/company/login', function () {
    return view('company.login');
})->name('login');

Route::post('/company/login', [CompanyAuthController::class, 'login']);

Route::get('/company/dashboard', [CompanyAuthController::class, 'dashboard'])
    ->middleware('auth');

Route::post('/company/logout', [CompanyAuthController::class, 'logout'])
    ->middleware('auth');

Route::get('/company/schools/create', function () {
    return view('company.schools.create');
})->middleware('auth')->name('company.schools.create');

Route::post('/company/schools', [SchoolController::class, 'storeFromDashboard'])
    ->middleware('auth')
    ->name('company.schools.store');