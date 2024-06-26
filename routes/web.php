<?php

use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;

Route::get('/')->uses(StartController::class)->name('start.index');
Route::get('challenges')->uses(StartController::class)->name('challenges.index');
Route::get('challenges/{challenge}')->uses(StartController::class)->name('challenges.show');
Route::get('partners')->uses(StartController::class)->name('partners.show');
Route::get('partners/register')->uses(StartController::class)->name('partners.register.index');
Route::post('partners/register')->uses(StartController::class)->name('partners.register.store');
Route::post('newsletter/store')->uses(StartController::class)->name('newsletter.store');
Route::get('terms')->uses(StartController::class)->name('terms.index');
Route::get('privacy')->uses(StartController::class)->name('privacy.index');
