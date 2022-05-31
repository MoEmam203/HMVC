<?php

use Customers\Http\Controllers\Backend\BackendController;
use Customers\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


Route::prefix(buildPrefix('customers'))->group(function(){
    Route::get('/home',[BackendController::class,'index']);
});

Route::prefix(buildPrefix('customers','frontend'))->group(function(){
    Route::get('/home',[FrontendController::class,'index']);
});

