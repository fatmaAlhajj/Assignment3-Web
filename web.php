<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveCoockiController;

Route::get('/language', [SaveCoockiController::class, 'showForm'])->name('language.form');
Route::post('/language', [SaveCoockiController::class, 'saveLanguage'])->name('language.save');