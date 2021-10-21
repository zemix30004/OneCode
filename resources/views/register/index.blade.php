@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
<x-card>
    <x-card-header>
        {{-- <div class="card-body"> --}}
            {{-- <h4 class="m-0"> --}}
                <x-card-title>
                {{ __('Регистрация') }}
                </x-card-title>
                <x-slot name="right">
                    <a href="{{ route('login') }}">
                        {{ __('Вход') }}
                    </a>
                </x-slot>
            {{-- </h4> --}}
        {{-- </div> --}}
    </x-card-header>
    {{-- <div class="card-body"> --}}
    <x-card-body>
        <x-form action="{{ route(('register.store')) }}" method="POST">
            {{-- {{ csrf_field() }} --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <x-form-item>
                {{-- <label class="required">{{ __('Email') }}</label> --}}
                <x-label required>{{ __('Имя') }}</x-label>
                {{-- <input type="email" name="email" class="form-control" autofocus> --}}
                <x-input name="name" autofocus/>
            </x-form-item>
            <x-form-item>
                {{-- <label class="required">{{ __('Email') }}</label> --}}
                <x-label required>{{ __('Email') }}</x-label>
                {{-- <input type="email" name="email" class="form-control" autofocus> --}}
                <x-input type="email" name="email"/>
            </x-form-item>
            <x-form-item>
                {{-- <label class="required">{{ __('Пароль') }}</label> --}}
                <x-label required>{{ __('Пароль') }}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>
                <x-form-item>
                    {{-- <label class="required">{{ __('Пароль') }}</label> --}}
                    <x-label required>{{ __('Пароль еще раз') }}</x-label>
                    <x-input type="password" name="password_confirmation" />
                </x-form-item>
                <x-form-item>
                {{-- <div class="form-check"> --}}
            <x-checkbox name="remember">
                {{ __('Я согласен на обработку пользовательских данных') }}
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


