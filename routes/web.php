<?php

use App\Http\Controllers\ManageApplicationFormContorller;
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

Route::get('/', [ManageApplicationFormContorller::class, 'getQuestions']);
Route::get('/create-question', function () {
    return view('createQuestion');
});
Route::post('/create-question', [ManageApplicationFormContorller::class, 'createQuestion'])->name('create-question');
Route::get('/update-question/{id}', [ManageApplicationFormContorller::class, 'getQuestion']);
Route::post('/update-question', [ManageApplicationFormContorller::class, 'updateQuestion'])->name('update-question');
Route::get('/delete-question/{id}', [ManageApplicationFormContorller::class, 'deleteQuestion']);
