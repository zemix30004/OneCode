<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // return 'Страница списка постов';
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
        ];
        $posts = array_fill(0, 10, $post);
        return view('user.posts.index', compact('posts'));
    }
    public function create()
    {
        // return 'Страница создания поста';
        return view('user.posts.create');
    }
    public function store(Request $request)
    {

        $title = $request->input('title');
        $content = $request->input('content');
        // dd($title, $content);
        session(['alert' => __('Добро пожаловать!')]);
        // alert(__('Сохранено!'));
        return redirect()->route('user.posts.show', 123);
    }
    public function show($post)
    {
        // return "Запрос просмотра поста {$post}";
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
        ];
        return view('user.posts.show', compact('post'));
    }
    public function edit($post)
    {
        // return "Страница изменения поста {$post}";
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum,<strong>Dolar</strong>  sit amet consectetur adipisicing elit. Fugiat, impedit',
        ];
        return view('user.posts.edit', compact('post'));
    }
    public function update(Request $request, $post)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        session(['alert' => __('Добро пожаловать!')]);
        // alert(__('Сохранено!'));
        // dd($title, $content);
        // return redirect()->route('user.posts.show', $post);
        return redirect()->back();
        // return 'Запрос обновления поста';
    }
    public function delete($post)
    {
        return redirect()->route('user.posts');
        // return 'Запрос удаления поста';
    }
    public function like()
    {
        return 'Лайк поста +1';
    }
}
