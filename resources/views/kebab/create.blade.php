@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-12 text-center ">
                <h1>Stwórz Kebab</h1>

                <form action="{{url('/kebab')}}" method="POST">
                    @csrf
                    <label for="name">Nazwa Kebab:</label> <br>
                    <input type="text" id="name" name="name">
                    <br>
                    <label for="type"> Wybierz rozmiar kebab:</label>
                    <br>

                    <select name="size" id="size">
                        <option value="Mały">Mały</option>
                        <option value="Średni">Średni</option>
                        <option value="Duży">Duży</option>
                    </select>
                    <br>

                    <label for="cake"> Ciasto </label> <br>
                    <select name="cake" id="cake">
                        <option value="Arabskie">Arabskie</option>
                        <option value="Chleb">Chleb</option>
                    </select>
                    <br>
                    <label for="meat"> Mięso</label> <br>
                    <select name="meat" id="meat">
                        <option value="Kurczak">Kurczak</option>
                        <option value="Wołowina">Wołowina</option>
                        <option value="Mieszane">Mieszane</option>

                    </select>
                    <br>
                    <label for="sauce"> Sosy</label> <br>
                    <select name="sauce" id="sauce">
                        <option value="Lagodny">Lagodny</option>
                        <option value="Ostry">Ostry</option>
                        <option value="Mieszany">Mieszany</option>

                    </select>
                    <br>
                    <br>
                    <input type="submit" class="btn-danger" value="Dodaj">
                </form>
                @error('name')
                <div class="test">{{ $message }}</div>
                @enderror

            </div>
        </div>
    </div>

@endsection
