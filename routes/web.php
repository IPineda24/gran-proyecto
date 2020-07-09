<?php

use Illuminate\Support\Facades\Route;


Route::get('/','home@home');

Route::prefix('welcome')->group(function() {

    Route::get('about','about@aboutus')->name('about');
    
    Route::get('data','data@thedata')->name('object');
    
    Route::get('mision','mision@mision')->name('mision');
    
    Route::get('vision','vision@vision')->name('vision');

    Route::get('history','History@history')->name('history');

    Route::post('inspire','inspire@inspire')->name('inspire');
 
});






