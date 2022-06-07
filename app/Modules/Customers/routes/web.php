<?php

use Illuminate\Support\Facades\Route;


Route::prefix(buildPrefix('customers'))->middleware('customer')->group(function(){
    require 'backend.php';
});

Route::prefix(buildPrefix('customers','frontend'))->middleware('customer')->group(function(){
    require 'frontend.php';
});

