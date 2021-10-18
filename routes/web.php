<?php

use App\Http\Controllers\AnotationsController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AnotationsController::class, 'index']);
Route::get("/create", [AnotationsController::class, 'create']);
Route::post("/create", [AnotationsController::class, 'store']);
Route::post("/anotation/{id}", [AnotationsController::class, 'destroy']);
