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
    ]

];


for ($i=0; $i < count($listaclientes); $i++) { 
    fwrite($arquivo, $listaclientes[$i]["nome"] . "\t");
    fwrite($arquivo, $listaclientes[$i]["idade"] . "\n");
}


fclose($arquivo);








?>