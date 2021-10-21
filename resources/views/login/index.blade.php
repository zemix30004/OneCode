@extends('layouts.auth')

@section('page.title', 'Страница входа')

@section('auth.content')
<x-card>
    <x-card-header>
        {{-- <div class="card-body"> --}}
            {{-- <h4 class="m-0"> --}}
                <x-card-title>
                {{ __('Вход') }}
                </x-card-title>
            {{-- </h4> --}}
        {{-- </div> --}}
    </x-card-header>
    {{-- <div class="card-body"> --}}
    <x-card-body>
        <x-form action="{{ route(('login.store')) }}" method="POST">
            <x-form-item>
                {{-- <label class="required">{{ __('Email') }}</label> --}}
                <x-label required>{{ __('Email') }}</x-label>
                {{-- <input type="email" name="email" class="form-control" autofocus> --}}
                <x-input type="email" name="email" autofocus/>
            </x-form-item>
            <x-form-item>
                {{-- <label class="required">{{ __('Пароль') }}</label> --}}
                <x-label required>{{ __('Пароль') }}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>
            <x-form-item>
                {{-- <div class="form-check"> --}}
            <x-checkbox name="remember">
                {{-- <input  type="checkbox" name="remember" value="1" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember"> --}}
                {{ __('Запомнить меня') }}
                </label>
            </x-checkbox>
                {{-- </div> --}}
            </x-form-item>
            {{-- <button type="submit" class="btn btn-primary"> --}}
            <x-button type="submit">
                {{ __('Войти') }}
            </x-button>
            {{-- </button> --}}
        </x-form>
    </x-card-body>
    {{-- </div> --}}
{{-- </div> --}}
</x-card>
@endsection

