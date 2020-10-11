<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kebab;

class KebabController extends Controller
{
    public function index()
    {

        //$kebab = Kebab::latest()->get();
        $kebabs = Kebab::all();

        //var_dump($kebabs);

        return view('kebab.index',['kebab' => $kebabs]);
    }

    public function create()
    {
        return view('/kebab.create');
    }


    public function show($id)
    {
        $kebab = Kebab::findOrFail($id);
        //var_dump($kebab);
        return view('kebab.show', ['kebab'=> $kebab]);
    }

    public function store(Request $request)
    {
        $kebab = new Kebab();

        $validateData = $request->validate([
            'name' =>'min:3'
        ]);
        $kebab->name = request('name');
        $kebab->size = request('size');
        $kebab->cake = request('cake');
        $kebab->meat = request('meat');
        $kebab->sauce = request('sauce');


        $kebab->save();

        return redirect('/')->with('mssg', 'dzialaK');
        //var_dump($kebab);
    }

    public function destroy($id)
    {
        //error_log($id);
        $kebab = Kebab::findOrFail($id);
        $kebab->delete();

        return redirect('/kebab');
    }
}
