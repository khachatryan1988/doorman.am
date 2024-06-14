<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GateInstallationController extends Controller
{
    public function index()
    {
        return view('pages.gateInstallation'); // Return the view for the custom page
    }
}
