@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col text-center">
                    @if(!empty($pizza))
                        <h1> Pizza:  {{$pizza->name}}</h1>
                        <p class="strong"> Typ - {{$pizza->type}}</p>
                        <p class="base">Ciasto - {{$pizza->base}}</p>
                        <p class="toppings">Dodatki:</p>
                        <ul class="list-inline">
                            @foreach($pizza->toppings as $topping)
                                <li class="list-inline-item">{{$topping}}</li>
                            @endforeach
                        </ul>
                        <form action="{{route('pizzas.destroy', $pizza->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-2">Usuń pizze</button>
                        </form>

                    @else
                        <p>Brak danych</p>
                    @endif
                </div>
                <a href="{{ url('/pizzas') }}" class="back">Wroc</a>

        </div>
@endsection

