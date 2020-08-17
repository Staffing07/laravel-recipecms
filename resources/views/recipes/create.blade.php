@extends('layouts.layout')

@section('content')

<div class="container mx-auto">
    <div class="w-full">

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/recipes" method="POST">
            <h1 class="text-2xl">Add a recipe</h1>
            <div class="mb-4">
                <!-- csrf required to allow cross site forgery protection else form will not work -->
                @csrf
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username" for="name">Recipe name</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="name" name="name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="course">Course</label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="course" name="course">
                    <option value="starter">Starter</option>
                    <option value="main">Main</option>
                    <option value="dessert">Dessert</option>
                    <option value="side">Side</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cuisine">Cuisine</label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="cuisine" id="cuisine">
                    <option value="british">British</option>
                    <option value="chinese">Chinese</option>
                    <option value="american">American</option>
                    <option value="indian">Indian</option>
                    <option value="italian">Italian</option>
                    <option value="greek">Greek</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="description" name="description">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="serves">Serves</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="serves" name="serves">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="preptime">Prep time</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="preptime" name="preptime">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cookingtime">Cooking time</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="cookingtime" id="cookingtime" name="cookingtime">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="ingredientMeasure">Amount</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="number" name="ingredientMeasure" step="0.25">
            </div>
<!-- Pulls from DB -->
            <!--<div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="ingredientUnit">Unit</label>
                
                
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="ingredientUnit" id="ingredientUnit">
                    <option value="ml">Ml</option>
                    <option value="cup">Cup</option>
                    <option value="l">Litre</option>
                    <option value="clove">Cloves</option>
                    <option value="tsp">Teaspoon(s)</option>
                    <option value="tbsp">Tablespoon(s)</option>
                </select>
            </div>-->

            <div class="mb-4">
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="measurements[]" id="measurements">
                    @foreach ($measurements as $measurement)
                    <option value="1">{{ $measurement }}</option>

                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <fieldset>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Ingredients</label>
                    <input type="checkbox" name="ingredients[]" value="mushrooms">Mushrooms<br />
                    <input type="checkbox" name="ingredients[]" value="cheese">Cheese<br />
                    <input type="checkbox" name="ingredients[]" value="garlic">Olives<br />
                </fieldset>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="method">Method</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="method" id="method">
            </div>

            <div class="mb-4">
                <input type="submit" value="Add recipe" name="addrecipe">
            </div>
        </form>

    </div>
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
