<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// tell the controller to use the measurement model that will fetch db data
use App\Measurement;

class MeasurementController extends Controller
{
    public function index()
    {
        // get data from database
        // pass data as an array into the view
        // Gets all data from database
        // $measurements = Measurement::all();
        // Gets all data and orders by name
        // $measurements = Measurement::orderBy('name')->get();
        // Gets all data order by name in descending order $measurements = Measurement::orderBy('name', 'desc')->get();
        // Gets all data where the cuisine type = italian $measurements = Measurement::where('cuisine', 'italian')->get();
        // Gets all data and shows latest first $measurements = Measurement::latest()->get();
        $measurements = Measurement::latest()->get();

        return view('measurements.index', [
            'measurements' => $measurements,
        ]);
    }

    public function show($id)
    {
        // use the $id variable to query the db for a record
        // return view('measurements.show', ['id' => $id]);
        $measurement = Measurement::findorfail($id);

        return view('measurements.show', ['measurement' => $measurement]);
    }

    public function create() {
        return view('measurements.create');
    }

    public function store(Request $request) {

            $measurement = new Measurement();

            $measurement->unit = request(('unitname'));
            $measurement->save();
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

        // create record and save to database by using variable to create a new code instance of the measurement model



        // test by logging variable output to terminal
        // error_log($measurement);

        // if above works, log the object instead to the database
        // $measurement->save();


        // return redirect('/')->with('mssg', 'Successfully added measurement');


}
