@extends('layouts.layout') @section('content')
<div class="wrapper pizza-work">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
</div>
<a href="/pizzas_sql" class="back"> <-回到所有pizza畫面</a>
@endsection
