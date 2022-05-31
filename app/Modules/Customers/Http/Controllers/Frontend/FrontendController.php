<?php

namespace Customers\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller{
    public function index(){
        return view("customers::frontend.index");
    }
}