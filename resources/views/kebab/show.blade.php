@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                @if(!empty($kebab))
                    <h1> Kebab:  {{$kebab->name}}</h1>
                    <p class="strong"> Rozmiar - {{$kebab->size}}</p>
                    <p class="base">Ciasto - {{$kebab->cake}}</p>
                    <p class="base">Mięso - {{$kebab->meat}}</p>
                    <p class="base">Sos - {{$kebab->sauce}}</p>

                    <form action="{{route('kebab.destroy', $kebab->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-2">Usuń Kebab</button>
                    </form>

                @else
                    <p>Brak danych</p>
                @endif
            </div>
            <a href="{{ url('/kebab') }}" class="back">Wroc</a>

        </div>
@endsection
