<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {

        //$pizzas = Pizza::all();

        $pizzas = Pizza::latest()->get();

       // var_dump($pizzas);

       return view('pizzas.index',['pizzas' => $pizzas]);
    }
    public function create()
    {
        return view('/pizzas.create');
    }


    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        //var_dump($pizza);
        return view('pizzas.show', ['pizza'=> $pizza]);
    }

    public function store(Request $request)
    {
        $pizza = new Pizza();

        $validateData = $request->validate([
           'name' =>'min:3',
            'checkbox' =>'accepted'
        ]);
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price',20);
        $pizza->toppings = request('toppings');

        $pizza->save();
        //return request('toppings');
        return redirect('/')->with('mssg', 'dziala');
    }

    public function destroy($id)
    {
        //error_log($id);
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        //return request('toppings');
        return redirect('/pizzas');
    }
}


