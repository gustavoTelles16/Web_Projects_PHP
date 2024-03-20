<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widht=device-widht, initial scale=1.0">
        <title> Exercício 04 </title>
    </head>
    <body>
        <center> <h1> Exercício 04 </h1> </center>
        
        <table border=2>
            <tr>
                <th> Produtos: </th>
            </tr>
            <tr>
                @foreach ($nameProduct as $product)
                    <td> {{ $product->'product1' }} </td>
                    <td> {{ $product-> 'product2' }} </td>
                    <td> {{ $product-> 'product3' }} </td>
                @endforeach
            </tr>
            <tr>
                <th> Descrições: </th>
            </tr>
            <tr>
                @foreach ($descriptions as $description)
                    <td> {{ $description->'description1' }} </td>
                    <td> {{ $description->'description2' }} </td>
                    <td> {{ $description->'description3' }} </td>
                @endforeach
            </tr>
            <tr>
                <th> Preços: </th>
            </tr>
            <tr>
                @foreach ($prices as $price)
                    <td> {{ $price->'price1' }} </td>
                    <td> {{ $price->'price2' }} </td>
                    <td> {{ $price->'price3' }} </td>
                @endforeach
            </tr>
        </table>
    </body>
</html>