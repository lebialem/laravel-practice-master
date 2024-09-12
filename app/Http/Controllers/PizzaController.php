<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(Request $request)
    {
        $pizzas = Pizza::all();
        return view('pizzas', ['pizzas' => $pizzas]);
    }

    public function show(string $slug)
    {
        $pizza = Pizza::where('slug', $slug)->firstOrFail();
        return view('details', ['pizza' => $pizza]);
    }
}