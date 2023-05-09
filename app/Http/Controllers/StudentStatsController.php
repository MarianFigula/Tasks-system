<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class StudentStatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dd = ['student'];
        $x = DB::select('select * from users WHERE users.role LIKE ?',['student']);

        #DDPC
        var_dump($x);
        return view('studentstats')->with('x',$x);
    }

}
