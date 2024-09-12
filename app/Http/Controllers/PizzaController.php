<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PizzaController extends Controller
{
    public function index(Request $request)
    {
        $pizza = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 3],
            ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 3],
            ['type' => 'veg supreme', 'base' => 'thin & crispy', 'price' => 3],
        ];

        return view('pizzas', [
            'pizzas' => $pizza,
            'name' => $request->input('name'),
            'age' => $request->input('age')
        ]);
    }

    public function show(string $slug)
    {
        return view('details');
    }
}