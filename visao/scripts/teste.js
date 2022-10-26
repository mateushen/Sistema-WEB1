window.addEventListener('load', () => {
    document.getElementById('estado').addEventListener('change', () => {
        const estado = document.getElementById('estado').value;
        fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado+'/municipios')
        .then((retorno) => {
            return retorno.json();

        })
        .then((json) => {
            console.log(json[0].nome);
        })
    });
});