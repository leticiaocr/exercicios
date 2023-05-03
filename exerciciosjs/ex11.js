/*ler o ano atual e o ano de nascimento de uma pessoa e escrever se ela pode ou não votar esse ano*/ 

const anoAtual = 2023;
let anoNascimento = 1999;
let idade = anoAtual - anoNascimento; 

let resultado = idade>= 18? `Você pode votar esse ano` : `Você não pode votar esse ano`;

console.log(resultado);