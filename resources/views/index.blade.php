<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
</head>
<body>
TUTO ZMENU SPRAVIL MARIAN K.
TUTO ZMENU SPRAVIL ANTRIK.


<p>
    When \(a \ne 0\), there are two solutions to \(ax^2 + bx + c = 0\) and they are
    \[x = {-b \pm \sqrt{b^2-4ac} \over 2a}.\]
</p>

{{$latex_code = file_get_contents('C:\Users\ajoaj\PhpstormProjects\webte2\zaverecneZadanieWebte\priklady\blokovka01pr.tex')}}

<script>
    var element = document.getElementById("math");
    //element.innerHTML = "\\[" + {{$latex_code}} + "\\]";
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, element]);
</script>


<div id="math"></div>

</body>
</html>
