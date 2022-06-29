<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <?php
include "conexao.php";
//include "funcoes.php";
?>
    <script>

    //função pra validar

    function validacao(){
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
					document.form.action='./INSERT.php';
					document.form.submit();
				}
				return false;
             //Função que volta para tela original após o envio dos dados do formulário
    }

    </script>

</head>
<body>

<div>
    <form method="POST" name="form">
        <fieldset>
            <legend>Cadastro</legend>
                Insira os dados abaxio para se cadastrar:
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
                    <input type="button" value="Inserir" onclick="validacao();">
                    <input type="reset" value="Limpar">
        </fieldset>
    </form>
    <h3>Após inserir os dados faça <a href="teladelogin.php">login</a><h3>
</div>
    
</body>
</html>