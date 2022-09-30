// Máscara de Placa
const placa = document.getElementById('placa')

placa.addEventListener('keypress', () => {
    tamText = placa.value.length

    if (tamText == 3) {
        placa.value += "-"
    }
})