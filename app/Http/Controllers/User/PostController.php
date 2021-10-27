<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\Post\StorePostRequest;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use League\Config\Exception\ValidationException as ExceptionValidationException;

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
    public function store(StorePostRequest $request)
    {
        // $validated = $request->validated();
        // $validated = validator($request->all(), [                   //1 способ валидации при помощи глобальной функции хелпера
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:10000'],
        // ])->validate();

        // CreatePost::run($request->all());

        // $validated = $request->validate([                    //2 способ если валидация происходит внутри контроллера
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:10000'],
        // ]);
        $validated = validate($request->all(), [                    //способ если валидация происходит внутри контроллера
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

        // if (true) {
        //     throw ValidationException::withMessages([
        //         'account' =>  __('Недостаточно средств.'),
        //     ]);

        //     // return redirect()->back()->withInput()
        //     //     ->with('message', __('Недостаточно средств.'));
        // }


        dd($validated);
        // $title = $request->input('title');
        // $content = $request->input('content');
        // // dd($title, $content);
        // session(['alert' => __('Добро пожаловать!')]);
        alert(__('Сохранено!'));
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
        $validated = validate($request->all(), [                    //способ если валидация происходит внутри контроллера
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

        dd($validated);
        // $title = $request->input('title');
        // $content = $request->input('content');

        // session(['alert' => __('Добро пожаловать!')]);
        alert(__('Сохранено!'));
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
