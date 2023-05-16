<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.css"
          integrity="sha384-3UiQGuEI4TTMaFmGIZumfRPtfKQ3trwQE2JgosJxCnGmQpL/lJdjpcHkaaFwHlcI" crossorigin="anonymous">

    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.js"
            integrity="sha384-G0zcxDFp5LWZtDuRMnBkk3EphCK1lhEf4UEyEM693ka574TZGwo4IWwS6QLzM/2t"
            crossorigin="anonymous"></script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/contrib/auto-render.min.js"
            integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
            onload="renderMathInElement(document.body);"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.js"
            integrity="sha512-VW8/i4IZkHxdD8OlqNdF7fGn3ba0+lYqag+Uy4cG6BtJ/LIr8t23s/vls70pQ41UasHH0tL57GQfKDApqc9izA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--$latex_code = file_get_contents('C:\Users\ajoaj\PhpstormProjects\webte2\zaverecneZadanieWebte\zadanie99\blokovka01pr.tex')--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.min.js"
            integrity="sha512-DmQnZdEjFh4R/040JxDSg3j9cS8D0oC5u2noG9Az18F11leiDFwrTOkm9PP+jdBMiH66QBa73O+54kZr5FyU7w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.js"
            integrity="sha512-VW8/i4IZkHxdD8OlqNdF7fGn3ba0+lYqag+Uy4cG6BtJ/LIr8t23s/vls70pQ41UasHH0tL57GQfKDApqc9izA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"/>

    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.2/b-2.0.1/b-html5-2.0.1/datatables.min.css"/>
    <script type="text/javascript"
            src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.2/b-2.0.1/b-html5-2.0.1/datatables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.min.js"
            integrity="sha512-DmQnZdEjFh4R/040JxDSg3j9cS8D0oC5u2noG9Az18F11leiDFwrTOkm9PP+jdBMiH66QBa73O+54kZr5FyU7w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.js"
            integrity="sha512-VW8/i4IZkHxdD8OlqNdF7fGn3ba0+lYqag+Uy4cG6BtJ/LIr8t23s/vls70pQ41UasHH0tL57GQfKDApqc9izA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('equation-editor-master/src/lib/jquery-2.0.0.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/lib/underscore-1.6.0.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/lib/mousetrap-1.4.6.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/lib/spin.min.js')}}"></script>
    <script src="{{asset('http://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/property.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/init.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/fontMetrics.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/equationComponent.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/boundEquationComponent.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/dom/equationDom.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/containers/container.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/dom/containerDom.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/wrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/dom/wrapperDom.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/symbol.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/symbolWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/operatorWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/emptyContainerWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/topLevelEmptyContainerWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/topLevelEmptyContainerMessage.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/squareEmptyContainerWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/squareEmptyContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/squareEmptyContainerFillerWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/stackedFractionWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/stackedFractionNumeratorContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/stackedFractionDenominatorContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/stackedFractionHorizontalBar.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/superscriptWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/superscriptContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/subscriptWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/subscriptContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/superscriptAndSubscriptWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/squareRootWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/squareRootOverBar.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/squareRootRadical.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/squareRootDiagonal.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/squareRootRadicandContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/nthRootWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/nthRootOverBar.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/nthRootRadical.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/nthRootDiagonal.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/nthRootRadicandContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/nthRootDegreeContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/bracketWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/wholeBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/topBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/middleBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftParenthesisBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightParenthesisBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftParenthesisWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftParenthesisTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftParenthesisMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftParenthesisBottomBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightParenthesisWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightParenthesisTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightParenthesisMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightParenthesisBottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftSquareBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftSquareWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftSquareTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftSquareMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftSquareBottomBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightSquareBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightSquareWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightSquareTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightSquareMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightSquareBottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCurlyBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCurlyWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCurlyTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCurlyMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCurlyBottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCurlyBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCurlyWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCurlyTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCurlyMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCurlyBottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftAngleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftAngleWholeBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightAngleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightAngleWholeBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftFloorBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftFloorWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftFloorMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftFloorBottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightFloorBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightFloorWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightFloorMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightFloorBottomBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCeilBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCeilWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCeilTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftCeilMiddleBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCeilBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCeilWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCeilTopBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightCeilMiddleBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftAbsValBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightAbsValBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftAbsValWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftAbsValMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightAbsValWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightAbsValMiddleBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftNormBracket.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightNormBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftNormWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/leftNormMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightNormWholeBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/rightNormMiddleBracket.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/bracketPairWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/bracketContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/bigOperatorWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/bigOperatorUpperLimitContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/bigOperatorLowerLimitContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/bigOperatorOperandContainer.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/sumBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigCapBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigCupBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigSqCapBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigSqCupBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigSqCupBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/prodBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/coProdBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigVeeBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/bigWedgeBigOperatorSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/integralWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/integralSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/doubleIntegralSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/tripleIntegralSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/contourIntegralSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/contourDoubleIntegralSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/misc/contourTripleIntegralSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/integralUpperLimitContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/integralLowerLimitContainer.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/word.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/functionWord.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/functionWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/functionLowerWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/functionLowerWord.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/functionLowerContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/logLowerWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/logLowerWord.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/logLowerContainer.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/limitWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/limitLeftContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/limitRightContainer.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/limitWord.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/limitSymbol.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/matrixWrapper.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/matrixContainer.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/wrappers/accentWrapper.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equation-components/misc/accentSymbol.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/accentContainer.js')}}"></script>
    <script
        src="{{asset('equation-editor-master/src/app/js/equation-components/containers/topLevelContainer.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/blinkingCursor.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/mouseInteraction.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/addWrapperUtil.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/keyboardInteraction.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/menuInteraction.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/equationEditor.js')}}"></script>
    <script src="{{asset('equation-editor-master/src/app/js/latexGenerator.js')}}"></script>
    <link href="{{asset('equation-editor-master/src/Fonts/TeX/font.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('equation-editor-master/src/app/css/equationEditor.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.css"
          integrity="sha384-3UiQGuEI4TTMaFmGIZumfRPtfKQ3trwQE2JgosJxCnGmQpL/lJdjpcHkaaFwHlcI" crossorigin="anonymous">

    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/katex.min.js"
            integrity="sha384-G0zcxDFp5LWZtDuRMnBkk3EphCK1lhEf4UEyEM693ka574TZGwo4IWwS6QLzM/2t"
            crossorigin="anonymous"></script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.7/dist/contrib/auto-render.min.js"
            integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
            onload="renderMathInElement(document.body);"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.8.0/math.js"
            integrity="sha512-VW8/i4IZkHxdD8OlqNdF7fGn3ba0+lYqag+Uy4cG6BtJ/LIr8t23s/vls70pQ41UasHH0tL57GQfKDApqc9izA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            @if(auth()->user() != null && auth()->user()->role == 'student')
                <a class="navbar-brand" href="{{ url('/studentTutorial') }}">
                    Návod na používanie
                </a>
            @endif
            @if(auth()->user() != null && auth()->user()->role == 'teacher')
                <a class="navbar-brand" href="{{ url('/teacherTutorial') }}">
                    Návod na používanie
                </a>
            @endif
            <a class="navbar-brand" href="{{ url('/studentstats') }}">Domov</a>
            @if(auth()->user() != null && auth()->user()->role == 'teacher')
                <a class="navbar-brand" href="{{ url('/files') }}">
                    Súbory
                </a>
            @endif

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>

