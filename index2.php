<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste JS</title>
    <script>
        window.addEventListener('load', () => {
            fetch('estados.php')
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    let estado = document.getElementById('estado');
                    estado.innerHTML = '';
                    for (let i = 0; i < json.length; i++) {
                        let option = document.createElement('option');
                        option.value = json[i].sigla;
                        option.innerText = json[i].nome;
                        estado.append(option);
                    }
                });
        });

        window.addEventListener('load', () => {
            document.getElementById('estado').addEventListener('change', () => {
                const estado = document.getElementById('estado').value;
                fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + estado + '/municipios')
                    .then((response) => {
                        return response.json();
                    })
                    .then((json) => {
                        let cidade = document.getElementById('cidade');
                        console.log(cidade);
                        cidade.innerHTML = '';
                        for (let i = 0; i < json.length; i++) {
                            let option = document.createElement('option');
                            option.innerText = json[i].nome;
                            cidade.append(option);
                        }
                    });
            });
        });
    </script>
</head>

<body>
    <form>
        <label for="estado">Estado: </label>
        <select name="estado" id="estado">

        </select>
        <br>

        <label for="cidade">Cidade: </label>
        <select name="cidade" id="cidade">

        </select>
    </form>
</body>

</html>