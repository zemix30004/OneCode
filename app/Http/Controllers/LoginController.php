<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');  //1 способ
        // return app('view')->make('login.index');//2 способ
        // return view()->make('login.index'); //3 способ
        // return View::make('login.index'); //4 способ через фасад View
    }

    public function store()
    {
        return 'Залогинился';
    }
}
