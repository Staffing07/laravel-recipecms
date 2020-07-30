<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        // get data from database
        // pass data as an array into the view
        $pizzas = [
            'type' => 'hawaiian',
            'base' => 'deep pan',
            'cuisine' => 'Italian'
        ];

        return view('recipes', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        // use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
