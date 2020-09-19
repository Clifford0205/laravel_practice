<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaControllerSql extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get(); //依照name排序
        // $pizzas = Pizza::where('type', '夏威夷')->get(); //篩選
        $pizzas = Pizza::latest()->get();

        return view('pizzasSql', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        return view('details2', ['id' => $id]);
    }
}
