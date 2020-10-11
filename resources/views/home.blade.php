@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Jesteś zalogowany') }}
                    <p><a href="{{url('/pizzas')}}"> Menu Pizza</a></p>
                    <p><a href="{{url('/kebab')}}">Menu Kebab</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
