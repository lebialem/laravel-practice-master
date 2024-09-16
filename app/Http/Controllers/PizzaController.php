<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\PizzaModule;

class PizzaController extends Controller
{
    /**
     * Display a listing of all pizzas.
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $pizzas = Pizza::paginate(10);
        return view('pizzas', ['pizzas' => $pizzas]);
    }

    /**
     * Display the details of a specific pizza.
     *
     * @param  string  $slug
     */
    public function show(string $slug)
    {
        $pizzaModule = PizzaModule::whereHas('pizza', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->with('pizza')->firstOrFail();

        return view('details', ['pizzaModule' => $pizzaModule]);
    }
}