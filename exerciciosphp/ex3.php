<?php
//  ()    9
/* 
Uma empresa quer verificar se um empregado está qualificado para a aposentadoria ou não. Para
estar em condições, um dos seguintes requisitos deve ser satisfeito:
 - Ter no mínimo 65 anos de idade.
 - Ter trabalhado no mínimo 30 anos.
 - Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos.
Com base nas informações acima, faça um algoritmo que leia: o número do empregado (código), o ano
de seu nascimento e o ano de seu ingresso na empresa. O programa deverá escrever a idade e o tempo
de trabalho do empregado e a mensagem 'Requerer aposentadoria' ou 'Não requerer'.
*/


$dadosEmpregado = [
    'codigo' => 1512,
    'ano de nascimento' => 1970,
    'ano de ingresso' => 2000
];

$idade = calculaIdade($dadosEmpregado);
$tempoDeTrabalho = calculaTempoDeTrabalho($dadosEmpregado);

function calculaIdade($dadosEmpregado)
{
    $idade = 2023 - $dadosEmpregado['ano de nascimento'];
    return $idade;
}

function calculaTempoDeTrabalho($dadosEmpregado)
{
    $tempoDeTrabalho = 2023 - $dadosEmpregado['ano de ingresso'];
    return $tempoDeTrabalho;
}

function requererAposentadoria($idade, $tempoDeTrabalho)
{
    echo "Sua idade é $idade e você possui $tempoDeTrabalho anos de trabalho <br/> REQUERER APOSENTADORIA";
}
function naoRequerAposentadoria($idade, $tempoDeTrabalho)
{
    echo "Sua idade é $idade e você possui $tempoDeTrabalho anos de trabalho <br/> NÃO REQUER APOSENTADORIA";
}



function verificaAposentadoria($idade, $tempoDeTrabalho)
{
    if ($idade >= 65) {
        requererAposentadoria($idade, $tempoDeTrabalho);
    } else if ($tempoDeTrabalho >= 30) {
        requererAposentadoria($idade, $tempoDeTrabalho);
    } else if ($idade >= 60 && $tempoDeTrabalho >= 25) {
        requererAposentadoria($idade, $tempoDeTrabalho);
    } else {
        naoRequerAposentadoria($idade, $tempoDeTrabalho);
    }
}

calculaIdade($dadosEmpregado);
calculaTempoDeTrabalho($dadosEmpregado);
verificaAposentadoria($idade, $tempoDeTrabalho);
