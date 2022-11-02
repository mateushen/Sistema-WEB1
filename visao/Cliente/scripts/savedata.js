window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', () => {
        event.preventDefault(verifica());

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaNome();
            if (ok) {
                ok = verificaCPF();
                if (ok) {
                    ok = verificaTelefone();
                } if (ok) {
                    const dados = new FormData(document.forms[0]);

                    const config = {
                        method: 'POST',
                        body: dados
                    };
                    fetch('../Cliente/cadastroCliente.php', config)
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
        }

        // Verificação de nome
        function verificaNome() {
            if (document.forms[0].nome.value.length < 3) {
                alert('Informe o nome.');
                document.forms[0].nome.focus();
                return false;
            } else {
                return true;
            }
        }

        // Verificação de cpf
        function verificaCPF() {
            if (document.forms[0].cpf.value.length != 14) {
                alert('CPF inválido.');
                document.forms[0].cpf.focus();
                return false;
            } else {
                return true;
            }
        }

        // Verificação de telefone
        function verificaTelefone() {
            if (document.forms[0].telefone.value.length != 14) {
                alert('Número de telefone inválido.');
                document.forms[0].telefone.focus();
                return false;
            } else {
                return true;
            }
        }
    });
});
