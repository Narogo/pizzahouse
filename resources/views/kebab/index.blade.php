@extends('layouts.app')

@section('content')

    <div class="flex-center">
        <div class="content">
            <header class="title m-b-md">
                Kebab
            </header>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-group">
                            @if(empty($kebab))
                                <p>Brak danych</p>
                            @else
                                @foreach($kebab as $kebab)
                                    <a href="{{url('/kebab',$kebab->id)}}" class="list-group-item font-weight-bold list-group-item-dark">{{$kebab->name}}</a>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
