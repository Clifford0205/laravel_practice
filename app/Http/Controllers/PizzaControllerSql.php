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

        return view('pizzas_sql.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas_sql.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas_sql.create');
    }
}
