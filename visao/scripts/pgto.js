// Verifica tipo de pgto
function verifica() {
    var ok = verificaTipo();
    if (ok) {
        return true;
    } else return false;
}

// Verificação de tipo de pgto
function verificaTipo() {
    if (document.forms[0].tipo_pagamento.value.length < 3) {
        alert('Informe o tipo de pagamento.');
        document.frmEnvia.tipo_pagamento.focus();
        return false;
    } else {
        return true;
    }
}