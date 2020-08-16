@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Add measurement</h1>
        <form action="/recipes" method="POST">
            <!-- csrf required to allow cross site forgery protection else form will not work -->
            @csrf
           <!-- Not sure I need to capture this - can just deal with seeting amount increments in the view -->
            <!--<label for="measure">Measurement amount</label>
            <input type="number" id="measure" name="measure">-->


            <label for="unitname">Unit name</label>
            <input type="text" id="unitname" name="unitname">


            <input type="submit" value="Add measurement" name="addmeasure">
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
