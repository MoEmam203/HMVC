<?php

use Illuminate\Support\Facades\Route;

$moduleName = strtolower(basename(dirname(__DIR__, 1)));

Route::prefix(buildPrefix($moduleName))->middleware('customer')->group(function(){
    require 'backend.php';
});

Route::prefix(buildPrefix($moduleName,'frontend'))->middleware('customer')->group(function(){
    require 'frontend.php';
});

