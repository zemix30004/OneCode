<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand" >
        {{ config('app.name') }}
        </a>
        <button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="#navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" >
                        {{-- <a href="{{ route('home') }}" class="nav-link {{ active_link('home') }}" aria-current="page" > --}}
                    {{ __('Главная') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link {{ Route::is('blog*') ? 'active' : '' }}" aria-current="page" >
                        {{-- <a href="{{ route('blog') }}" class="nav-link {{ active_link('blog') }}" aria-current="page" > --}}
                        {{ __('Блог') }}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link {{ Route::is('register') ? 'active' : '' }}" aria-current="page" >
                        {{-- <a href="{{ route('register') }}" class="nav-link {{ active_link('register') }}" aria-current="page" > --}}
                        {{ __('Регистрация') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ Route::is('login') ? 'active' : '' }}" aria-current="page" >
                                                {{-- <a href="{{ route('login') }}" class="nav-link {{ active_link('login') }}" aria-current="page" > --}}
                        {{ __('Войти') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- <header class="py-3 border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <ul class="list-unstyled d-flex">
                    <li class="md-3">
                    <a href="{{ route('home')}}">Главная</a>
                </li>
            </ul>
            </div>
            <div>
                <ul class="list-unstyled d-flex">
                    <li class="md-3">
                        <a href='{{ route('blog') }}'>Блог</a>
                    </li>
                </ul>
            </div>
                <div>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a href='{{ route('register') }}'>Регистрация</a>
                    </li>
                    <li li class="ms-3">
                        <a href='{{ route('login') }}'>Вход</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}

