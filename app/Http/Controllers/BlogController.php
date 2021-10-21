<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
        ];

        $posts = array_fill(0, 10, $post);
        // dd($posts);
        // return Route::is('blog') ? 'yes' : 'no'; //1 способ передачи значений posts
        // return view('blog.index', [
        //     'posts' => $posts,
        // ]);
        return view('blog.index', compact('posts'));  //2 способ передачи значений posts
    }
    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
        ];
        $posts = array_fill(0, 10, $post);
        // return Route::is('blog*') ? 'yes' : 'no';
        return view('blog.show', compact('post'));
    }
    public function like($post)
    {
        return "Поставить лайк";
    }
}
