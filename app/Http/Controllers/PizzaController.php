<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => '夏威夷', 'base' => '起士', 'price' => 7],
            ['type' => '綜合海鮮', 'base' => '大蒜', 'price' => 7],
            ['type' => '蔬菜水果', 'base' => '脆皮', 'price' => 7],
        ];
        return view('pizzas3', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        return view('details2', ['id' => $id]);
    }
}
