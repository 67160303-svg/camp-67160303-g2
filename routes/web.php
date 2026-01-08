<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopFromController;
use App\Http\Controllers\PokedexController;

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

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/flights', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});

Route::get('/pokedexs', [PokedexController::class, 'index']);
Route::get('/pokedexs/create', [PokedexController::class, 'create']);
Route::post('/pokedexs', [PokedexController::class, 'store']);
Route::get('/pokedexs/{id}/edit', [PokedexController::class, 'edit']);
Route::put('/pokedexs/{id}', [PokedexController::class, 'update']);
Route::delete('/pokedexs/{id}', [PokedexController::class, 'destroy']);
