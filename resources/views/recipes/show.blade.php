@extends('layouts.layout')

@section('content')

<div class="wrapper pizza-details">
    <p>{{ $recipe->course }}</p>
    <h1>Recipe {{ $recipe->name }}</h1>
    <p>{{ $recipe->cuisine }}</p>
    <p class="lead">Description - {{ $recipe -> description}}</p>
    <p>Serves {{ $recipe->serves }}</p>
    <p>Serves {{ $recipe->preptime }}</p>
    <p>Serves {{ $recipe->cookingtime }}</p>
    
    <p>Ingredients {{ $recipe->ingredients }}</p>
    <p>Method {{ $recipe->method }}</p>
</div>
<a href="/recipes" class="back">Back to recipes</a>
@endsection
