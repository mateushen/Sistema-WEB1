// Máscara de Placa
const placa = document.getElementById('placa')

placa.addEventListener('keypress', () => {
    tamText = placa.value.length

    if (tamText == 3) {
        placa.value += "-"
    }
})

// Verifica placa
function verifica() {
    var ok = verificaPlaca();
    if (ok) {
        ok = verificaRenavam();
        if (ok){
            ok = verificaMarca();
            if (ok){
                ok = verificaModelo();
                if(ok){
                    ok = verificaCor();
                    if(ok){
                        ok = verificaAno();
                        if(ok){
                            return true;
                        }
                    }else return false;
                } else return false;
            } else return false;
        } else return false;
    } else return false;
}

// Verificação de placa
function verificaPlaca() {
    if (document.forms[0].placa.value.length != 8) {
        alert('Placa inválida.');
        document.frmEnvia.placa.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de renavam
function verificaRenavam() {
    if (document.forms[0].renavam.value.length != 11) {
        alert('Renavam inválido.');
        document.frmEnvia.placa.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de marca
function verificaMarca() {
    if (document.forms[0].marca.value.length <= 3) {
        alert('Marca inválida.');
        document.frmEnvia.marca.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de modelo
function verificaModelo() {
    if (document.forms[0].modelo.value.length <= 3) {
        alert('Modelo inválido.');
        document.frmEnvia.modelo.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de cor
function verificaCor() {
    if (document.forms[0].cor.value.length <= 3) {
        alert('Cor inválida.');
        document.frmEnvia.cor.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de ano
function verificaAno() {
    if (document.forms[0].ano.value.length <= 3) {
        alert('Ano inválido.');
        document.frmEnvia.ano.focus();
        return false;
    } else {
        return true;
    }
}
