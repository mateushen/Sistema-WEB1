window.addEventListener('load', () => {

    const forms = document.querySelectorAll('.exclui');

    for (let i = 0; i < forms.length; i++) {
        forms[i].addEventListener('submit', (event) => {
            event.preventDefault();

            const dados = new FormData();
            dados.append('idVeiculo', document.getElementById("idVeiculo").value)

            const config = {
                method: 'POST',
                body: dados
            };
            fetch('excluiVeiculo.php', config)
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    console.log(json);
                    let p = document.getElementById('msg');
                    if (json.status == 'ok') {
                        alert(json.mensagem)
                        window.open('listagemVeiculo.php', '_self');
                    } else {
                        p.innerText = json.mensagem;
                        p.style.color = 'red';
                    }
                })
        });
    }
});
