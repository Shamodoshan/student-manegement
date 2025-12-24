<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('pages.home.home');
});

Route::get('/student', function () {
    return view('pages.student.home');
});

Route::get('/student',[studentController::class , 'showData'])->name('student.show');
Route::post('/student/save',[studentController::class , 'saveData'])->name('student.save');

Route::get('student/{stuid}/delete',[studentController::class , 'deleteData'])->name('student.delete');
Route::get('student/{stuid}/edit',[studentController::class , 'editData'])->name('student.edit');

Route::post('student/{stuid}/update',[studentController::class , 'updateData'])->name('student.update');