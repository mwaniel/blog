<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// Protected Routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    // User-related routes (profile, logout, etc.) can be added here

    // Blog Post routes
    Route::apiResource('posts', PostController::class);
    Route::post('posts/{post}/tags', [PostController::class, 'addTags']);
    Route::delete('posts/{post}/tags/{tag}', [PostController::class, 'removeTag']);

    // Tag routes
    Route::apiResource('tags', TagController::class);
});

// Public route to retrieve all posts (no authentication required)
Route::get('/posts', [PostController::class, 'index']);
