/*Ler duas notas de um aluno e escrever se ele foi ou não aprovado (média igual ou maior que 6 = aprovado)*/

let nota1 = 6;
let nota2 = 5; 
let media = (nota1 + nota2 )/2;

let resultado = media >=6 ? `Sua média foi ${media} você está APROVADO` : `Sua média foi ${media} você está REPROVADO`;

console.log(resultado); 