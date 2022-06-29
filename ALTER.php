<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado ALTER</title>
</head>
<body>
    
<?php

include('conexao.php');

//passando as variáveis do forumlário para outras variáveis

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$adm = $_POST['ADM'];

//query ALTER

$sql_ALTER= mysqli_query($conexao, "UPDATE alunos SET nome='$nome', senha='$senha', email='$email', adm='$adm' WHERE id='$id'");

if($sql_ALTER == false){
    echo"<script>
    alert('Falha ao alterar os dados! Tente novamente');
    </script>"
}else{
    echo"<script>
    alert('O Usuário teve seus dados alterados no banco!');
    </script>"
}
?>
    <p>Caso ocorra um erro, volte a página de <a href="fazeralter.php">alteração</a></p>
    <br>

</body>
</html>
