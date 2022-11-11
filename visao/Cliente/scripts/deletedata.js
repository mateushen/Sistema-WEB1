window.addEventListener('load', () => {

    document.forms[0].addEventListener('submit', () => {
        event.preventDefault();

        const dados = new FormData(document.forms[0]);

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
                    p.innerText = '';
                    window.open('listagemCliente.php', '_self');
                } else {
                    p.innerText = json.mensagem;
                    p.style.color = 'red';
                }
            })
    });
});
