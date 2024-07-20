<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ImageController;
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

Route::get('/', [NewController::class, 'index']);
Route::get('detail-new/{id}', [NewController::class, 'detailNew']);



Route::get('/get-upload', [ImageController::class, 'getImages']);
Route::post('/upload', [ImageController::class, 'uploadImage'])->name('image.upload');