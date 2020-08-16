<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// tell the controller to use the recipe model that will fetch db data
use App\Recipe;
use App\Measurement;

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
        // return view('recipes.show', ['id' => $id]);
        $recipe = Recipe::findorfail($id);

        return view('recipes.show', ['recipe' => $recipe]);
    }

    public function create() {
        return view('recipes.create');
    }

    public function store(Request $request) {

        if ($request->has('addrecipe')) {
            // return 'form1 was submitted';
            $recipe = new Recipe();

            $recipe->name = request('name');
            $recipe->course = request('course');
            $recipe->cuisine = request('cuisine');
            $recipe->description = request('description');
            $recipe->serves = request('serves');
            $recipe->preptime = request('preptime');
            $recipe->cookingtime = request('cookingtime');
            $recipe->ingredients = request('ingredients');
            $recipe->method = request('method');

            $recipe->save();
            return redirect('/')->with('mssg', 'Successfully added recipe');
        }

        if ($request->has('addmeasure')) {
            // return 'form2 was submitted';

            $Measurement = new Measurement();

            $Measurement->unit = request(('unitname'));
            $Measurement->save();
            return redirect('/')->with('mssg', 'Successfully added measurement');
        }



        // Check form is working by sending output to terminal in vs code
        // error_log(request('name'));
        // error_log(request('course'));
        // error_log(request('cuisine'));
        // error_log(request('description'));
        // error_log(request('serves'));
        // error_log(request('preptime'));
        // error_log(request('cookingtime'));
        // error_log(request('ingredients'));
        // error_log(request('method'));

        // create record and save to database by using variable to create a new code instance of the recipe model



        // test by logging variable output to terminal
        // error_log($recipe);

        // if above works, log the object instead to the database
        // $recipe->save();


        // return redirect('/')->with('mssg', 'Successfully added recipe');
    }

    public function addmeasurement() {
        return view('recipes.addmeasurement');
    }

    public function storemeasurement() {
        // Check form is working by sending output to terminal in vs code
        // error_log(request('name'));
        // error_log(request('course'));
        // error_log(request('cuisine'));
        // error_log(request('description'));
        // error_log(request('serves'));
        // error_log(request('preptime'));
        // error_log(request('cookingtime'));
        // error_log(request('ingredients'));
        // error_log(request('method'));

    }
}
