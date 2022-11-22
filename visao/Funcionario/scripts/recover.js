window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault(verifica());

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaCPF();
            if (ok) {
                ok = verificaEmail();
                if (ok) {
                    const dados = new FormData(document.forms[0]);

                    const config = {
                        method: 'POST',
                        body: dados
                    };
                    fetch('recuperaFuncionario.php', config)
                        .then((response) => {
                            return response.json();
                        })
                        .then((json) => {
                            console.log(json);
                            let p = document.getElementById('msg');
                            if (json.status == 'ok') {
                                window.open('formTrocaSenha.php', '_self')
                            } else {
                                p.innerText = json.mensagem;
                                p.style.color = 'red';
                            }
                        })
                } else return false;
            } else return false;
        }
    });

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
});
