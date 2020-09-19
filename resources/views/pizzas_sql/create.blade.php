@extends('layouts.layout') @section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas_sql" method="POST">
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" />
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="瑪格麗特">瑪格麗特</option>
            <option value="夏威夷">夏威夷</option>
            <option value="蔬菜">蔬菜</option>
            <option value="總匯">總匯</option>
        </select>
        <label for="base">Choose pizza base:</label>
        <select name="base" id="base">
            <option value="生起士">生起士</option>
            <option value="蒜香">蒜香</option>
            <option value="脆皮薄餅">脆皮薄餅</option>
            <option value="厚皮之心">厚皮之心</option>
        </select>
        <input type="submit" value="Order Pizza" />
    </form>
</div>
@endsection
