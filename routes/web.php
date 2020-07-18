<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\UserSpace;


Route::get('/', 'WelcomeController@home');

Route::prefix('Home')->group(function () {
    Route::get('About',  [AboutController::class, 'about'])->name('about');

    Route::prefix('Sign_in')->group(function () {
        Route::get('Login',    [UserLogin::class, 'login'])->name('login');
        Route::post('Login', [UserSpace::class, 'validate'])->name('validate');
        Route::get('Register', [UserLogin::class, 'register'])->name('register');
        Route::post('Register ', [UserSpace::class, 'verify '])->name('verify');
    });
});


Route::prefix('MySpace')->group(function () {
    Route::get('/', [UserSpace::class, 'space'])->name('space');
    Route::get('MyData', [UserSpace::class, 'show'])->name('view');
    Route::post('Print', [UserSpace::class, 'print'])->name('print');
    Route::get('Edit', [UserSpace::class, 'edit'])->name('edit');
    Route::Post('Edit', [UserSpace::class, 'edit'])->name('edit');
    Route::post('Create', [UserSpace::class, 'new'])->name('new');
});