<div class="katex">
    {{-- TODO ULOZIT CISLO DO DB, COUNTER PRE POCET ULOH, RNG, --}}
    <h5 class="text-center">{{$task}}</h5>
    @if(strlen($src) != 0)
        <img src="{{asset($src)}}" alt="image"
             style="margin-left: auto;margin-right: auto;width: 50%;display: block">
    @endif
</div>
<hr>
<form action="{{url('problem')}}" method="post">


</form>


<button id="toJSON">To JSON</button>

<br/><br/>
<input id="hiddenFocusInput" style="width: 0; height: 0; opacity: 0; position: absolute; top: 0; left: 0;" type="text"
       autocapitalize="off"/>
<div id="loadingMessageOuter" style="width: 234px; height: 64px;">
    <div id="loadingMessage" class="fontSizeSmaller" style="width: 234px; height: 64px; position: fixed;"></div>
</div>
<div class="equation-editor"></div>
<div class="tabs">
    <ul class="outer-tab-links tab-links">
        <li class="outerTab active"><a href="#common">Common</a></li>
        <li class="outerTab"><a href="#brackets">Brackets</a></li>
        <li class="outerTab"><a href="#symbols">Symbols</a></li>
        <li class="outerTab"><a href="#functions">Functions</a></li>
    </ul>

    <div class="tab-content" id="tab-content-top">
        <div id="common" class="tab outer active">
            <img class="menuItem" id="stackedFractionButton"
                 src="{{asset('equation-editor-master/src/MenuImages/png/stackedFraction.png')}}">
            <img class="menuItem" id="superscriptButton"
                 src="{{asset('equation-editor-master/src/MenuImages/png/superscript.png')}}">
            <img class="menuItem" id="subscriptButton"
                 src="{{asset('equation-editor-master/src/MenuImages/png/subscript.png')}}">
            <img class="menuItem" id="superscriptAndSubscriptButton"
                 src="{{asset('equation-editor-master/src/MenuImages/png/superscriptAndSubscript.png')}}">
            <img class="menuItem" id="squareRootButton"
                 src="{{asset('equation-editor-master/src/MenuImages/png/squareRoot.png')}}">
            <img class="menuItem" id="nthRootButton" height="60"
                 src="{{asset('equation-editor-master/src/MenuImages/png/nthRoot.png')}}">
            <img class="menuItem" id="limitButton"
                 src="{{asset('equation-editor-master/src/MenuImages/png/limit.png')}}">
            <img class="menuItem" id="logLowerButton" height="55"
                 src="{{asset('equation-editor-master/src/MenuImages/png/log_n.png')}}">
            <span class="menuItem MathJax_Main" id="logButton" style="font-size: 45px;">log</span>
            <span class="menuItem MathJax_Main" id="lnButton" style="font-size: 45px;">ln</span>
        </div>

        <div id="brackets" class="tab outer">
            <ul class="inner-tab-links tab-links">
                <li class="innerTab active"><a href="#bracketsSingle">Single</a></li>
                <li class="innerTab"><a href="#bracketsPair">Pair</a></li>
            </ul>
            <div class="tab-content tab-content-nested">
                <div id="bracketsSingle" class="tab inner active">
                    <span class="menuItem MathJax_Main" id="leftAngleBracketButton"
                          style="font-size: 65px;">&#10216;</span>
                    <span class="menuItem MathJax_Main" id="rightAngleBracketButton"
                          style="font-size: 65px;">&#10217;</span>
                    <span class="menuItem MathJax_Main" id="leftFloorBracketButton"
                          style="font-size: 65px;">&#8970;</span>
                    <span class="menuItem MathJax_Main" id="rightFloorBracketButton"
                          style="font-size: 65px;">&#8971;</span>
                    <span class="menuItem MathJax_Main" id="leftCeilBracketButton"
                          style="font-size: 65px;">&#8968;</span>
                    <span class="menuItem MathJax_Main" id="rightCeilBracketButton"
                          style="font-size: 65px;">&#8969;</span>
                </div>
                <div id="bracketsPair" class="tab inner">
                    <img class="menuItem" id="parenthesesBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/parenthesesBracketPair.png')}}">
                    <img class="menuItem" id="squareBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/squareBracketPair.png')}}">
                    <img class="menuItem" id="curlyBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/curlyBracketPair.png')}}">
                    <img class="menuItem" id="angleBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/angleBracketPair.png')}}">
                    <img class="menuItem" id="floorBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/floorBracketPair.png')}}">
                    <img class="menuItem" id="ceilBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/ceilBracketPair.png')}}">
                    <img class="menuItem" id="absValBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/absBracketPair.png')}}">
                    <img class="menuItem" id="normBracketPairButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/normBracketPair.png')}}">
                </div>
            </div>
        </div>

        <div id="symbols" class="tab outer">
            <ul class="inner-tab-links tab-links">
                <li class="innerTab active"><a href="#symbolsOperators">Operators</a></li>
                <li class="innerTab"><a href="#symbolsGreek">Greek</a></li>
                <li class="innerTab"><a href="#symbolsMisc">Misc</a></li>
            </ul>
            <div class="tab-content tab-content-nested">
                <div id="symbolsOperators" class="tab inner active">
                    <span class="menuItem MathJax_Main" id="colonButton" style="font-size: 45px;">:</span>
                    <span class="menuItem MathJax_Main" id="lessThanOrEqualToButton"
                          style="font-size: 45px;">&#x2264;</span>
                    <span class="menuItem MathJax_Main" id="greaterThanOrEqualToButton" style="font-size: 45px;">&#x2265;</span>
                    <span class="menuItem MathJax_Main" id="circleOperatorButton"
                          style="font-size: 45px;">&#9702;</span>
                    <span class="menuItem MathJax_Main" id="approxEqualToButton"
                          style="font-size: 45px;">&#x2248;</span>
                    <span class="menuItem MathJax_Main" id="belongsToButton" style="font-size: 45px;">&#8712;</span>
                    <span class="menuItem MathJax_Main" id="timesButton" style="font-size: 45px;">&#215;</span>
                    <span class="menuItem MathJax_Main" id="pmButton" style="font-size: 45px;">&#177;</span>
                    <span class="menuItem MathJax_Main" id="wedgeButton" style="font-size: 45px;">&#8743;</span>
                    <span class="menuItem MathJax_Main" id="veeButton" style="font-size: 45px;">&#8744;</span>
                    <span class="menuItem MathJax_Main" id="equivButton" style="font-size: 45px;">&#8801;</span>
                    <span class="menuItem MathJax_Main" id="congButton" style="font-size: 45px;">&#8773;</span>
                    <span class="menuItem MathJax_Main" id="neqButton" style="font-size: 45px;">&#8800;</span>
                    <span class="menuItem MathJax_Main" id="simButton" style="font-size: 45px;">&#8764;</span>
                    <span class="menuItem MathJax_Main" id="proptoButton" style="font-size: 45px;">&#8733;</span>
                    <span class="menuItem MathJax_Main" id="precButton" style="font-size: 45px;">&#8826;</span>
                    <span class="menuItem MathJax_Main" id="precEqButton" style="font-size: 45px;">&#10927;</span>
                    <span class="menuItem MathJax_Main" id="subsetButton" style="font-size: 45px;">&#8834;</span>
                    <span class="menuItem MathJax_Main" id="subsetEqButton" style="font-size: 45px;">&#8838;</span>
                    <span class="menuItem MathJax_Main" id="succButton" style="font-size: 45px;">&#8827;</span>
                    <span class="menuItem MathJax_Main" id="succEqButton" style="font-size: 45px;">&#10928;</span>
                    <span class="menuItem MathJax_Main" id="perpButton" style="font-size: 45px;">&#8869;</span>
                    <span class="menuItem MathJax_Main" id="midButton" style="font-size: 45px;">&#8739;</span>
                    <span class="menuItem MathJax_Main" id="parallelButton" style="font-size: 45px;">&#8741;</span>
                </div>
                <div id="symbolsGreek" class="tab inner">
                    <span class="menuItem MathJax_Main" id="gammaUpperButton" style="font-size: 45px;">&#915;</span>
                    <span class="menuItem MathJax_Main" id="deltaUpperButton" style="font-size: 45px;">&#916;</span>
                    <span class="menuItem MathJax_Main" id="thetaUpperButton" style="font-size: 45px;">&#920;</span>
                    <span class="menuItem MathJax_Main" id="lambdaUpperButton" style="font-size: 45px;">&#923;</span>
                    <span class="menuItem MathJax_Main" id="xiUpperButton" style="font-size: 45px;">&#926;</span>
                    <span class="menuItem MathJax_Main" id="piUpperButton" style="font-size: 45px;">&#928;</span>
                    <span class="menuItem MathJax_Main" id="sigmaUpperButton" style="font-size: 45px;">&#931;</span>
                    <span class="menuItem MathJax_Main" id="upsilonUpperButton" style="font-size: 45px;">&#933;</span>
                    <span class="menuItem MathJax_Main" id="phiUpperButton" style="font-size: 45px;">&#934;</span>
                    <span class="menuItem MathJax_Main" id="psiUpperButton" style="font-size: 45px;">&#936;</span>
                    <span class="menuItem MathJax_Main" id="omegaUpperButton" style="font-size: 45px;">&#937;</span>

                    <span class="menuItem MathJax_MathItalic" id="alphaButton" style="font-size: 45px;">&#945;</span>
                    <span class="menuItem MathJax_MathItalic" id="betaButton" style="font-size: 45px;">&#946;</span>
                    <span class="menuItem MathJax_MathItalic" id="gammaButton" style="font-size: 45px;">&#947;</span>
                    <span class="menuItem MathJax_MathItalic" id="deltaButton" style="font-size: 45px;">&#948;</span>
                    <span class="menuItem MathJax_MathItalic" id="varEpsilonButton"
                          style="font-size: 45px;">&#949;</span>
                    <span class="menuItem MathJax_MathItalic" id="epsilonButton" style="font-size: 45px;">&#1013;</span>
                    <span class="menuItem MathJax_MathItalic" id="zetaButton" style="font-size: 45px;">&#950;</span>
                    <span class="menuItem MathJax_MathItalic" id="etaButton" style="font-size: 45px;">&#951;</span>
                    <span class="menuItem MathJax_MathItalic" id="thetaButton" style="font-size: 45px;">&#952;</span>
                    <span class="menuItem MathJax_MathItalic" id="varThetaButton" style="font-size: 45px;">&#977;</span>
                    <span class="menuItem MathJax_MathItalic" id="iotaButton" style="font-size: 45px;">&#953;</span>
                    <span class="menuItem MathJax_MathItalic" id="kappaButton" style="font-size: 45px;">&#954;</span>
                    <span class="menuItem MathJax_MathItalic" id="lambdaButton" style="font-size: 45px;">&#955;</span>
                    <span class="menuItem MathJax_MathItalic" id="muButton" style="font-size: 45px;">&#956;</span>
                    <span class="menuItem MathJax_MathItalic" id="nuButton" style="font-size: 45px;">&#957;</span>
                    <span class="menuItem MathJax_MathItalic" id="xiButton" style="font-size: 45px;">&#958;</span>
                    <span class="menuItem MathJax_MathItalic" id="piButton" style="font-size: 45px;">&#960;</span>
                    <span class="menuItem MathJax_MathItalic" id="varPiButton" style="font-size: 45px;">&#982;</span>
                    <span class="menuItem MathJax_MathItalic" id="rhoButton" style="font-size: 45px;">&#961;</span>
                    <span class="menuItem MathJax_MathItalic" id="varRhoButton" style="font-size: 45px;">&#1009;</span>
                    <span class="menuItem MathJax_MathItalic" id="sigmaButton" style="font-size: 45px;">&#963;</span>
                    <span class="menuItem MathJax_MathItalic" id="varSigmaButton" style="font-size: 45px;">&#962;</span>
                    <span class="menuItem MathJax_MathItalic" id="tauButton" style="font-size: 45px;">&#964;</span>
                    <span class="menuItem MathJax_MathItalic" id="upsilonButton" style="font-size: 45px;">&#965;</span>
                    <span class="menuItem MathJax_MathItalic" id="varPhiButton" style="font-size: 45px;">&#966;</span>
                    <span class="menuItem MathJax_MathItalic" id="phiButton" style="font-size: 45px;">&#981;</span>
                    <span class="menuItem MathJax_MathItalic" id="chiButton" style="font-size: 45px;">&#967;</span>
                    <span class="menuItem MathJax_MathItalic" id="psiButton" style="font-size: 45px;">&#968;</span>
                    <span class="menuItem MathJax_MathItalic" id="omegaButton" style="font-size: 45px;">&#969;</span>
                </div>
                <div id="symbolsMisc" class="tab inner">
                    <span class="menuItem MathJax_Main" id="partialButton" style="font-size: 45px;">&#8706;</span>
                    <span class="menuItem MathJax_Main" id="infinityButton" style="font-size: 45px;">&#8734;</span>
                </div>
            </div>
        </div>

        <div id="functions" class="tab outer">
            <ul class="inner-tab-links tab-links">
                <li class="innerTab active"><a href="#functionsTrig">Trig</a></li>
                <li class="innerTab"><a href="#functionsMisc">Misc</a></li>
            </ul>
            <div class="tab-content tab-content-nested">
                <div id="functionsTrig" class="tab inner active">
                    <span class="menuItem MathJax_Main" id="sinButton" style="font-size: 45px;">sin</span>
                    <span class="menuItem MathJax_Main" id="cosButton" style="font-size: 45px;">cos</span>
                    <span class="menuItem MathJax_Main" id="tanButton" style="font-size: 45px;">tan</span>
                    <span class="menuItem MathJax_Main" id="cotButton" style="font-size: 45px;">cot</span>
                    <span class="menuItem MathJax_Main" id="secButton" style="font-size: 45px;">sec</span>
                    <span class="menuItem MathJax_Main" id="cscButton" style="font-size: 45px;">csc</span>
                    <span class="menuItem MathJax_Main" id="sinhButton" style="font-size: 45px;">sinh</span>
                    <span class="menuItem MathJax_Main" id="coshButton" style="font-size: 45px;">cosh</span>
                    <span class="menuItem MathJax_Main" id="tanhButton" style="font-size: 45px;">tanh</span>
                    <span class="menuItem MathJax_Main" id="cothButton" style="font-size: 45px;">coth</span>
                    <span class="menuItem MathJax_Main" id="sechButton" style="font-size: 45px;">sech</span>
                    <span class="menuItem MathJax_Main" id="cschButton" style="font-size: 45px;">csch</span>
                </div>
                <div id="functionsMisc" class="tab inner">
                    <span class="menuItem MathJax_Main" id="limButton" style="font-size: 45px;">lim</span>
                    <span class="menuItem MathJax_Main" id="maxButton" style="font-size: 45px;">max</span>
                    <span class="menuItem MathJax_Main" id="minButton" style="font-size: 45px;">min</span>
                    <span class="menuItem MathJax_Main" id="supButton" style="font-size: 45px;">sup</span>
                    <span class="menuItem MathJax_Main" id="infButton" style="font-size: 45px;">inf</span>
                    <img class="menuItem" id="maxLowerButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/maxLower.png')}}">
                    <img class="menuItem" id="minLowerButton"
                         src="{{asset('equation-editor-master/src/MenuImages/png/minLower.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
