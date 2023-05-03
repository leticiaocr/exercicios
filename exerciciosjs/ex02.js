//  Escreva um algoritmo para ler um valor (do teclado) e escrever (na tela) o seu antecessor

const num1 = 10;
let antecessor = (num1 -1) ;

console.log (antecessor);

// faça um loop iniciando em 10 e parando em 0 

// imprima = o antecessor de X é Y

for (let i = 10; i>0; i--){
    console.log(`o antecessor de ${i} é ${i-1}`)
}