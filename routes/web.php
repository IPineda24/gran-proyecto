<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inspire;
use App\Http\Controllers\History;
use App\Http\Controllers\vision;
use App\Http\Controllers\mision;
use App\Http\Controllers\about;
use App\Http\Controllers\MySpace;
use App\Http\Controllers\Space\show_controller;
use App\Http\Controllers\Space\edit_controller;
use App\Http\Controllers\Space\new_controller;
use App\Http\Controllers\Space\print_controller;

Route::get('/','home@home');

Route::prefix('welcome')->group(function() {

    Route::get('about',[about::class,'about_us'])->name('about');
    Route::get('mision',[mision::class,'mision'])->name('mision');
    Route::get('vision',[vision::class,'vision'])->name('vision');
    Route::get('history',[History::class,'history'])->name('history');
    Route::post('inspire',[inspire::class,'inspire'])->name('inspire');
    Route::get('my_site',[MySpace::class,'space'])->name('my_space');
    
Route::prefix('my_site')->group(function(){
    //to me: aun estan vacias. Recordatorio sabado agregarle las demas vistas 
    Route::get('view',[show_controller::class,'show'])->name('view');
    Route::get('edit',[edit_controller::class,'edit'])->name('edit');
    Route::post('new',[new_controller::class,'new'])->name('new');
    Route::post('print',[print_controller::class,'print'])->name('print');
});


});




