@extends('layouts.layout')

@section('content')




<form class="w-full mx-auto max-w-xl py-24" action="/recipes" method="POST">
    <div class="flex flex-wrap -mx-3 mb-6">


        <div class="w-full px-3">
            <h1 class="text-2xl font-extrabold">Add a recipe</h1>
            <!-- csrf required to allow cross site forgery protection else form will not work -->
            @csrf
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" for="name">Recipe name</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" id="name" name="name">
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
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


        <div class="w-full md:w-1/2 px-3">
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
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" name="description" rows="10" cols="70"></textarea>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="serves">Serves</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" id="serves" name="serves">
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="preptime">Prep time</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" id="preptime" name="preptime">
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="cookingtime">Cooking time</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="cookingtime" id="cookingtime" name="cookingtime">
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Ingredients</label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="ingredients" name="ingredients" rows="10" cols="70"></textarea>
        </div>
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
    <!--
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
    </div>-->

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Method</label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="method" name="method" rows="10" cols="70"></textarea>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <input class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                value="Add recipe" name="addrecipe">
        </div>
    </div>
</form>



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
