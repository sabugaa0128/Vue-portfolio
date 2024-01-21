<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\Views\ShowHomeController::class)->name('home');
Route::get('/about', \App\Http\Controllers\Views\ShowHomeController::class)->name('about');
Route::get('/experience', \App\Http\Controllers\Views\ShowExperienceController::class)->name('experience');
Route::get('/capabilities', \App\Http\Controllers\Views\ShowCapabiltiesController::class)->name('capabilities');
Route::get('/portfolio', \App\Http\Controllers\Views\ShowProjectsController::class)->name('projects');
