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
        $x = DB::select('select u.id, u.name, u.email, SUM(st.task_gen) as GEN, SUM(st.task_sub) as SUB from users u JOIN student_tasks st ON st.student_id = u.id WHERE u.role LIKE ? GROUP BY u.id',['student']);

        $y = DB::select('select st.student_id, SUM(f.points) as POINTS from student_tasks st JOIN files f ON f.id = st.file_id GROUP BY st.student_id ORDER BY st.student_id ASC');


        $data = compact('x','y');

        //return view('studentstats',compact($x,$y));
        return view('studentstats')->with($data);

    }

}
