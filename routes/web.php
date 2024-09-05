<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentsController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('show', [StudentsController::class, 'show']);
// Route::get('add', [StudentsController::class, 'add']);
// Route::get('remove', [StudentsController::class, 'delete']);
// Route::get('update', [StudentsController::class, 'update']);
// Route::get('topper/{$name}', [StudentsController::class, 'topper']);



Route::controller(StudentsController::class)->group(function () {
    Route::get('show','show');
    Route::get('add', 'add');
    Route::get('remove','delete');
    Route::get('update', 'update');
    Route::get('topper/{name}', 'topper');
});