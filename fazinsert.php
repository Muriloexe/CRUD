<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSERÇÃO DE NOVOS USUÁRIOS</title>
    <?php
include "conexao.php";
?>
    <script>
    //função pra validar
    function inserir(){
        if(document.form.nome == ''){
            alert('Preencha o campo faltante');
					document.form.nome.focus();

			}else if(document.form.email == ''){
                alert('Preencha o campo faltante');
					document.form.email.focus();

            }else if(document.form.endereco == ''){
                alert('Preencha o campo faltante');
					document.form.endereco.focus();

            }else if(document.form.telefone == ''){
                alert('Preencha o campo faltante');
					document.form.telefone.focus();

            }else if(document.form.senha == ''){
                alert('Preencha o campo faltante');
					document.form.senha.focus();

                }else if(document.form.Adm == ''){
                alert('Preencha o campo faltante');
					document.form.Adm.focus();
            }else{
					document.form.action='./insert.php';
					document.form.submit();
				}
                
             //Função que volta para tela original após o envio dos dados do formulário
    }

    </script>

</head>
<body>

<div>
    <form method="POST" name="form">
        <fieldset>
            <legend>INSERÇÃO</legend>
                <p>Insira os dados abaixo:</p>
                <br>
                    Nome: &nbsp <input type="text" name="nome">
                    <br>
                        Email: &nbsp <input type="email" name="email">
                        <br>
                            Endereco:<input type="text" name="endereco">
                            <br>
                                Telefone:<input type="number" name="telefone">
                                <br>
                                Senha: &nbsp<input type="password" name="senha">
                                    <br>
                                        Adm?: &nbsp<input type=number name="Adm"> 
                                            <br>
                    <input type="button" value="Inserir" onclick="inserir();">
                    <input type="reset" value="Limpar">
        </fieldset>
    </form>
    <h3>Caso queira, volte a <a href="User_adm.php">Tela de Adm</a><h3>
</div>
    
</body>
</html>