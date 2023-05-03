/* as maçãs custam R$1,30 cada se forem compradas menos de uma dúzia e R$1,00 se forem compradas pelo menos 12.
Escreva um programa que leia o numero de maças compradas e calcule o custo total da compra. 
*/

let numeroDeMacas = 12
let preco1 = numeroDeMacas*1.30;


let resultado = numeroDeMacas >= 12 ? `O preço é  R$${numeroDeMacas},00`: `O preço é R$${preco1},00`;

console.log(resultado);