<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('category', CategoryController::class)->names('category');

Route::resource('tags', TagController::class)->names('tag');

Route::resource('posts', PostController::class)->names('post');