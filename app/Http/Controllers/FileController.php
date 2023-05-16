<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function displayFiles(){
        $files = Storage::files('../priklady');
        foreach ($files as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            // insert
            echo $fileName . "\n";
        }
    }

    public function getAllFiles(){
        $files = Storage::files('../priklady');
        foreach ($files as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            echo $fileName . "\n";
        }
    }
}
