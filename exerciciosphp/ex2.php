<?php
//  ()    9


/* 
 Faça um algoritmo para ler as 3 notas obtidas por um aluno nas 3 verificações e a média dos
exercícios que fazem parte da avaliação. Calcular a média de aproveitamento, usando a fórmula abaixo
e escrever o conceito do aluno de acordo com a tabela de conceitos mais abaixo:
Média_de_Aproveitamento =  N1 + N2 * 2 + N3 * 3 + Média_dos_Exercícios/7

*/

$notasAluno = [
    'prova1' => 10,
    'prova2' => 10,
    'prova3' => 10
];
$mediaExercícios = 5;

function calculaMedia($notasAluno, $mediaExercícios)
{
    $resultado = ($notasAluno['prova1'] + ($notasAluno['prova2'] * 2) + ($notasAluno['prova3'] * 3) + $mediaExercícios) / 7;
    return $resultado;
}

calculaMedia($notasAluno, $mediaExercícios);

$resultado = calculaMedia($notasAluno, $mediaExercícios);

$resultado = number_format($resultado, 2, ",");

echo "sua nota é $resultado <br/>";


switch ($resultado) {
    case $resultado >= 9.0:
        echo 'Parabéns, você tirou A';
        break;
    case $resultado >= 7.5 && $resultado < 9.0:
        echo 'Seu conceito é B, Legal!';
        break;
    case $resultado >= 6.0 && $resultado < 7.5:
        echo 'Seu conceito é C, Precisa estudar!';
        break;
    case $resultado < 6.0:
        echo 'Você tirou D, está reprovado';
        break;
}
