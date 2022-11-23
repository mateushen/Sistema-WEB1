window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault(verifica());

        function verifica() {
            const dados = new FormData();

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
                    let p = document.getElementById('msg');
                    if (json.status == 'ok') {
                        alert(json.mensagem);
                        window.location.reload();
                    } else {
                        p.innerText = json.mensagem;
                        p.style.color = 'red';
                    }
                })
        }
    });
});
