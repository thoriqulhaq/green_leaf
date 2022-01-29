<?php

use App\Http\Controllers\ManageApplicationFormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ManageApplicationFormController::class, 'getQuestions']);
Route::get('/create-question', function () {
    return view('createQuestion');
});
Route::post('/create-question', [ManageApplicationFormController::class, 'createQuestion'])->name('create-question');
Route::get('/update-question/{id}', [ManageApplicationFormController::class, 'getQuestion']);
Route::post('/update-question', [ManageApplicationFormController::class, 'updateQuestion'])->name('update-question');
Route::get('/delete-question/{id}', [ManageApplicationFormController::class, 'deleteQuestion']);
Route::get('/manage-application', [ManageApplicationFormController::class, 'manageApplication']);
Route::post('/answering-question', [ManageApplicationFormController::class, 'answeringQuestion'])->name('answering-question');
Route::post('/update-answer', [ManageApplicationFormController::class, 'updateAnswer'])->name('update-answer');
Route::get('/community-dashboard', [ManageApplicationFormController::class, 'getAnsweredQuestions']);
