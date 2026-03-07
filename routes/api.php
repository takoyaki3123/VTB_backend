<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiscoverController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'show']);
Route::post('/home', [HomeController::class, 'store']);

Route::get('/groupList', [GroupController::class, 'showList']);
Route::get('/group/{id}', [GroupController::class, 'show']);

Route::get('/discover', [DiscoverController::class, 'getRandomList']);
