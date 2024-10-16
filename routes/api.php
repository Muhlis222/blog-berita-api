<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts', [PostController::class, 'index']);

// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/tags', [TagController::class, 'index']);
// Route::get('/comments', [CommentController::class, 'index']);

Route::apiResource('/posts', PostController::class);
Route::apiResource('/categories', CategoryController::class);



// Route::post('/store', [\App\Http\Controllers\PostController::class, 'store'])->middleware('auth:sanctum');
