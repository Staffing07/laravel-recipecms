<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// tell the controller to use the recipe model that will fetch db data
use App\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        // get data from database
        // pass data as an array into the view
        // Gets all data from database
        // $recipes = Recipe::all();
        // Gets all data and orders by name
        // $recipes = Recipe::orderBy('name')->get();
        // Gets all data order by name in descending order $recipes = Recipe::orderBy('name', 'desc')->get();
        // Gets all data where the cuisine type = italian $recipes = Recipe::where('cuisine', 'italian')->get();
        // Gets all data and shows latest first $recipes = Recipe::latest()->get();
        $recipes = Recipe::latest()->get();

        return view('recipes.index', [
            'recipes' => $recipes,
        ]);
    }

    public function show($id)
    {
        // use the $id variable to query the db for a record
        return view('recipes.show', ['id' => $id]);
    }

    public function create() {
        return view('recipes.create');
    }
}
