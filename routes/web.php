<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/admin', function () {
    return view('admin.index');
})->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/calendar', function () {
        return view('calendar');
    })->name('calendar');
    Route::get('/mailbox', function () {
        return view('mailbox');
    })->name('mailbox');
});
