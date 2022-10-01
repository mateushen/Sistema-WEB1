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
        return true;
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