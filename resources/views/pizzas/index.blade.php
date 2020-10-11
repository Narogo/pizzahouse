@extends('layouts.app')

@section('content')

<div class="flex-center">
    <div class="content">
        <header class="title m-b-md">
            Menu Pizza
        </header>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-group">
                        @if(!empty($pizza))
                            <p>Brak danych</p>
                        @else
                            @foreach($pizzas as $pizza)
                                    <a href="{{url('/pizzas',$pizza->id)}}" class="list-group-item font-weight-bold list-group-item-dark">{{$pizza->name}}</a>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
