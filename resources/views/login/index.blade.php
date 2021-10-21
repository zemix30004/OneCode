@extends('layouts.base')

@section('page.title', 'Страница входа')

@section('content')
    <section>
        {{-- <div class="container"> --}}
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    {{-- <div class="card-body"> --}}
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
                                <form action="" class="">
                                    <div class="mb-3">
                                    <label class="required">{{ __('Email') }}</label>
                                    <input type="email" name="email" class="form-control" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label class="required">{{ __('Пароль') }}</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input  type="checkbox" name="remember" value="1" class="form-check-input" id="remember">
                                            <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Войти') }}
                                    </button>
                            </form>
                            </x-card-body>
                            {{-- </div> --}}
                        {{-- </div> --}}
                        </x-card>
                </div>
            </div>
        </x-container>
        {{-- </div> --}}
    </section>
@endsection

