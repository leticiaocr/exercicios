<?php
/*Faça um algoritmo para ler um número que é um código de usuário. Caso este código seja
diferente de um código armazenado internamente no algoritmo (igual a 1234) deve ser apresentada a
mensagem ‘Usuário inválido!’. Caso o Código seja correto, deve ser lido outro valor que é a senha. Se
esta senha estiver incorreta (a certa é 8888) deve ser mostrada a mensagem ‘senha incorreta’. Caso a
senha esteja correta, deve ser mostrada a mensagem ‘Acesso permitido’.*/


$usuarios = [
    'codigo' => 1234,
    'senha' => 8888
];

$codigoDigitado = 1234;
$senhaDigitada = 8888;

confirmaUsuario($usuarios, $codigoDigitado, $senhaDigitada);

function confirmaUsuario($usuarios, $codigoDigitado, $senhaDigitada)
{
    if ($codigoDigitado != $usuarios['codigo']) {
        echo "Usuário inválido";
        exit;
    }
    if ($senhaDigitada != $usuarios['senha']) {
        echo "Senha inválida";
        exit;
    }

    echo "Acesso permitido!";
}
