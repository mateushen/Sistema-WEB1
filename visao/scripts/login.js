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

// Verifica cpf e senha
function verifica() {
    var ok = verificaCPF();
    if (ok) {
        ok = verificaSenha();
        if (ok) {
            return true;
        } else return false;
    } else return false;
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

// Verificação de senha
function verificaSenha() {
    if (document.forms[0].senha.value.length != 6) {
        alert('A senha deve conter 6 caracteres.');
        document.frmEnvia.senha.focus();
        return false;
    } else {
        return true;
    }
}