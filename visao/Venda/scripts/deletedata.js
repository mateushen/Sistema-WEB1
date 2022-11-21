window.addEventListener('load', () => {

    const forms = document.forms;

    for (let i = 0; i < forms.length; i++) {
        forms[i].addEventListener('submit', (event) => {
            event.preventDefault();

            const dados = new FormData();
            dados.append('idVenda', document.getElementById("idVenda").value)

            console.log(dados);

            const config = {
                method: 'POST',
                body: dados
            };
            fetch('excluiVenda.php', config)
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    console.log(json);
                    let p = document.getElementById('msg');
                    if (json.status == 'ok') {
                        alert(json.mensagem)
                        window.open('listagemVenda.php', '_self');
                    } else {
                        p.innerText = json.mensagem;
                        p.style.color = 'red';
                    }
                })
        });
    }
});
