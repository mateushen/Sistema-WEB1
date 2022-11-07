window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', () => {
        event.preventDefault(verifica());

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaCPF();
            if (ok) {
                ok = verificaSenha();
                if (ok) {
                    const dados = new FormData(document.forms[0]);

                    const config = {
                        method: 'POST',
                        body: dados
                    };
                    fetch('../Gerente/loginGerente.php', config)
                        .then((response) => {
                            return response.json();
                        })
                        .then((json) => {
                            console.log(json);
                            let p = document.getElementById('p3');
                            if (json.status == 'ok') {
                                alert(json.mensagem)
                                window.open('../PainelGerente/', '_self')
                            } else {
                                p.innerText = 'Dados inválidos';
                                p.style.color = 'red';
                            }
                        })
                } else return false;
            } else return false;
        }

        // Verificação de cpf
        function verificaCPF() {
            if (document.forms[0].cpf.value.length != 14) {
                let p = document.getElementById('p1');
                p.innerText = 'CPF inválido';
                p.style.color = 'red';
                document.forms[0].cpf.focus();
                return false;
            } else {
                return true;
            }
        }

        // Verificação de senha
        function verificaSenha() {
            if (document.forms[0].senha.value.length != 6) {
                let p = document.getElementById('p2');
                p.innerText = 'A senha deve conter 6 caracteres';
                p.style.color = 'red';
                document.forms[0].senha.focus();
                return false;
            } else {
                return true;
            }
        }
    });
});
