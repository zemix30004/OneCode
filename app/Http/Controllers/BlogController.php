<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        // dd($search, $category_id);
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
            'category_id' => '1',
        ];

        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {

            if ($search && !str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if ($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });

        $categories = [
            null => __('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория')
        ];
        // dd($posts);
        // return Route::is('blog') ? 'yes' : 'no'; //1 способ передачи значений posts
        // return view('blog.index', [
        //     'posts' => $posts,
        // ]);
        return view('blog.index', compact('posts', 'categories'));  //2 способ передачи значений posts
    }
    public function show(Request $request, $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
        ];
        // $posts = array_fill(0, 10, $post);
        // return Route::is('blog*') ? 'yes' : 'no';
        return view('blog.show', compact('post'));
    }
    public function like($post)
    {
        return "Поставить лайк";
    }
}
