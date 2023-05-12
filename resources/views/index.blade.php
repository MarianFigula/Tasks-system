<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.css" integrity="sha384-3UiQGuEI4TTMaFmGIZumfRPtfKQ3trwQE2JgosJxCnGmQpL/lJdjpcHkaaFwHlcI" crossorigin="anonymous">

    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.js" integrity="sha384-G0zcxDFp5LWZtDuRMnBkk3EphCK1lhEf4UEyEM693ka574TZGwo4IWwS6QLzM/2t" crossorigin="anonymous"></script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
            onload="renderMathInElement(document.body);"></script>
</head>
<body>
TUTO ZMENU SPRAVIL MARIAN K.
TUTO ZMENU SPRAVIL ANTRIK.

<p>

    \[F(s)=\dfrac{Y(s)}{W(s)}.\]

</p>

{{--$latex_code = file_get_contents('C:\Users\ajoaj\PhpstormProjects\webte2\zaverecneZadanieWebte\zadanie99\blokovka01pr.tex')--}}
<img src="{{asset('zadanie99/images/blokovka02_00004.jpg')}}" alt="image">

<div class="katex">
    {{-- TODO ULOZIT CISLO DO DB, COUNTER PRE POCET ULOH, RNG, --}}

    @foreach ($latexLines as $line)
        {{-- // zobrazenie ideciek - na ulozenie do db podla random number gen//
        @if(\Illuminate\Support\Str::contains($line, "\section*{"))
            {{ $task_num = \App\Http\Controllers\IndexController::getTaskId($line) }}
            <br>
        @endif --}}
        @if(\Illuminate\Support\Str::contains($line, "$"))
            {!! $text =  \App\Http\Controllers\IndexController::displayEquation($line) !!}

            @continue
        @elseif(\Illuminate\Support\Str::contains($line, "\includegraphics"))
            {{-- TODO CESTA IDE V STRINGU ALE NIE VEZ FUNCKIU - VARDUMP UKAZUJE MALO ZNAKOV ALE VYPISE SPRAVNE--}}
            <p>{{ \App\Http\Controllers\IndexController::getStringInCurlyBraces($line) }}</p>
            <img src="{{asset("'". \App\Http\Controllers\IndexController::getStringInCurlyBraces($line))."'"}}" alt="image">
        @endif


        {{-- TODO: TU JE ZAZNAMENANA ODPOVED - ulozit do databazy --}}
        @if(\Illuminate\Support\Str::contains($line, "\dfrac{"))
            {!! '\[' . $line . '\]' !!}
        @endif
        {{--{!! '\[' . $line . '\]' !!} --}}
    @endforeach
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.11/katex.min.js" integrity="sha384-9lsoyz3sJX5k8Ywd+yPitnjqFDfsgawBTWV5O/Vk+T5P/16g0op7bUEj4ikO8yl0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.11/katex.min.css" integrity="sha384-9R0MLYyGQOEF0M0sZFK8M7EedNh1A4A/JseZTQNYXWdWUtmIh7Qc9mJX5WTG+9BZ" crossorigin="anonymous" />
<script>
document.addEventListener("DOMContentLoaded", function() {
renderMathInElement(document.querySelector(".katex"), {
    delimiters: [
        //{left: "$$", right: "$$", display: true},
        //{left: "$", right: "$", display: false},
    ],
    processEscapes: true
});
});
</script>




</body>
</html>
