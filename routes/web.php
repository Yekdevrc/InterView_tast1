<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect(route('questionnaire.index'));
})->name('dashboard');

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect(route('questionnaire.index'));
    })->name('dashboard');

    Route::resource('questionnaire', QuestionnaireController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('response', ResponseController::class);
    Route::resource('student', StudentController::class);
// });
