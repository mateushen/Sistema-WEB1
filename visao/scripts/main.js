function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;
    if (charCode != 8 && charCode != 9) {
        if (charCode < 48 || charCode > 57) {
            return false;
        }
    }
}

function somenteLetras(e) {
    tecla = e.key;
    if (tecla != 8 && tecla != 9) {
        if (tecla < 65 || tecla > 90) {
            return false;
        }
    }
}