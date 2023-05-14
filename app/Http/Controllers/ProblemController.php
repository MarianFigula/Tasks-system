<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use \Illuminate\Support\Str;
use PHPUnit\Exception;

class ProblemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getStringInCurlyBraces($string): string
    {
        $start = strpos($string, '{') + 1;
        $length = strpos($string, '}') - $start;
        $substring = substr($string, $start, $length); // "B34A5A"
        return $substring;
    }


    public function regexEquation($string){
        //$pos = strpos( $string, '$');
        $string = preg_replace('/\$/', '\[', $string, 1);
        $string = preg_replace('/\$/', '\]', $string, 1);
        return $string;
    }


    function fetchData(){
        $student_id = session('student_id');
        $file_id = session('file_id');
        $path = session('path');

        $latexLines = $this->getLinesFromFile($path);
        $task_num = $this->getTaskNumber($latexLines);

        $this->updateTaskNumberInDatabase($task_num, $file_id, $student_id);
        $data = $this->parseLatexData($latexLines, $task_num);
        //var_dump($data);

        return view('problem', ['latexLines' => $latexLines, 'equation' => $data[0], 'src' => $data[1], 'correctAnswer' => $data[2]]);
    }

    function updateTaskNumberInDatabase($task_num, $file_id, $student_id)
    {
        //var_dump($task_num);
        DB::update("update student_tasks as st SET st.task_num ='".$task_num."' where st.file_id=".$file_id.' and st.student_id='.$student_id);
    }

    // TODO FIX
    function updateAnswerInDatabase($correctAnswer, $file_id, $student_id)
    {
        //DB::update("update student_task as st SET st.task_num=".$task_num.'where st.file_id='.$file_id.' and st.student_id='.$student_id);
    }

    function getTaskNumber($latexLines): string
    {

        $numberOfProblems = $this->getNumberOfProblems($latexLines);

        $random = rand(1,$numberOfProblems-1);
        $count = 0;
        foreach ($latexLines as $line){
            if(STR::contains($line, "\section*{")){
                if ($count == $random){
                    return self::getStringInCurlyBraces($line);
                }
                $count++;
            }
        }
        return "";
    }

    function getLinesFromFile($path): array
    {
        // TODO: tu bude path
        $filePath = public_path('../priklady/blokovka01pr.tex');

        try {
            $latexContent = File::get($filePath);
            //$latexContent = str_replace('$', '', $latexContent);
            $latexLines = explode("\n", $latexContent);
            return $latexLines;
        }catch (Exception $e){
            return [];
        }

    }

    public function getNumberOfProblems($latexLines): int
    {
        $count = 0;
        foreach ($latexLines as $line){
            if(STR::contains($line, "\section*{")){
                $count++;
            }
        }
        return $count;

    }

    function parseLatexData($latexLines, $task_num){
        $taskFound = false;
        $equation = "";
        $src = "";
        $correctAnswer = "";
        foreach ($latexLines as $line){
            if (Str::contains($line, $task_num)){
                $taskFound = true;
            }
            if ($taskFound){
                if (Str::contains($line, '$')){
                    $equation = $this->regexEquation($line);
                    //var_dump("SOM TU $");
                    continue;
                }
                if (Str::contains($line, "\includegraphics")){

                    $src = $this->getStringInCurlyBraces($line);
                    continue;
                }
                if (Str::contains($line, '\dfrac{')){
                    //$this->updateAnswerInDatabase($line, $file_id,$student_id);
                    $correctAnswer = $this->getStringInCurlyBraces($line);
                    $taskFound = false;
                }
            }
        }
        return [$equation, $src, $correctAnswer];

    }

}
