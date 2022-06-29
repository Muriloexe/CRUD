<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Comum</title>

    <script>

        function consulta(){
            if(document.form.nome == ''){
            alert('Preencha o campo faltante');
					document.form.nome.focus();
            }else{
                document.form.action='./READ.php';
					document.form.submit();
            }
        }
        </script>
</head>
<body>
    <h1>Bem vindo usuário</h1>
    <br>
    <p>Aqui só é possível consultar os dados</p>
    <br>
        <div>
            <legend>Consulta</legend>
            <fieldset>
                <form method="post" name=form>
                    <p>Busque um nome de registro:</p>
                    Nome:<input type="text" name="nome">
                    <br>
                    <br>
                    <input type="button" value="Consultar" onclick="consulta();">

                </form>  
            </fieldset>
            
        </div>
</body>
</html>