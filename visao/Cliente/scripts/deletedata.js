window.addEventListener('load', () => {

    const forms = document.querySelectorAll('.exclui');

    for (let i = 0; i < forms.length; i++) {
        forms[i].addEventListener('submit', (event) => {
            event.preventDefault();

            const dados = new FormData();
            dados.append('idCliente', document.getElementById("idCliente").value)

            const config = {
                method: 'POST',
                body: dados
            };
            fetch('excluiCliente.php', config)
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    console.log(json);
                    let p = document.getElementById('msg');
                    if (json.status == 'ok') {
                        alert(json.mensagem)
                        window.open('listagemCliente.php', '_self');
                    } else {
                        p.innerText = json.mensagem;
                        p.style.color = 'red';
                    }
                })
        });
    }
});
