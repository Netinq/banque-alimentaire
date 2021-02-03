<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'home']);

Auth::routes();

Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panel'])->name('panel');

Route::get('/account/create/step1', [App\Http\Controllers\AccountController::class, 'step1'])->name('step1');

Route::resource('volunteer', VolunteerController::class);
