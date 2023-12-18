<?php

use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubjectsController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('areas', AreaController::class)->names('admin.areas');

Route::resource('careers', CareerController::class)->names('admin.careers');

Route::resource('subjects', SubjectsController::class)->names('admin.subjects');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('users', UserController::class)->names('admin.users');