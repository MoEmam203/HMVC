<?php

use Customers\Http\Controllers\Backend\BackendController;

Route::get('/home', [BackendController::class,'index']);
Route::get('/store', [BackendController::class,'store']);
