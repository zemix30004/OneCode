@extends('layouts.base')

@section('content')
    <section>
        {{-- <div class="container"> --}}
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    {{-- <div class="card-body"> --}}
                    @yield('auth.content')
                </div>
            </div>
        </x-container>
        {{-- </div> --}}
    </section>
@endsection

