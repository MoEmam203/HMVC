<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BackendController extends Controller {
    protected $nameSpace = 'customers';
    public function index(){
        return view(buildViews($this->nameSpace,'backend.index'));
    }
}