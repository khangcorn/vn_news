<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ImageController;
use  App\Http\Controllers\CategoriesController;
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
Route::get('detail-new/{id}', [NewController::class, 'detailNew'])->name('detail-new');
Route::get('filter', [NewController::class, 'findSpecificNew'])->name('filter-new');




Route::get('/get-upload', [ImageController::class, 'getImages']);
Route::post('/upload', [ImageController::class, 'uploadImage'])->name('image.upload');


Route::get('categories-new/{id}', [CategoriesController::class, 'categoryNew'])->name('categories-new');