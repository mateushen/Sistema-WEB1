window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault(verifica());

        // Verifica se os inputs estão preenchidos corretamente
        function verifica() {
            var ok = verificaPlaca();
            if (ok) {
                ok = verificaRenavam();
                if (ok) {
                    ok = verificaMarca();
                    if (ok) {
                        ok = verificaModelo();
                        if (ok) {
                            ok = verificaCor();
                            if (ok) {
                                ok = verificaAno();
                                if (ok) {
                                    const dados = new FormData(document.forms[0]);

                                    const config = {
                                        method: 'POST',
                                        body: dados
                                    };
                                    fetch('editaVeiculo.php', config)
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
                                                window.open('listagemVeiculo.php', '_self');
                                            } else {
                                                p.innerText = json.mensagem;
                                                p.style.color = 'red';
                                            }
                                        })
                                } else return false;
                            } else return false;
                        } else return false;
                    } else return false;
                } else return false;
            } else return false;
        }
    });

    // Verificação de placa
    function verificaPlaca() {
        if (document.forms[0].placa.value.length != 8) {
            alert('Placa inválida.');
            document.forms[0].placa.focus();
            return false;
        } else {
            return true;
        }
    }

    // Verificação de renavam
    function verificaRenavam() {
        if (document.forms[0].renavam.value.length != 11) {
            alert('Renavam inválido.');
            document.forms[0].placa.focus();
            return false;
        } else {
            return true;
        }
    }

    // Verificação de marca
    function verificaMarca() {
        if (document.forms[0].marca.value.length <= 3) {
            alert('Marca inválida.');
            document.forms[0].marca.focus();
            return false;
        } else {
            return true;
        }
    }

    // Verificação de modelo
    function verificaModelo() {
        if (document.forms[0].modelo.value.length <= 3) {
            alert('Modelo inválido.');
            document.forms[0].modelo.focus();
            return false;
        } else {
            return true;
        }
    }

    // Verificação de cor
    function verificaCor() {
        if (document.forms[0].cor.value.length <= 3) {
            alert('Cor inválida.');
            document.forms[0].cor.focus();
            return false;
        } else {
            return true;
        }
    }

    // Verificação de ano
    function verificaAno() {
        if (document.forms[0].ano.value.length <= 3) {
            alert('Ano inválido.');
            document.forms[0].ano.focus();
            return false;
        } else {
            return true;
        }
    }
});
