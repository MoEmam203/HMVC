<?php

namespace Customers\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller{
    protected $nameSpace = 'customers';
    public function index(){
        return view(buildViews($this->nameSpace,'frontend.index'));
    }
}