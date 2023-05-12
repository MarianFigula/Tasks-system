<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $filePath = public_path('../priklady/blokovka01pr.tex');
        $latexContent = File::get($filePath);
        $latexContent = str_replace('$', '', $latexContent);
        $latexLines = explode("\n", $latexContent);
        return view('index', ['latexLines' => $latexLines]);
    }

}
