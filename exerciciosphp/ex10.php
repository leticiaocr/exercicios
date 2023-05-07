<?php

// Ler 10 valores e escrever quantos desses valores lidos são NEGATIVOS. 

$valores = [-10,2,3,5,-2,10,-3,8,10,1];

$valoresNegativos =[];

foreach($valores as $valor){
    if($valor < 0){
        $valoresNegativos[] = $valor; 
    }
}


var_dump($valoresNegativos);