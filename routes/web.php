<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\InstituteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('institutes', InstituteController::class);
Route::resource('branches',BranchController::class);