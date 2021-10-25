<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        // $this->middleware('token'); //лимит по запросам не более 5 раз
    }

    public function __invoke(Request $request)
    {

        // dd(response());
        // return 'Test';
        // return ['foo' => 'bar'];
        return response('Test');
        return response()->json(['foo' => 'bar']);
    }
}
