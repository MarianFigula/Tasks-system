<?php

namespace App\Http\Controllers;


use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class StudentDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getId($id)
    {

        $query = DB::select('select st.file_id, st.task_num, st.task_sub, /*st.student_answer,*/ st.task_correct, f.points from student_tasks st JOIN files f ON f.id = st.file_id WHERE st.student_id = ?', [$id]);

        return view('studentdetails')->with('query',$query);

    }

}
