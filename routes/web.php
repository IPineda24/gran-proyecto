<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome/about', function () {
    return ('nosotros somos una blablabla...');
})->name('About');


Route::get('welcome/datos', function () {
    return ('los objetivos son blablabla...');
})->name('objetivos');


Route::get('welcome/mision', function () {
    return ('Nuestra misión blablabla...');
})->name('mision');

Route::get('welcome/vision', function () {
    return ('Nuestra visión blablabla...');
})->name('vision');


Route::get('welcome/history','History@history')->name('history');

Route::get('welcome/inspire','inspire@inspire')->name('inspire');

