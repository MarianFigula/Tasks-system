<?php

namespace App\Http\Controllers;

use DirectoryIterator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function displayFiles(){
        $dir_path = public_path() . '/priklady';
        $dir = new DirectoryIterator($dir_path);
        foreach ($dir as $file) {
            if ($file->isFile()) {
                $fileName = $file->getFilename();
                $query = DB::select("select * from files f where f.path LIKE $fileName");
                if (!$query){
                    // insert
                    DB::insert("insert into files f ");
                }
            }
        }
        $query = DB::select("select * from files f");
        return view('files')->with($query);
    }
}
