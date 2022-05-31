<?php

use Illuminate\Support\Facades\Route;


Route::prefix(buildPrefix('customers'))->group(function(){
    Route::get('/home',function(){
        return view('welcome');
    });
});

Route::prefix(buildPrefix('customers','frontend'))->group(function(){
    Route::get('/home',function(){
        return view('welcome');
    });
});

