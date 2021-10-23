@extends('layouts.main')

@section('page.title', 'Наш блог')

@section('main.content')

        <x-title>
            {{ __('Список постов') }}
        </x-title>

        {{-- @json($posts)          //Вывод всех постов posts
        @foreach ($posts as $post )
        <div>{{ $post }}</div>

        @endforeach --}}

    @include('blog.filter')

        @if(empty($posts))
        {{ __('Нет ни одного поста.') }}
        @else
            <div class="row">
                @foreach ($posts as $post )
                    <div class="col-12 col-md-4">
                        {{-- <div class="mb-4"> --}}
                            <x-post.card :post="$post" />
                        {{-- </div> --}}
                    </div>
                @endforeach
            </div>
        @endif
@endsection

