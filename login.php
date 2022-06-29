<?php

include 'conexao.php';
if (!$conexao)
{
    die('Problema na conexao: ' . mysqli_error($conexao));
}
//banco selecioando
$db_selected = mysqli_select_db($conexao,'Banco_Att');
	if (!$db_selected)
	{
		die ('Erro ao abrir o banco Banco_Att : ' . mysqli_error($conexao));
    }
//processo de conexão

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$Adm = $_POST['Adm'];

$sql_login = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome='$nome' AND senha='$senha'");
$row=mysqli_fetch_array($sql_login);
//query

if($row != null && $_POST['Adm'] == 1){
    echo"<script>
    alert('Adm Logado')
    </script>";
    header('location:User_adm.php');
}else if($row == null || $_POST['Adm'] == 0){
    echo"<script>
    alert('Usuário Logado')
    </script>";
    header('location:User_user.php');
}else{
    echo"<script>
    alert(Erro, user não cadastrado, voltar ao início)
    </script>";
    header('login.php');
}

?>