<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    // to cast the array from ingrediens into a JSON array
    protected $casts =[
        'ingredients' => 'array'
    ];

}
