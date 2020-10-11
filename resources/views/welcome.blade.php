@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Strona Główna</a>
                    @else
                        <a href="{{ route('login') }}">Zaloguj</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Rejstracja</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{ asset('img/pizza.png') }}" alt="pizza house logo">

                <p class="mssg">{{session('mssg')}}</p>
                <a href="{{route('pizzas.create')}}">Stwórz Pizze</a> <br>
                <a href="{{route('pizzas.index')}}">Lista Pizz</a><br>
                <p></p>
                <a href="{{route('kebab.create')}}">Stwórz Kebab</a><br>
                <a href="{{route('kebab.index')}}">Lista Kebab</a><br>

            </div>
        </div>
@endsection
