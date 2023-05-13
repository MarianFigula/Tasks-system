<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use \Illuminate\Support\Str;
use \App\Http\Controllers\DB;
class ProblemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    private $task_num = '';

    public static function getStringInCurlyBraces($string): string
    {
        $start = strpos($string, '{') + 1;
        $length = strpos($string, '}') - $start;
        $this->$task_num = substr($string, $start, $length); // "B34A5A"
        return task_num;
    }

    /*
    public static function showFrac($string): string
    {
        $string = preg_replace('/(\$.*?\$)/', '[$1]', $string);
        $string = preg_replace('/([a-zA-Z])([\(\)\[\]\-+*\/=])/', '$1 $2', $string);
        $string = preg_replace('/([\(\)\[\]\-+*\/=])([a-zA-Z])/', '$1 $2', $string);

        return $string;
    }*/

    public static function displayEquation($string){
        //$pos = strpos( $string, '$');
        $string = preg_replace('/\$/', '\[', $string, 1);
        $string = preg_replace('/\$/', '\]', $string, 1);
        return $this->$string;
    }



    public static function getFilePath($student_id, $file_id, $path)
    {
        $filePath = public_path('../priklady/blokovka01pr.tex');
        $latexContent = File::get($filePath);
        //$latexContent = str_replace('$', '', $latexContent);
        $latexLines = explode("\n", $latexContent);

        $count = 0;
        foreach ($latexLines as $line){
            if(STR::contains($line, "\section*{")){
                $count++;
            }
        }

        $random = rand(1,$count);
        $count = 0;
        foreach ($latexLines as $line){
            if(STR::contains($line, "\section*{")){
                if ($count == $random){
                    $this->getStringInCurlyBraces($line);
                    DB::update("update student_task as st SET st.task_num=".$task_num.'where st.file_id='.$file_id.' and st.student_id='.$student_id);
                    break;
                }
                $count++;
            }

        }


        return view('problem', ['latexLines' => $latexLines, 'student_id' => $student_id, "file_id" => $file_id, 'task_num' => $task_num]);
    }

}
