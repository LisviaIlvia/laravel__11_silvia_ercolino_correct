<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'welcome'])->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('create.article');
Route::post('/article/store', [ArticleController::class, 'store'])->name('store.article');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index.article');
Route::get('/article/detail/{id}', [ArticleController::class, 'detail'])->name('detail.article');

