@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Add a recipe</h1>
    <form action="/recipes" method="POST">
        <label for="name">Recipe name</label>
        <input type="text" id="name" name="name">
        <label for="type">Recipe type</label>
        <select id="type" name="recipetype">
            <option value="starter">Starter</option>
            <option value="main">Main</option>
            <option value="dessert">Dessert</option>
            <option value="side">Side</option>
        </select>
        <label for="cuisine">Cuisine</label>
        <select name="cuisine" id="cuisine">
            <option value="british">British</option>
            <option value="chinese">Chinese</option>
            <option value="american">American</option>
            <option value="indian">Indian</option>
            <option value="italian">Italian</option>
            <option value="greek">Greek</option>
        </select>
        <label for="description">Description</label>
        <input type="text" id="description" name="description">
        <label for="serves">Serves</label>
        <input type="text" id="serves" name="name">
        <label for="preptime">Prep time</label>
        <input type="text" id="preptime" name="preptime">
        <label for="cookingtime">Cooking time</label>
        <input type="cookingtime" id="cookingtime" name="cookingtime">
        <label for="ingredients">Ingredients</label>
        <input type="text" id="ingredients" name="ingredients">
        <label for="method">Method</label>
        <input type="text" name="method" id="method">
        <input type="submit" value="Add recipe">
    </form>
</div>
@endsection