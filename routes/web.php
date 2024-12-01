<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/jobs', [JobController::class,'index'])->name('index');
Route::post('/jobs', [JobController::class,'store'])->name('store');
Route::get('/jobs/create', [JobController::class,'create'])->name('create');
Route::get('/jobs/{id}', [JobController::class,'show'])->name('show');