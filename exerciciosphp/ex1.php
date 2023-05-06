<?php

/*
Faça um algoritmo para ler: número da conta do cliente, saldo, débito e crédito. Após, calcular e
escrever o saldo atual (saldo atual = saldo - débito + crédito). Também testar se saldo atual for maior
ou igual a zero escrever a mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'.  */

$contaCliente = [
    'numeroConta' => 1512,
    'saldo' => 10000
];

$valorASacar;
$valorADepositar;

function sacar($contaCliente, $valorASacar) {
   return $contaCliente['saldo'] -= $valorASacar;
}

function depositar($contaCliente, $valorADepositar) {
   return $contaCliente['saldo'] += $valorADepositar;
}

echo $situacaoConta = $contaCliente['saldo'] > 0 ? "Seu saldo é positivo <br/>" : "Seu saldo é negativo<br/>"; 


var_dump(depositar($contaCliente, 5000));