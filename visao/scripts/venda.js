// Verifica nome, cpf, email e senha
function verifica() {
    var ok = verificaFuncionario();
    if (ok) {
        ok = verificaCliente();
        if (ok) {
            ok = verificaVeiculo();
            if (ok) {
                ok = verificaPagamento();
                if (ok) {
                    return true;
                } else return false;
            } else return false;
        } else return false;
    } else return false;
}

// Verificação de funcionario
var select = document.getElementById("funcionario");
var Fsel = select.options[select.selectedIndex].text;

function verificaFuncionario() {
    if (Fsel == null) {
        alert('Informe o funcionario.');
        document.frmEnvia.funcionario.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de cliente
var select = document.getElementById("cliente");
var Csel = select.options[select.selectedIndex].text;

function verificaCliente() {
    if (Csel == null) {
        alert('Informe o cliente.');
        document.frmEnvia.cliente.focus();
        return false;
    } else {
        return true;
    }
}


// Verificação de veiculo
var select = document.getElementById("veiculo");
var Vsel = select.options[select.selectedIndex].text;

function verificaVeiculo() {
    if (Vsel == null) {
        alert('Informe o seu veículo.');
        document.frmEnvia.veiculo.focus();
        return false;
    } else {
        return true;
    }
}

// Verificação de pagamento
var select = document.getElementById("pagamento");
var Psel = select.options[select.selectedIndex].text;
function verificaPagamento() {
    if (Psel == null) {
        alert('Informe o tipo de pagamento');
        document.frmEnvia.pagamento.focus();
        return false;
    } else {
        return true;
    }
}