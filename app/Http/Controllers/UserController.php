<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function personalData(string $name, string $lastName): View
    {
        return view('exercise-01', ['name' => 'Osvaldo'], ['lastName' => 'Ferreira']);
    }

    public function calculator(string $operator, int $number1, int $number2): View
    {
        return view('exercise-02', ['operator' => '+'], ['number1' => 5], ['number2' => 5]);
    }

    public function personalUser(string $users): View
    {
        return view('exercise-03', 'users', ['firstName' => 'Gabriel', 'lastname' => 'Costa', 'age' => 25, 'rm' => '20242930001', 'gender' => 'Masculino', 'address' => 'Rua das Oliveiras, 55']);
    }

    public function products(string $nameProduct, string $descriptions, string $prices): View
    {
        return view('exercise-04', 'nameProduct', 'descriptions', 'prices', ['product1' => 'Garrafa', 'product2' => 'Bola de futebol', 'product3' => 'Panela de pressão'], ['description1' => 'Garrafa de água com capacidade de 500 ml.', 'description2' => 'Bola de futebol para campo.', 'description3' => 'Panela de pressão com capacidade de até 5 litros.'], ['price1' => 'R$ 2,50', 'price2' => 'R$ 25,00', 'price3' => 'R$ 50,00']);
    }
}

?>