@props(['post'=> null])

<x-form {{$attributes}} method="PUT">
    {{-- <x-post.form action="{{ route('user.posts.store') }}" method="POST"> --}}
        <x-form-item>
            <x-label required>{{ __('Название поста') }}</x-label>
            <x-input name="title"  value="{{ $post->title ?? '' }}" autofocus />
        </x-form-item>
        <x-form-item>
                <x-label required>{{ __('Содержание поста') }}</x-label>
                {{-- <x-textarea name="content" rows="10"></x-textarea> --}}
            <x-trix name="content" value="{{ $post->content ?? '' }}" />
        </x-form-item>

        {{ $slot }}
        {{-- <x-button type="submit">
            {{ __('Создать пост') }}
        </x-button> --}}
    {{-- </x-post.form> --}}
</x-form>

