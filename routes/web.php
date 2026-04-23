<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('groups', GroupController::class);


Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/groups/{group}/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/groups/{group}/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/groups/{group}/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
