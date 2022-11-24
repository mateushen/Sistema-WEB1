window.addEventListener('load', () => {

    const forms = document.querySelectorAll('.exclui');
    const id = document.querySelectorAll('.delete');

    for (let i = 0; i < forms.length; i++) {
        forms[i].addEventListener('submit', (event) => {
            event.preventDefault();

            const dados = new FormData();
            dados.append('idFuncionario', id[i].value);

            const config = {
                method: 'POST',
                body: dados
            };
            fetch('excluiFuncionario.php', config)
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    console.log(json);
                    let p = document.getElementById('msg');
                    if (json.status == 'ok') {
                        alert(json.mensagem)
                        window.open('listagemFuncionario.php', '_self');
                    } else {
                        p.innerText = json.mensagem;
                        p.style.color = 'red';
                    }
                })
        });
    }
});
