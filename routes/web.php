<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);

Auth::routes();

Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panel'])->name('panel');

Route::get('/account/create/step1', [App\Http\Controllers\AccountController::class, 'step1'])->name('step1');

Route::get('/account/create/step2/partner', [App\Http\Controllers\AccountController::class, 'step2_partner'])->name('step2_partner');

Route::get('/account/create/step2/volunteer', [App\Http\Controllers\AccountController::class, 'step2_volunteer'])->name('step2_volunteer');
