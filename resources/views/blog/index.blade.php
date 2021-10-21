@extends('layouts.base')

@section('page.title', 'Наш блог')

@section('content')


    <h1 class="mb-5">
        Список постов
    </h1>
        {{-- @json($posts)          //Вывод всех постов posts
        @foreach ($posts as $post )
        <div>{{ $post }}</div>

        @endforeach --}}

        @if(empty($posts))
        Нет ни одного поста
        @else
        @foreach ($posts as $post )
        <div class="mb-4">
            <h5>
                <a href="{{ route('blog.show', '$post->id') }}">
                    {{ $post->title }}
                </a>
        </h5>
        <p>
            {{!!$post->content!!}}
        </p>
        </div>
        @endforeach
        @endif


@endsection
