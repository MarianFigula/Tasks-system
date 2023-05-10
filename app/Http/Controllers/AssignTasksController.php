<?php

namespace App\Http\Controllers;


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

}
