// Máscara de CPF
var cpf = document.getElementById('cpf')

cpf.addEventListener('keydown', function (e) {
    var numero = (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105);
    var controlos = [8, 37, 39].includes(e.keyCode);
    if (!numero && !controlos) return e.preventDefault();
});

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

telefone.addEventListener('keydown', function (e) {
    var numero = (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105);
    var controlos = [8, 37, 39].includes(e.keyCode);
    if (!numero && !controlos) return e.preventDefault();
});

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