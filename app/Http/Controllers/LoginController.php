<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
	public function index(Request $request)
	{
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

		if (true) {
			return redirect()->back()->withInput();
		}
		return redirect()->route('user');
	}
}
