<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('pages.consultation'); // Return the view for the custom page
    }

    }
