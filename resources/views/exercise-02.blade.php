<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-widht, initial scale=1.0">
        <title> Exercício 02 </title>
    </head>
    <body>
        <center> <h1> Exercício 02 </h1> </center>
        
        @php
            $resultPlus = $number1 + $number2;
            $resultMinus = $number1 - $number2;
            $resultMultiplication = $number1 * $number2;
            $resultDivision = $number1 / $number2;
        @endphp

        @switch ($operator)
            @case('+')
                <p> {{ $resultPlus }} </p>
                @break

            @case('-')
                <p> {{ $resultMinus }} </p>
                @break

            @case('*')
                <p> {{ $resultMultiplication }} </p>
                @break

            @case('divide')
                @if ($number1 == 0 || $number2 == 0)
                    <p> Não é possível dividir um número por zero! </p>
                @endif
                <p> {{ $resultDivision }} </p>
                @break

            @default
                <p> Operador aritmético inválido! Digite novamente para realizar uma operação! </p>
        @endswitch
    </body>
</html>