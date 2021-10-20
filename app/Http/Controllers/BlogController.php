<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // return Route::is('blog') ? 'yes' : 'no';
        return "Посты в блоге";
    }
    public function show($post)
    {
        // return Route::is('blog*') ? 'yes' : 'no';
        return "Один пост в блоге";
    }
    public function like($post)
    {
        return "Поставить лайк";
    }
}
