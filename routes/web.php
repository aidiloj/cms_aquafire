<?php

use App\Livewire\DailyLog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('log', DailyLog::class);