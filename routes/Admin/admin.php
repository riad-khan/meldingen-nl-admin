<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['auth']],function(){

    //meldingen Route
    Route::get('/meldingen',[\App\Http\Controllers\Admin\MeldingenController::class,'index'])->name('meldingen');
    Route::get('/meldingen/edit/{id}',[\App\Http\Controllers\Admin\MeldingenController::class,'edit']);
    Route::post('/meldingen/update/{id}',[\App\Http\Controllers\Admin\MeldingenController::class,'update']);
    Route::get('/delete/meldingen/{id}',[\App\Http\Controllers\Admin\MeldingenController::class,'destroy']);
    Route::get('/admin/meldingen-data',[\App\Http\Controllers\Admin\MeldingenController::class,'meldingen_data']);

    //Regio Routes
    Route::get('/regio',[\App\Http\Controllers\Admin\RegioController::class,'index'])->name('regio');
});


