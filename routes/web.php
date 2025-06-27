<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/',[CatalogController::class,'index'])->name('index');
Route::get('/about',[CatalogController::class,'about'])->name('about');
Route::get('/contact',[CatalogController::class,'contact'])->name('contact');
Route::post('/contact',[CatalogController::class,'contact_search']);
Route::post('/contact',[CatalogController::class,'contact_data']);
Route::get('/photo_detail',[CatalogController::class,'photo_detail'])->name('photo_detail');
Route::get('/video_detail',[CatalogController::class,'video_detail'])->name('video_detail');
Route::get('/videos',[CatalogController::class,'videos'])->name('videos');
