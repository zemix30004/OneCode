<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('throttle:2,1'); //лимит по запросам не более 5 раз
    }

    public function __invoke()
    {
        return 'Test';
    }
}
