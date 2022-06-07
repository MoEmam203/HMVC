<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\backend\storeRequest;

class BackendController extends Controller {
    protected $nameSpace = 'customers';
    public function index(){
        return view(buildViews($this->nameSpace,'backend.index'));
    }

    public function store(storeRequest $request){
        return 'using backend store request';
    }
}