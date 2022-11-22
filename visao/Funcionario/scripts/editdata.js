window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault(verifica());

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaNome();
            if (ok) {
                ok = verificaCPF();
                if (ok) {
                    ok = verificaEmail();
                    if (ok) {
                        ok = verificaSenha();
                        if (ok) {
                            const dados = new FormData(document.forms[0]);

                            const config = {
                                method: 'POST',
                                body: dados
                            };
                            fetch('editaFuncionario.php', config)
                                .then((response) => {
                                    return response.json();
                                })
                                .then((json) => {
                                    console.log(json);
                                    let p = document.getElementById('msg');
                                    if (json.status == 'ok') {
                                        alert(json.mensagem)
                                        document.forms[0].reset();
                                        p.innerText = '';
                                        window.open('listagemFuncionario.php', '_self');
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
    });

    // Verificação de nome
    function verificaNome() {
        if (document.forms[0].nome.value.length < 3) {
            alert('Informe o seu nome.');
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


    // Verificação de email
    function verificaEmail() {
        if (document.forms[0].email.value.length == 0) {
            alert('Informe o seu E-MAIL.');
            document.forms[0].email.focus();
            return false;
        } else {
            if (document.forms[0].email.value == ""
                || document.forms[0].email.value.indexOf('@') == -1
                || document.forms[0].email.value.indexOf('.') == -1) {
                alert("Informe um E-MAIL válido!");
                return false;
            } else return true
        }
    }

    // Verificação de senha
    function verificaSenha() {
        if (document.forms[0].senha.value.length != 6) {
            alert('A senha deve conter 6 caracteres.');
            document.forms[0].senha.focus();
            return false;
        } else {
            return true;
        }
    }
});
