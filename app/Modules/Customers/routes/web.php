<?php

use Illuminate\Support\Facades\Route;


Route::prefix(config('routes.prefix.backend'))->group(function(){
    Route::get('/home',function(){
        return view('welcome');
    });
});

