function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;
    if (charCode != 8 && charCode != 9) {
        if (charCode < 48 || charCode > 57) {
            return false;
        }
    }
}

function somenteLetras(e) {
    tecla = e.key;
    if (e.keyCode != 32 ) {
        if (tecla != 8 && tecla != 9) {
            if (tecla < 65 || tecla > 90) {
                return false;
            }
        }
    }
}

// Máscara de CPF
var cpf = document.getElementById('cpf')
if (cpf) {
    cpf.addEventListener('keypress', () => {
        let inputLength = cpf.value.length

        if (inputLength == 3 || inputLength == 7) {
            cpf.value += '.'
        } else if (inputLength == 11) {
            cpf.value += '-'
        }
    })
}

// Máscara de Telefone
var telefone = document.getElementById('telefone')
if (telefone) {
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
}

// Máscara de Placa
const placa = document.getElementById('placa')
if (placa) {
    placa.addEventListener('keypress', () => {
        tamText = placa.value.length

        if (tamText == 3) {
            placa.value += "-"
        }
    })
}