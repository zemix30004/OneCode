<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница списка постов';
    }
    public function create()
    {
        return 'Страница создания поста';
    }
    public function store()
    {
        return 'Запрос создания поста';
    }
    public function show($post)
    {
        return "Запрос просмотра поста {$post}";
    }
    public function edit($post)
    {
        return "Страница изменения поста {$post}";
    }
    public function update()
    {
        return 'Запрос обновления поста';
    }
    public function delete()
    {
        return 'Запрос удаления поста';
    }
    public function like()
    {
        return 'Лайк поста +1';
    }
}
