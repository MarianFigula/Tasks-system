<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignTasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function assign($id)
    {
        $query = DB::select('select * from files f');

        $data = compact('id','query');

        return view('assigntasks')->with($data);

    }

    public function insert( Request $request){
        //$data = compact('id','query');

        $student_id = $request->student_id;
        $file_id = $request->file_id;

        $query = DB::table('student_tasks')->insert([
            'student_id' => $student_id,
            'file_id' => $file_id,
        ]);


        return view('assigntasks/'. $student_id);

    }

}
