<x-form action="{{ route('user.posts.store') }}" method="POST">

    <x-form-item>
        <x-label required>{{ __('Название поста') }}</x-label>
        <x-input name="title" autofocus />
    </x-form-item>

    <x-form-item>
            <x-label required>{{ __('Содержание поста') }}</x-label>
            <x-trix name="content" rows="10" />
    </x-form-item>

    <x-button type= "submit">
        {{ __('Создать пост') }}
    </x-button>

</x-form>

{{-- @push('css')
        <link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
        <script src="/js/trix.js"></script>
@endpush --}}
