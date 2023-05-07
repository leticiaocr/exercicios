<?php

//Ler 3 valores (considere que não serão informados valores iguais) e escrevê-los em ordem crescente. 

$numeros = [5,2,100,13,22,1];
$numerosDuplicados = array_count_values($numeros);

foreach($numerosDuplicados as $numero => $count){
    if ($count > 1){
    echo "O valor $numero aparece $count vezes no array";
    exit;
}
}

sort($numeros);
var_dump($numeros);

