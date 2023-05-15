function NaoFoiDessaVez(erro){
    throw {
        nome: error.name,
        msg: error.message,
        date: new Date
    }
}


//Usando TRY
function ImprimirNomeGritado(obj) {
    try {
    console.log(obj.name.toUpperCase() + '!!!')
    } catch (e) { //Captura o erro 
        NaoFoiDessaVez(e)
    }
}
//O correto é name em vez de nome
const obj = {nome: 'Roberto'}
ImprimirNomeGritado(obj)