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
    Route::get('/regio-data',[\App\Http\Controllers\Admin\RegioController::class,'regio_data']);
    Route::get('/regio/edit/{id}',[\App\Http\Controllers\Admin\RegioController::class,'edit']);
    Route::post('/regio/update/{id}',[\App\Http\Controllers\Admin\RegioController::class,'update']);
    Route::get('/regio/delete/{id}',[\App\Http\Controllers\Admin\RegioController::class,'destroy']);

    //Blog Category
    Route::get('/blog-category/create',[\App\Http\Controllers\Admin\BlogCategoryController::class,'create']);
    Route::post('/store/Blog-category',[\App\Http\Controllers\Admin\BlogCategoryController::class,'store']);
    Route::get('/blog-category',[\App\Http\Controllers\Admin\BlogCategoryController::class,'index'])->name('blog_category');
    Route::get('/blog-category-data',[\App\Http\Controllers\Admin\BlogCategoryController::class,'Categories_data']);
    Route::get('/blog-category/edit/{id}',[\App\Http\Controllers\Admin\BlogCategoryController::class,'edit']);
    Route::post('/blog-category/update/{id}',[\App\Http\Controllers\Admin\BlogCategoryController::class,'update']);
    Route::get('/blog-category/delete/{id}',[\App\Http\Controllers\Admin\BlogCategoryController::class,'destroy']);

    //Blog Routes

    Route::get('/blogs/create',[\App\Http\Controllers\Admin\BlogController::class,'create']);
    Route::post('/store/blog',[\App\Http\Controllers\Admin\BlogController::class,'store']);
    Route::get('/blog-data',[\App\Http\Controllers\Admin\BlogController::class,'blog_data']);
    Route::get('/blogs',[\App\Http\Controllers\Admin\BlogController::class,'index'])->name('blogs');
    Route::get('/blogs/edit/{id}',[\App\Http\Controllers\Admin\BlogController::class,'edit']);
    Route::post('/blog/update/{id}',[\App\Http\Controllers\Admin\BlogController::class,'update']);
    Route::get('/blogs/delete/{id}',[\App\Http\Controllers\Admin\BlogController::class,'destroy']);
});


