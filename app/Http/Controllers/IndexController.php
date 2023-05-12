<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function getStringInCurlyBraces($string): string
    {
        $start = strpos($string, '{') + 1;
        $length = strpos($string, '}') - $start;
        $substring = substr($string, $start, $length); // "B34A5A"
        return $substring;
    }

    /*
    public static function showFrac($string): string
    {
        $string = preg_replace('/(\$.*?\$)/', '[$1]', $string);
        $string = preg_replace('/([a-zA-Z])([\(\)\[\]\-+*\/=])/', '$1 $2', $string);
        $string = preg_replace('/([\(\)\[\]\-+*\/=])([a-zA-Z])/', '$1 $2', $string);

        return $string;
    }*/

    public static function displayEquation($string){
        //$pos = strpos( $string, '$');
        $string = preg_replace('/\$/', '\[', $string, 1);
        $string = preg_replace('/\$/', '\]', $string, 1);
        return $string;
    }



    public function index()
    {
        $filePath = public_path('../priklady/blokovka01pr.tex');
        $latexContent = File::get($filePath);
        //$latexContent = str_replace('$', '', $latexContent);
        $latexLines = explode("\n", $latexContent);
        return view('index', ['latexLines' => $latexLines]);
    }

}
