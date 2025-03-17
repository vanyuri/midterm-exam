<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;

Route::get('/UychocdeVanYuri', [FeatureController::class, 'index'])->name('features.index');
