const saudacao = 'Opa' //Contexto léxico 1

function exec() {
    const saudacao = 'Fala jovem!' //contexto léxico 2
    return saudacao   // Mesmo estando com o mesmo nome, procura aqui primeiro
}


const cliente = {
    nome: 'Pedro',
    idade: 25,
    peso: 80,
    endereco: {
        logradouro: 'Rua matagal',
        numero: 40
    }
}
//Retornou: Opa
console.log(saudacao)
//Retornou: Fala jovem!
console.log(exec(saudacao))
