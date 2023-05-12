//Funcao sem retorno

function ImprimirSoma (a, b) {
    console.log(a + b)
}

ImprimirSoma(2, 3)

//Funcção com retorno
//b = 0 é utilizado se o valor da variável não for passado
function soma(a, b = 0){
    return a + b
}

console.log(soma(2, 6))
console.log(soma(2))
 



a = true
console.log(a)
console.log(!!a)