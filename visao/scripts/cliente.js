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

// Verifica cpf e telefone
function verifica() {
    var ok = verificaCPF();
    if (ok) {
        ok = verificaTelefone();
        if (ok) {
            return true;
        } else return false;
    } else {
        return false;
    }
}

// Verificação de cpf
function verificaCPF() {
    if (document.forms[0].cpf.value.length != 14) {
        alert('CPF inválido.');
        document.frmEnvia.cpf.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de telefone
function verificaTelefone() {
    if (document.forms[0].telefone.value.length != 14) {
        alert('Número de telefone inválido.');
        document.frmEnvia.telefone.focus();
        return false;
    } else {
        return true;
    }
}

