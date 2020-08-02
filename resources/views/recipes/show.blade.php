@extends('layouts.layout')

@section('content')

<div class="wrapper pizza-details">
    <h1>Recipe {{ $recipe->name }}</h1>
    <p class="lead">Description - {{ $recipe -> description}}</p>
    <p>Serves {{ $recipe->serves }}</p>
</div>
<a href="/recipes" class="back">Back to recipes</a>
@endsection
