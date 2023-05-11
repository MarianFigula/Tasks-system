<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $users = DB::select('select * from users', [1]);

        return $users;
        //return view('user.index', ['users' => $users]);
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
</head>
<body>
TUTO ZMENU SPRAVIL MARIAN K.
TUTO ZMENU SPRAVIL ANTRIK.


<p>
    When \(a \ne 0\), there are two solutions to \(ax^2 + bx + c = 0\) and they are
    \[x = {-b \pm \sqrt{b^2-4ac} \over 2a}.\]
</p>

</body>
</html>
