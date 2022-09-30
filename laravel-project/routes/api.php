<?php

use App\Http\Controllers\separateNumController;
use App\Http\Controllers\humanToprogrammerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => "v1"], function(){

    Route::get('/numbers/{num}',[separateNumController::class,'getNum']);
    Route::post('/strings',[humanToprogrammerController::class,'convertNum']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
