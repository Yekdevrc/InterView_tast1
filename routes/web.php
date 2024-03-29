<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ResponseController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('questionnaire', QuestionnaireController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('response', ResponseController::class);
// });
