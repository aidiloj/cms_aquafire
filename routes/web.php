<?php

use App\Http\Controllers\BlogController;
use App\Livewire\DailyLog;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class,'index'])->name('home'); 


// Route::get('log', DailyLog::class);