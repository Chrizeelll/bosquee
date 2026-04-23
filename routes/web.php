<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('student', [\App\Http\Controllers\studentmngmntController::class, 'index'])->name('student.index');

    Route::get('student/add', [\App\Http\Controllers\addController::class, 'show'])->name('student.add');
    Route::get('student/edit', [\App\Http\Controllers\editControler::class, 'show'])->name('student.edit');
    Route::get('student/delete', [\App\Http\Controllers\deleteController::class, 'show'])->name('student.delete');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
