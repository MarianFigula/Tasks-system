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
        $filesquery = DB::select('select f.id,f.path,f.date,f.points from files f');
        $studentquery = DB::select('select * from users u where u.id='.$id);

        $studentfilesquery = DB::select('select f.id,f.path,f.date,f.points from student_tasks st join files f on f.id = st.file_id where st.student_id='.$id);

        $data = compact('id','filesquery','studentquery','studentfilesquery');

        return view('assigntasks')->with($data);
        //return url('/assigntasks/' . $id);

    }

    public function insert( Request $request){

        $student_id = $request->student_id;
        $file_id = $request->file_id;

        $query = DB::select('select * from student_tasks st where st.student_id='.$student_id. ' and st.file_id='.$file_id);
        if(!$query) {
            DB::table('student_tasks')->insert([
                'student_id' => $student_id,
                'file_id' => $file_id,
            ]);
        }else{
            //TODO toast? info ze student uz ulohu ma
        }

        return $this->assign($student_id);

    }

}
