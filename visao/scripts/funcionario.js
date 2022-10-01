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

// Verifica email, senha, e cpf
function verifica() {
    var ok = verificaCPF();
    if (ok) {
        ok = verificaEmail();
        if (ok) {
            ok = verificaSenha();
        } if (ok) {
            return true;
        }else return false;
    } else {
        return false;
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
// Verificação de email
function verificaEmail() {
    if (document.forms[0].email.value.length == 0) {
        alert('Por favor, informe o seu E-MAIL.');
        document.frmEnvia.email.focus();
        return false;
    } else {
        return true;
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

// Checagem do email
function checarEmail() {
    if (document.forms[0].email.value == ""
        || document.forms[0].email.value.indexOf('@') == -1
        || document.forms[0].email.value.indexOf('.') == -1) {
        alert("Por favor, informe um E-MAIL válido!");
        return false;
    }
}