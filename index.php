<?php

$arquivo = fopen("clientex.txt", "w");

$listaclientes = [
    [
        "nome" => "Claudine",
        "idade" => 24
    ],

    [
        "nome" => "Mateus",
        "idade" => 35
    ],

    [
        "nome" => "Fernanda",
        "idade" => 20
    ],

    [
        "nome" => "Diego",
        "idade" => 25
    ],

    [
        "nome" => "Marcelo",
        "idade" => 45
    ]

];


for ($i=0; $i < count($listaclientes); $i++) { 
    fwrite($arquivo, $listaclientes[$i]["nome"] . "\t\t");
    fwrite($arquivo, $listaclientes[$i]["idade"] . "\n");
}


fclose($arquivo);








?>