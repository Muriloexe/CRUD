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

//variavel
$nome = $_POST['nome'];

//query
$sql_consultar = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome='$nome'");

//descarregando a querry em um vetor
$result=mysqli_fetch_array($sql_consultar);

//query final

if($result == null || $_POST['nome'] == null){
    echo"
    <script>
    alert('Não existe usuário com esses dados')
    </script>
    ";
}else{
    while($result){
        $id= $result['id'];
        $nomeuser= $result['nome'];
        $emailuser= $result['email'];

        echo "<br>Id:$id <br>";
        echo "Nome:$nomeuser <br>";
        echo "Email:$emailuser <br>";
        break; 
    }
   
    }


?>