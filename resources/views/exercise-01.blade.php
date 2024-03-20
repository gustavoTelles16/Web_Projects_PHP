<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-widht, initial scale=1.0">
        <title> Exercício 01 </title>
    </head>
    <body>
        <center> <h1> Exercício 01 <h1> </center>
        
        @if ($lastName == null)
            <p> Olá, {{ $name }}! </p>
        @endif
        <p> Olá, {{ $name }} {{ $lastName }}! </p>
    </body>
</html>