JSON:
<div id="ContentJSON" style="margin: 20px; border: solid 1px #000">&nbsp;</div>

<button id="toLatex">Odpovedať</button>

LaTeX:
<div id="ContentLatex" style="margin: 20px; border: solid 1px #000">&nbsp;</div>




<script>
    $('#toJSON').on('click', function () {
        var jsonObj = $('.eqEdEquation').data('eqObject').buildJsonObj();
        console.log(jsonObj);
        $('#ContentJSON').html(JSON.stringify(jsonObj));
    });
    $('#toLatex').on('click', function () {
        var jsonObj = $('.eqEdEquation').data('eqObject').buildJsonObj();
        //$('#ContentLatex').html(generateLatex(jsonObj));
        var studentResult = generateLatex(jsonObj);
        var correctResult = '{{$correctAnswer}}'

        // todo: poslat studentResult do db
        console.log(studentResult)
        console.log(correctResult)
        if (studentResult === correctResult){
            // spravna
            console.log("SPRAVNE")
        }else {
            // nespravne
            console.log("NESPRAVNE")
        }
        // redirect na hlavnu studentovu - studentstats

    });
</script>
<textarea id="TextJSON"></textarea>
<br>
<button id="JSONtoEqEd">Render Equation</button>
<script>
    $('#JSONtoEqEd').on('click', function (e) {
        var jsonObj = $.parseJSON($('#TextJSON').val());
        var equation = eqEd.Equation.constructFromJsonObj(jsonObj);
        $('#renderedEq').empty();
        $('#renderedEq').append(equation.domObj.value);
        equation.updateAll();
    });
</script>
<div id="renderedEq"></div>


</body>
</html>


