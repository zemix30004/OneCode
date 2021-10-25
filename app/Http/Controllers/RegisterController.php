<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function store(Request $request)     //1 способ
    {
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $ = !! $request->input('agreement$');
        // $password = $request->input('password');
        // $agreement = $request->boolean('agreement');
        // dd($name, $email, $password, $agreement);
        // dd($name, $email, $, $avatar); //Получить  данные по запросу только по переменным name email aggreement$ (булевое значение от чекбокса)
        // dd($request->has('name'));    //Проверить есть ли параметр name в запросе да или нет
        // dd($request->filled('name')); //Проверить  заполнен ли данными параметр name
        // dd($request->missing('name'));  //Проверить, пропущено ли значение name
        //$request = request();     //или $request = app('request');
        //dd(($request));             //2 способ запроса объекта на вывод
        //3способ dd(app()->make($request));
        //4способ dd(app('request'));
        // return "Запрос на регистрацию";

        if (true) {
            return redirect()->back()->withInput();
        }
        return redirect()->route('user');
    }
}
