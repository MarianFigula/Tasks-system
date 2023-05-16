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
        {{var_dump($resultArray)}}
        <br>
        {{var_dump($resultArray[0])}}
        {{--
        @foreach($resultArray as $item)
            {{'\[' . $item . ']/'}}
        @endforeach }}

    {{-- TODO ULOZIT CISLO DO DB, COUNTER PRE POCET ULOH, RNG, --}}

        <img src="{{asset($src)}}" alt="image" style="margin-left: auto;margin-right: auto;width: 50%;display: block">
    </div>
    <hr>
<form action="" method="post">
    <div class="mb-3" style="width: 40%; margin-right: auto;margin-left: auto">
        <label for="answer-id" class="me-lg-5">Odpoveď<input type="text" id="answer-id" class="form-control" style="width: 120%"></label>
        <button class="btn btn-success justify-content-center" type="submit">Odpovedať</button>
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
