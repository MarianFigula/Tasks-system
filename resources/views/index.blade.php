@extends('layouts.app')

{{--$latex_code = file_get_contents('C:\Users\ajoaj\PhpstormProjects\webte2\zaverecneZadanieWebte\zadanie99\blokovka01pr.tex')--}}
@section('content')
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
            <img src="{{asset(\App\Http\Controllers\IndexController::getStringInCurlyBraces($line))}}" alt="image">
        @endif


        {{-- TODO: TU JE ZAZNAMENANA ODPOVED - ulozit do databazy --}}
        @if(\Illuminate\Support\Str::contains($line, "\dfrac{"))
            {!! '\[' . $line . '\]' !!}
        @endif
        {{--{!! '\[' . $line . '\]' !!} --}}
    @endforeach
</div>

<form action="" method="post">
    <div class="container input-group mb-3">
        <label for="answer-id">Odpoveď<input type="text" id="answer-id" class="form-control"></label>
    </div>
    <div class="container input-group mb-3">
        <button class="btn btn-success" type="submit">Odpovedať</button>
    </div>

</form>
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
@endsection
