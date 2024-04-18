<?php

use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    'destinations/trash/{id}',
    [DestinationController::class, 'trash']
    )->name('destinations.trash');
    
Route::get(
    'destinations/trashed/',
    [DestinationController::class, 'trashed']
    )->name('destinations.trashed');

Route::get(
    'destinations/restore/{id}',
    [DestinationController::class, 'trash']
    )->name('destinations.restore');

Route::resource(
    'destinations', 
    DestinationController::class);

    Route::get(
        'attractions/trash/{id}',
        [AttractionsController::class, 'trash']
        )->name('attractions.trash');
        
    Route::get(
        'attractions/trashed/',
        [AttractionsController::class, 'trashed']
        )->name('attractions.trashed');
    
    Route::get(
        'attractions/restore/{id}',
        [AttractionsController::class, 'trash']
        )->name('attractions.restore');
    
    Route::resource(
        'attractions', 
        AttractionsController::class);