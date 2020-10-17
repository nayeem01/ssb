<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\BrandController;
/*
Route::get('/', function () {
    return view('backend.pages.index');
});

*/

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/', [PageController::class,'dashboard'])->name('admin.dashboard');
    //Route::get('/', 'App\Http\Controllers\Backend\PageController@dashboard')->name('admin.dashboard');
    Route::group(['prefix' => '/brands'], function () {
        Route::get('/manage', [BrandController::class,'index'])->name('brands.manage');
        Route::get('/create', [BrandController::class,'create'])->name('brands.create');
        Route::post('/store', [BrandController::class,'store'])->name('brands.store');
        Route::get('/edit{id}', [BrandController::class,'edit'])->name('brands.edit');
        Route::post('/edit{id}', [BrandController::class,'store'])->name('brands.update');
    });
});
