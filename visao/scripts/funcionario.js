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

// Verifica nome, cpf, email e senha
function verifica() {
    var ok = verificaNome();
    if (ok) {
        ok = verificaCPF();
        if (ok) {
            ok = verificaEmail();
        } if (ok) {
            ok = verificaSenha();
        }else return false;
    }else{
        return false;
    }
}

// Verificação de nome
function verificaNome() {
    if (document.forms[0].nome.value.length == 0) {
        alert('Informe o seu nome.');
        document.frmEnvia.nome.focus();
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


// Verificação de email
function verificaEmail() {
    if (document.forms[0].email.value.length == 0) {
        alert('Informe o seu E-MAIL.');
        document.frmEnvia.email.focus();
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
        alert("Informe um E-MAIL válido!");
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