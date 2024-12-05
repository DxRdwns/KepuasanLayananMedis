<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\SubKriteriaController;
use App\Http\Controllers\Admin\IntervallSubKriteriaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\AboutController;

use Illuminate\Support\Facades\Route;


// User Routes
Route::get('/', action: [UserController::class, 'home']);
Route::get('/Petunjuk', action: [UserController::class, 'petunjuk']);

Route::get('/questionnaire', action: [UserController::class, 'questionnaire']);
Route::get('/questionnaire/question', action: [UserController::class, 'question']);
Route::post('/questionnaire/addmember', action: [MemberController::class, 'addmember']);

Route::post('/questionnaire/question/add', [UserController::class, 'store'])->name('feedback.store');
Route::get('/questionnaire/question/result', [UserController::class, 'result'])->name('feedback.result');


Route::middleware('auth')->group(function () {
    // Admin Routes
Route::get('/admin/dashboard', action: [DashboardController::class, 'index']);
Route::get('/admin/member', action: [MemberController::class, 'index'])->name('admin.member');
Route::get('/admin/about', action: [AboutController::class, 'index']);
Route::post('/admin/about/update/{id}', action: [AboutController::class, 'update']);


Route::get('/admin/kriteria', action: [KriteriaController::class, 'index']);
Route::post('/admin/kriteria/store', action: [KriteriaController::class, 'store']);
Route::post('/admin/kriteria/destroy/{id}', [KriteriaController::class, 'destroy']);
Route::post('/admin/kriteria/update/{id}', action: [KriteriaController::class, 'update']);


Route::get('/admin/subkriteria', action: [SubKriteriaController::class, 'index']);
Route::post('/admin/subkriteria/store', action: [SubKriteriaController::class, 'store']);
Route::post('/admin/subkriteria/update/{id}', action: [SubKriteriaController::class, 'update']);
Route::post('/admin/subkriteria/destroy/{id}', action: [SubKriteriaController::class, 'destroy']);



Route::get('/admin/intervalsubkriteria', action: [IntervallSubKriteriaController::class, 'index']);
Route::post('/admin/intervalsubkriteria/store', action: [IntervallSubKriteriaController::class, 'store']);
Route::post('admin/intervalsubkriteria/update/{id}', action: [IntervallSubKriteriaController::class, 'update']);
Route::post('admin/intervalsubkriteria/destroy/{id}', action: [IntervallSubKriteriaController::class, 'destroy']);
});

require __DIR__.'/auth.php';