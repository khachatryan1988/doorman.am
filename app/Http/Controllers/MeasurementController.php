<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function index()
    {
        return view('pages.measurement'); // Return the view for the custom page
    }
}
