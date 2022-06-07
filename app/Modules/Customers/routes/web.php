<?php

use Customers\Http\Controllers\Backend\BackendController;
use Customers\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


Route::prefix(buildPrefix('customers'))->middleware('customer')->group(function(){
    Route::get('/home',[BackendController::class,'index']);
    Route::get('/store',[BackendController::class,'store']);
});

Route::prefix(buildPrefix('customers','frontend'))->middleware('customer')->group(function(){
    Route::get('/home',[FrontendController::class,'index']);
    Route::get('/store', [FrontendController::class,'store']);
});

