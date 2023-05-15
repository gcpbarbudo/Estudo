function rand([min = 0, max = 1000]){
    if (min > max) [min,max] = [max,min] //caso o min for maior que o max
    const valor = Math.random() * (max - min) + min //realiza o processamento para o random retornar corretamente
    return Math.floor(valor) //arredonda para baixo
}


console.log(rand([10,80])) //Retorna no período
console.log(rand([992])) //Retorna acima de 992
console.log(rand([,10])) //Retorna até 10
console.log(rand([])) //Usa o limite de 0 a 100
console.log(rand()) //Não consegue ler propriedades indefinidas