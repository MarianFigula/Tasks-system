<?php

namespace App\Http\Controllers;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
        return view('about');
    }

}
