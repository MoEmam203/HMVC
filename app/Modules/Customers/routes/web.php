<?php

use Illuminate\Support\Facades\Route;


Route::prefix(config('customers.prefix.backend',config('module.prefix.backend')).'/'.config('customers.module-name'))->group(function(){
    Route::get('/home',function(){
        return view('welcome');
    });
});

