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
        $x = DB::select('select u.id, u.name, u.email, SUM(st.task_gen) as GEN, SUM(st.task_sub) as SUB, SUM(f.points) as POINTS from users u JOIN student_tasks st ON st.student_id = u.id JOIN files f ON f.id = st.file_id WHERE u.role LIKE ? GROUP BY u.id,f.id',['student']);

        var_dump($x);
        return view('studentstats')->with('x',$x);
    }

}
