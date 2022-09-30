<?php

use App\Http\Controllers\separateNumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => "v1"], function(){

    Route::get('/numbers/{num}',[separateNumController::class,'getNum']);
    

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
