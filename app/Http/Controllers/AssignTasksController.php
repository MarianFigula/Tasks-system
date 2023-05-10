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


        //$query = DB::insert('insert into student_tasks st values ()');

        //$data = compact('id','query');

        var_dump(dd($request->all()));

        return view('index');

    }

}
