const pessoa = {
    nome: 'Ana Julia',
    idade: 18,
    sexo: 'F',
    endereco: {
        logradouro: 'Rua das corujas',
        numero: 66,

    }
}

//extraindo nome e idade do objeto pessoa
const {nome, idade} = pessoa
console.log(nome, idade)

//Mudando o nome da variável
const {nome:  n, idade: i} = pessoa
console.log(i, n)