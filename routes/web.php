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

    //拿到網址的query ex:http://127.0.0.1:8000/pizzas2?name=Clifford&age=18
    $name = request('name');

    return view('pizzas2', [
        'pizzas' => $pizzas,
        'name' => $name,
        //拿到網址的query 第二種寫法
        'age' => request('age'),
    ]);
});

// 在網址加入parameters
Route::get('/pizza-detail/{id}', function ($id) {
    return view('details', ['id' => $id]);
});

// 以下是把邏輯放在controller裡面

Route::get('/pizzas3', 'PizzaController@index');

// 在網址加入parameters
Route::get('/pizzas-detail2/{id}', 'PizzaController@show');


// 連結sql
Route::get('/pizzas_sql', 'PizzaControllerSql@index');

Route::get('/pizzas_sql/create', 'PizzaControllerSql@create');

Route::get('/pizzas_sql/{id}', 'PizzaControllerSql@show');



