@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.css" integrity="sha384-3UiQGuEI4TTMaFmGIZumfRPtfKQ3trwQE2JgosJxCnGmQpL/lJdjpcHkaaFwHlcI" crossorigin="anonymous">

<!-- The loading of KaTeX is deferred to speed up page rendering -->
<script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.js" integrity="sha384-G0zcxDFp5LWZtDuRMnBkk3EphCK1lhEf4UEyEM693ka574TZGwo4IWwS6QLzM/2t" crossorigin="anonymous"></script>

<!-- To automatically render math in text elements, include the auto-render extension: -->
<script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
        onload="renderMathInElement(document.body);"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.js" integrity="sha512-VW8/i4IZkHxdD8OlqNdF7fGn3ba0+lYqag+Uy4cG6BtJ/LIr8t23s/vls70pQ41UasHH0tL57GQfKDApqc9izA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.11/katex.min.js" integrity="sha384-9lsoyz3sJX5k8Ywd+yPitnjqFDfsgawBTWV5O/Vk+T5P/16g0op7bUEj4ikO8yl0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.11/katex.min.css" integrity="sha384-9R0MLYyGQOEF0M0sZFK8M7EedNh1A4A/JseZTQNYXWdWUtmIh7Qc9mJX5WTG+9BZ" crossorigin="anonymous" />
--}}
{{--
<script>
document.addEventListener("DOMContentLoaded", function() {
renderMathInElement(document.querySelector(".katex"), {
    processEscapes: true
});
});
</script>
 --}}
@endsection


<script>

    const rational = math.parse('(12s+4)/(s^3+10s^2+13s+14)')
    console.log(math.simplify(rational, {}, {context: math.simplify.realContext}).toString())

</script>
