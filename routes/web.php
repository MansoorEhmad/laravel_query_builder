<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// get all students
Route::get('/students', [studentController::class, 'getStudents'])->name('get.students');
// get single student using id
Route::get('/student/{id}', [studentController::class, 'getStudent'])->name('get.student');
// add student without form,
Route::get('/add/student', [studentController::class, 'addStudent'])->name('add.student');
// update student without form
Route::get('/update/student', [studentController::class, 'updateStudent'])->name('update.student');
// delete student using id
Route::get('/delete/student/{id}', [studentController::class, 'deleteStudent'])->name('delete.student');

// using form

// show add new student form
Route::get('/page/add/student', [studentController::class, 'pageAddStudent'])->name('page.add.student');
// add new student using form
Route::post('/save/student', [studentController::class, 'saveStudent'])->name('save.student');
// show update student form
Route::get('/page/update/student/{id}', [studentController::class, 'pageUpdateStudent'])->name('page.update.student');
// update student using form
Route::post('/update/student/{id}', [studentController::class, 'upgradeStudent'])->name('upgrade.student');