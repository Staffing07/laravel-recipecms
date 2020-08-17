@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Add a recipe</h1>
    <form action="/recipes" method="POST">
        <!-- csrf required to allow cross site forgery protection else form will not work -->
        @csrf
        <label for="name">Recipe name</label>
        <input type="text" id="name" name="name">
        <label for="course">Course</label>
        <select id="course" name="course">
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
        <input type="text" id="serves" name="serves">
        <label for="preptime">Prep time</label>
        <input type="text" id="preptime" name="preptime">
        <label for="cookingtime">Cooking time</label>
        <input type="cookingtime" id="cookingtime" name="cookingtime">


        <label for="ingredientMeasure">Amount</label>
        <input type="number" name="ingredientMeasure" step="0.25">
        <label for="ingredientUnit">Unit</label>
        <!-- TO DO -->
        <!-- Pull this value from the measurements table -->
        <select name="ingredientUnit" id="ingredientUnit">
            <option value="ml">Ml</option>
            <option value="cup">Cup</option>
            <option value="l">Litre</option>
            <option value="clove">Cloves</option>
            <option value="tsp">Teaspoon(s)</option>
            <option value="tbsp">Tablespoon(s)</option>
        </select>

        <fieldset>
            <label>Ingredients</label>
            <input type="checkbox" name="ingredients[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="ingredients[]" value="cheese">Cheese<br />
            <input type="checkbox" name="ingredients[]" value="garlic">Olives<br />
        </fieldset>

        <label for="method">Method</label>
        <input type="text" name="method" id="method">
        <input type="submit" value="Add recipe" name="addrecipe">
    </form>
</div>
@endsection


<!-- TODO -->
<!-- How to deal with ingredients -->
<!-- This field really needs to be free text which uses predictive text to search and find the ingredient as you type it -->
<!-- Could also add a add new ingredient option to the form if nothing found -->
<!-- Does this mean you would add the list of ingredients to a different table? -->
<!-- Research this!!! -->


<!-- Ingredients -->
<!-- 1 cup water -->
<!-- 2 cloves garlic -->
<!-- 100 ml soya sauce -->
<!-- Number, Unit, ingredientName-->
<!-- Integer -->
