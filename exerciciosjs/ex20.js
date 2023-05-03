/*Ler dois valores e imprimir uma das três mensagens a seguir:
‘Números iguais’, caso os números sejam iguais
‘Primeiro é maior’, caso o primeiro seja maior que o segundo;
‘Segundo maior’, caso o segundo seja maior que o primeiro.*/ 

const num1 = 9;
const num2 = 10;

if(num1 === num2){
    console.log('Números iguais');
}else if(num1 > num2){
    console.log('Primeiro número é maior');
}else{
    console.log('Segundo número é maior');

}