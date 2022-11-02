window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', () => {
        event.preventDefault(verifica());

        var Psel;
        var Csel;
        var Vsel;
        var Psel;

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaFuncionario();
            if (ok) {
                ok = verificaCliente();
                if (ok) {
                    ok = verificaVeiculo();
                    if (ok) {
                        ok = verificaPagamento();
                        if (ok) {
                            const dados = new FormData();

                            dados.append('idFuncionario', document.forms[0].funcionario.value);
                            dados.append('idCliente', document.forms[0].cliente.value);
                            dados.append('idVeiculo', document.forms[0].veiculo.value);
                            dados.append('idPagamento', document.forms[0].pagamento.value);

                            const config = {
                                method: 'POST',
                                body: dados
                            };
                            fetch('../Venda/cadastroVenda.php', config)
                                .then((response) => {
                                    return response.json();
                                })
                                .then((json) => {
                                    console.log(json);
                                    let p = document.querySelector('p');
                                    if (json.status == 'ok') {
                                        alert('Dados gravados com sucesso!')
                                        window.location.href = "../../main.php";
                                    } else {
                                        p.innerText = json.mensagem;
                                        p.style.color = 'red';
                                    }
                                })
                        } else return false;
                    } else return false;
                } else return false;
            } else return false;
        }

        // Verificação de funcionario
        var select = document.getElementById("funcionario");
        var Fsel = select.options[select.selectedIndex].value;
        function verificaFuncionario() {
            if (Fsel) {
                alert('Informe o funcionario.');
                document.forms[0].funcionario.focus();
                return false;
            } else return true;
        }

        // Verificação de cliente
        var select = document.getElementById("cliente");
        var Csel = select.options[select.selectedIndex].value;
        function verificaCliente() {
            if (Csel) {
                alert('Informe o cliente.');
                document.forms[0].cliente.focus();
                return false;
            } else return true;
        }


        // Verificação de veiculo
        var select = document.getElementById("veiculo");
        var Vsel = select.options[select.selectedIndex].value;
        function verificaVeiculo() {
            if (Vsel) {
                alert('Informe o seu veículo.');
                document.forms[0].veiculo.focus();
                return false;
            } else {
                return true;
            }
        }

        // Verificação de pagamento
        var select = document.getElementById("pagamento");
        var Psel = select.options[select.selectedIndex].value;
        function verificaPagamento() {
            if (Psel) {
                alert('Informe o tipo de pagamento');
                document.forms[0].pagamento.focus();
                return false;
            } else {
                return true;
            }
        }
    });
});
