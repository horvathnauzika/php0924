<?php

use App\Http\Controllers\BookFactoryController;
use App\Http\Controllers\CopyFactoryController;
use App\Http\Controllers\LibUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//GET
Route::get('/users', [LibUserController::class,'index']);
// paraméteres útvonal, és $ jelet ne tegyünk, kebab case, a preferált
Route::get('/user/{id}', [LibUserController::class,'show']);
//POST
Route::post('/user', [LibUserController::class,'store']);


Route::get('/books', [BookFactoryController::class,'index']);
// paraméteres útvonal, és $ jelet ne tegyünk, kebab case, a preferált
Route::get('/books/{id}', [BookFactoryController::class,'show']);

Route::get('/copies', [CopyFactoryController::class,'index']);
// paraméteres útvonal, és $ jelet ne tegyünk, kebab case, a preferált
