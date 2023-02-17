<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::orderBy('name')->get();
        
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function create(){        
        return view('pizzas.create');
    }

    public function show($id){

        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function store(){
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->base = request('base');
        $pizza->type = request('type');
        $pizza->price = request('price');

        $pizza->save();
        return redirect('/pizzas')->with('message', 'thank you for the order');
    }
}
