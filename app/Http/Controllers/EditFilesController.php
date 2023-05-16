<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditFilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getId($fileid, $studentid)
    {

        $query = DB::select('select * from files f where f.id = ?',[$fileid]);

        var_dump($query);
        $data = compact('query','fileid', 'studentid');

        return view('editfiles')->with($data);

    }

    public function edit(Request $request){

        DB::table('files')
            ->where('id', $request->fileid)  // Replace 'my_table' with your table name and '$id' with the ID of the row you want to update
            ->update([
                'date' => $request->date,  // Replace 'column1' with the name of the column you want to update and 'New Value 1' with the new value
                'points' => $request->points,  // Replace 'column2' with the name of the column you want to update and 'New Value 2' with the new value
                // Add more columns here as needed
            ]);

        return redirect('files');
    }

}
