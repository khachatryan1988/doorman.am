<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GateMaintenanceController extends Controller
{
    public function index()
    {
        return view('pages.gateMaintenance'); // Return the view for the custom page
    }
}
