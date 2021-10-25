<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('throttle:10'); //лимит по запросам не более 5 раз
    }

    public function __invoke(Request $request)
    {

        // dd(response());
        // return 'Test';
        // return ['foo' => 'bar'];
        // return response('Test');
        return response()->json(['foo' => 'bar']);
    }
}
