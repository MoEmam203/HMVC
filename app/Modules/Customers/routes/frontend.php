<?php

use Customers\Http\Controllers\Frontend\FrontendController;

Route::get('/home', [FrontendController::class,'index']);
Route::get('/store', [FrontendController::class,'store']);
