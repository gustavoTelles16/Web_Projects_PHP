<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-widht, initial scale=1.0">
        <title> Exercício 03 </title>
    </head>
    <body>
        <center> <h1> Exercício 03 </h1> </center>

        @foreach ($users as $user)
            <p> Nome: {{ $user->'firstName' }} </p>
            <p> Sobrenome: {{ $user->'lastname' }} </p>
            <p> Idade: {{ $user-> 'age' }} </p>
            <p> RM: {{ $user->'rm' }} </p>
            <p> Gênero: {{ $user-> 'gender' }} </p>
            <p> Endereço: {{ $user-> 'address' }} </p>
        @endforeach
    </body>
</html>