<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);   
