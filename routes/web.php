<?php

use App\Http\Controllers\Trains\TrainsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrainsController::class, "index"])->name("home");
