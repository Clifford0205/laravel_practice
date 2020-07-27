<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    // get data from db
    $pizza = ['type' => '夏威夷', 'base' => '起士', 'price' => 7];
    return view('pizzas', $pizza);
    // return 'pizzas!';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
});

Route::get('/pizzas2', function () {
    // get data from db
    $pizzas = [
        ['type' => '夏威夷', 'base' => '起士', 'price' => 7],
        ['type' => '綜合海鮮', 'base' => '大蒜', 'price' => 7],
        ['type' => '蔬菜水果', 'base' => '脆皮', 'price' => 7],
    ];
    return view('pizzas2', ['pizzas' => $pizzas]);
});
