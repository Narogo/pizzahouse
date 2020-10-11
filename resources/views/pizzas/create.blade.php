@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-12 text-center ">
                <h1>Stwórz własną pizze</h1>
                <form action="{{url('/pizzas')}}" method="POST">
                    @csrf
                    <label for="name">Nazwa Pizzy:</label> <br>
                    <input type="text" id="name" name="name">
                        <br>
                    <label for="type"> Wybierz typ pizzy:</label>
                        <br>
                    <select name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="pepperoni">Pepperoni</option>
                        <option value="zwykla">Zwykła</option>
                        <option value="szynkowa"> Szynkowa</option>
                    </select>
                         <br>
                    <label for="base"> Ciasto </label> <br>
                    <select name="base" id="base">
                        <option value="Grube">Grube</option>
                        <option value="Cienkie">Cienkie</option>

                    </select>
                    <fieldset>
                        <br>
                        <label> Dodatki</label> <br>
                        <input type="checkbox" name="toppings[]" value="pieczarki"> Pieczarki <br>
                        <input type="checkbox" name="toppings[]" value="papryczka chili"> Papryczka chili <br>
                        <input type="checkbox" name="toppings[]" value="cebula"> Cebula <br>
                        <input type="checkbox" name="toppings[]" value="papryka"> Papryka <br>
                        <input type="checkbox" name="toppings[]" value="kurczak"> Kurczak <br>
                    </fieldset>
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

