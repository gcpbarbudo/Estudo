const pessoa = {
    nome: 'Ana',
    idade: 5,
    endereco: {
        logradouro: 'Rua ABC',
        numero: 80
    }
}

//Chaves representam o operador destructuring para extrair dados
const { nome, idade } = pessoa  
console.log(nome, idade ) //Ana 5

const {nome: n, idade: i} = pessoa
console.log(i, n) //5 Ana

//atribuindo dados
const {sobrenome = 'Silva', peso = 88} = pessoa
console.log (sobrenome, peso) //Silva 88


//acessando os endereço

const { endereco: {logradouro, numero} } = pessoa
console.log(logradouro,'-', numero) //Rua ABC 80