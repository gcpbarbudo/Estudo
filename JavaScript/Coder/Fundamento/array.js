// Leitura de Array
const valores = [7.7, 55, 99, 53, 'papapa']
console.log(valores[0], valores[3], valores[4], valores[5])


// Adicionando valores no array
valores[5] = 10
console.log(valores[5])

// Verifica quantos valores tem no array
console.log(valores.length)

//Adiciona dado após o ultimo array
valores.push('teste')
console.log(valores[6])


delete valores[0]
console.log(valores)