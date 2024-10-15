<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CopiesController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//BOOKS API
Route::get('/book', [BooksController::class,'index']);
Route::get('/book/{id}', [BooksController::class,'show']);
Route::post('/book', [BooksController::class,'store']);
Route::delete('/book/{id}', [BooksController::class,'destroy']);
Route::put('/book/{id}', [BooksController::class,'update']);

//USERS API
Route::get('/user', [UserController::class,'index']);
Route::get('/user/{id}', [UserController::class,'show']);
Route::post('/user', [UserController::class,'store']);
Route::delete('/user/{id}', [UserController::class,'destroy']);
Route::put('/user/{id}', [UserController::class,'update']);

//COPIES API
Route::get('/copies', [CopiesController::class,'index']);
Route::get('/copies/{id}', [CopiesController::class,'show']);
Route::post('/copies', [CopiesController::class,'store']);
Route::delete('/copies/{id}', [CopiesController::class,'destroy']);
Route::put('/copies/{id}', [CopiesController::class,'update']);

//LENDING
Route::get('/lending', [LendingController::class, 'index']);
Route::get('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'show']);
Route::post('/lending', [LendingController::class, 'store']);
Route::patch('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'update']);
Route::delete('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'destroy']);