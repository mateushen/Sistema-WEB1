window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault(verifica());

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaSenha();
            if (ok) {
                const dados = new FormData(document.forms[0]);

                const config = {
                    method: 'POST',
                    body: dados
                };
                fetch('trocaSenha.php', config)
                    .then((response) => {
                        return response.json();
                    })
                    .then((json) => {
                        console.log(json);
                        let p = document.getElementById('msg');
                        if (json.status == 'ok') {
                            alert(json.mensagem)
                            window.open('../../main.php', '_self')
                        } else {
                            p.innerText = json.mensagem;
                            p.style.color = 'red';
                        }
                    })
            } else return false;
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
});
