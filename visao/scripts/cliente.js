// Máscara de CPF
var cpf = document.getElementById('cpf')

cpf.addEventListener('keypress', () => {
    let inputLength = cpf.value.length

    if (inputLength == 3 || inputLength == 7) {
        cpf.value += '.'
    } else if (inputLength == 11) {
        cpf.value += '-'
    }
})

// Máscara de Telefone
var telefone = document.getElementById('telefone')

telefone.addEventListener('keypress', () => {
    let inputLength = telefone.value.length

    if (inputLength == 0) {
        telefone.value += '('
    } else if (inputLength == 3) {
        telefone.value += ')'
    } else if (inputLength == 9) {
        telefone.value += '-'
    }
})