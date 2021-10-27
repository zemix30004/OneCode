@props(['post'=> null])
{{--
{{ session('message') }} --}}

{{-- <x-errors /> --}}

<x-form {{$attributes}} method="POST">
    {{-- <x-post.form action="{{ route('user.posts.store') }}" method="POST"> --}}
        <x-form-item>
            <x-label required>{{ __('Название поста') }}</x-label>
            <x-input name="title" value="{{ $post->title ?? '' }}" autofocus />

                {{-- @if($errors->has('title'))
                <div class="small text-danger pt-1">  //1 способ вывода ошибок валидации
                    {{ $errors->first('title') }}
                </div>
                @endif --}}
            <x-error name="title"/>
                {{-- @error('title')
                    <div class="small text-danger pt-1">//2 способ вывода ошибок валидации
                        {{ $message }}
                    </div>
                @enderror --}}


        </x-form-item>
        <x-form-item>
                <x-label required>{{ __('Содержание поста') }}</x-label>
                {{-- <x-textarea name="content" rows="10"></x-textarea> --}}
            <x-trix name="content" value="{{ $post->content ?? '' }}" />

                <x-error name="content"/>

        </x-form-item>

        {{ $slot }}
        {{-- <x-button type="submit">
            {{ __('Создать пост') }}
        </x-button> --}}
    {{-- </x-post.form> --}}
</x-form>

