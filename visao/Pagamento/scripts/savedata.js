window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', () => {
        event.preventDefault(verifica());

        // Verifica se o input está preenchido corretamente
        function verifica() {
            var ok = verificaTipo();
            if (ok) {
                const dados = new FormData(document.forms[0]);

                const config = {
                    method: 'POST',
                    body: dados
                };
                fetch('../Pagamento/cadastroPagamento.php', config)
                    .then((response) => {
                        return response.json();
                    })
                    .then((json) => {
                        console.log(json);
                        let p = document.querySelector('p');
                        if (json.status == 'ok') {
                            alert('Dados gravados com sucesso!')
                            document.forms[0].reset();
                            p.innerText = '';
                        } else {
                            p.innerText = json.mensagem;
                            p.style.color = 'red';
                        }
                    })
            } else return false;
        }

        // Verificação de tipo de pgto
        function verificaTipo() {
            if (document.forms[0].tipo_pagamento.value.length < 3) {
                alert('Tipo de pagamento inválido.');
                document.forms[0].tipo_pagamento.focus();
                return false;
            } else {
                return true;
            }
        }
    });
});
