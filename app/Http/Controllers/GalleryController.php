<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.ourWorks'); // Return the view for the custom page
    }
}
