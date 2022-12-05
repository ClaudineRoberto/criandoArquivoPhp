<?php

$nomeArquivo = "clientes.txt";
$arquivo = fopen($nomeArquivo, "r");

while (!feof($arquivo)) {
    $linha = fgets($arquivo, 100);
    echo "$linha<br>";
};


fclose($arquivo);
?>