<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // dd(session()->has('foo')); // будет true
        // dd(session()->has('test')); // будет false
        // dd(session()->all());
        // $foo = session()->get('foo');
        // $foo = session('foo');

        // dd($foo);
        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // $full = $request->fullUrl();
        // dd($ip, $path, $url, $full);

        // dd($request->is('logi*'));
        // dd($request->routeIs('logi*'));
        return view('login.index');  //1 способ
        // return app('view')->make('login.index');//2 способ
        // return view()->make('login.index'); //3 способ
        // return View::make('login.index'); //4 способ через фасад View
    }

    public function store(Request $request)

    {
        session(['alert' => __('Добро пожаловать!')]);
        // alert(__('Добро пожаловать!'));
        // $session = app()->make('session');//1 способ
        // $session = app('session'); //2 способ
        // $session = session(); //3 способ
        // $session->put('foo', 'bar');

        // $session()->put('foo', 'bar'); //1 способ рефакторинга кода стр36-37
        // session([
        //     'foo' => 'Bar',
        //     'name' => 'Max',
        // ]); //2 способ рефакторинга кода стр36-37

        // session()->forget('foo');//удаляет данные из сессии по foo
        // session()->flush(); //удаляет все данные из сессии

        // $session = Session::get();//4 сособ через фасад
        // dd($session);
        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // dd($ip, $path, $url);
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $remember = $request->boolean('remember');
        // dd($email, $password, $remember);
        // return 'Залогинился';
        // // return response('Запрос на вход');
        // return response()->redirectTo('/foo');
        // return response()->redirectToRoute('user');
        // return redirect('/foo');


        // if (true) {
        //     return redirect()->back()->withInput();
        // }
        return redirect()->route('user');
    }
}
