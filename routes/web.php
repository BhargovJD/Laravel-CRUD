<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('insert');
});


// Insert
Route::post('/store',[PostController::class,'store']);

// display
Route::get('/display',[PostController::class,'show']);

// delete
Route::get('/delete/{id}',[PostController::class,'destroy']);

// edit form
Route::get('/edit/{id}',[PostController::class,'edit']);

// edit
Route::post('/update/{id}',[PostController::class,'update']);
