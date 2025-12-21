<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopFromController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/view', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

// Workshop HTML FORM
Route::get('/workshop-form', [WorkshopFromController::class, 'index']);
Route::post('/workshop-form', [WorkshopFromController::class, 'store']);
