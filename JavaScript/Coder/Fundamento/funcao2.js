//Armazenando função na variável

const ImprimirSoma = function(a, b) {
    console.log(a + b)
}

ImprimirSoma(2, 3)
//Retorno: 5


// Função arrow, não precisa escrever função
const soma = (a,b) => {
    return a + b
}

console.log(soma(4,6))
//Retorno: 10


//Retorno implícito, não usa o return

const subracao = (a, b) => a - b
console.log(10, 5)