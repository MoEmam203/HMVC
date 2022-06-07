<?php

namespace Customers\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\frontend\storeRequest;

class FrontendController extends Controller{
    protected $nameSpace = 'customers';
    public function index(){
        return view(buildViews($this->nameSpace,'frontend.index'));
    }

    public function store(storeRequest $request)
    {
        return 'using frontend store request';
    }
}