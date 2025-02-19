<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

// PuclicController
Route::get('/', [PublicController::class, 'welcome'])->name('homepage');

//ArticleController
Route::get('/article/create', [ArticleController::class, 'create'])->name('create.article')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('store.article')->middleware('auth');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index.article');
Route::get('/article/detail/{id}', [ArticleController::class, 'detail'])->name('detail.article');

//ProductController
Route::get('/product/create', [ProductController::class, 'create'])->name('create.product')->gatherMiddleware('auth');
Route::post('/product/store', [ProductController::class, 'store'])->name('store.product')->middleware('auth');
Route::get('/product/index', [ProductController::class, 'index'])->name('index.product');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('show.product');



