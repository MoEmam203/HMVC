<?php

use Illuminate\Support\Facades\Route;


Route::prefix(config('customers.prefix.backend',config('module.prefix.backend')))->group(function(){
    Route::get('/home',function(){
        return view('welcome');
    });
});

