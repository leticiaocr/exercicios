/*
Faça um algoritmo para ler um codigo, se esse codigo for diferente do armazenado (1234) digite usuario inválido
Se o código estiver correto leia o valor da senha 
se a senha estiver incorreta (9999) mostre a mensagem senha incorreta
se a senha estiver correta mmostre a mensagem acesso permitido 
*/

const codigo = 1234;
const senha = 9999;

function verificaUsuario(codUsuario, senhaUsuario) {
    if (codUsuario === codigo && senhaUsuario === senha) {
        console.log('Acesso Permitido')
    } else if (codUsuario != codigo){
        console.log('Usuário inválido')
    }else{
        console.log("senha inválida")
    }
}
   
verificaUsuario(134, 9999);