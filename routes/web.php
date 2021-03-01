<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'home']);

Auth::routes();

Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panel'])->name('panel');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/rgpd', [App\Http\Controllers\LegalController::class, 'rgpd'])->name('rgpd');
Route::get('/cgu', [App\Http\Controllers\LegalController::class, 'cgu'])->name('cgu');
Route::get('/mention-legales', [App\Http\Controllers\LegalController::class, 'mentions'])->name('mention-legales');

Route::get('/account/create/step1', [App\Http\Controllers\AccountController::class, 'step1'])->name('step1');

Route::resource('volunteer', VolunteerController::class);