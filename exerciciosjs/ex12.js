/* ler 2 valores e escrever o maior deles (eles não podem ser iguais)*/

let valor1 = 15;
let valor2 = 11;

if(valor1 === valor2){
    console.log(`Valores iguais, digite um número diferente`)
}else if(valor1 > valor2){
    console.log(`${valor1} é maior que ${valor2}`)
}else{
    console.log(`${valor2} é o maior número`)
}