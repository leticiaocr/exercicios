<?php

/* Ler o número de alunos existentes em uma turma e, após isto, ler as notas destes alunos, calcular e
escrever a média aritmética dessas notas lidas. */

$alunos = [
    'aluno1' => [
        'nota' => 10
    ],
    'aluno2' => [
        'nota' => 5
    ],
    'aluno3' => [
        'nota' => 8
    ],
];


$numeroDeAlunos = count($alunos);


function calculaMedia($alunos, $numeroDeAlunos)
{
    $media = ($alunos['aluno1']['nota'] + $alunos['aluno2']['nota'] + $alunos['aluno3']['nota']) / $numeroDeAlunos;
    return $media;
}

$media = number_format(calculaMedia($alunos, $numeroDeAlunos));


echo "A média da turma é $media";
