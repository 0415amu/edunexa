<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\CompanyAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/schools', [SchoolController::class, 'store']);
Route::get('/schools', [SchoolController::class, 'index']);
Route::post('/company/login', [CompanyAuthController::class, 'login']);
