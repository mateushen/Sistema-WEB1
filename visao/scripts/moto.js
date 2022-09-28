// Máscara de Placa
const placa = document.getElementById('placa')

placa.addEventListener('keypress', () => {
    let inputLength = placa.value.length

    if (inputLength == 3) {
        placa.value += '-'
    }

})