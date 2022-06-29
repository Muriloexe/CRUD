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
    	//Executar instrução SQL
	$result=mysqli_query($conexao,"select * from alunos where nome='".$_REQUEST["nome"]."'");
    $row=mysqli_fetch_array($result);

    if (!$row['id'])
	{
		$strSql = "insert into alunos (id,nome,endereco,email,telefone,senha,Adm) values (NULL,";
		$strSql .= "'" . $_POST["nome"] . "',";
		$strSql .= "'" . $_POST["endereco"] . "',";
		$strSql .= "'" . $_POST["email"] . "',";
		$strSql .= "'" . $_POST["telefone"] . "',";
        $strSql .= "'" . $_POST["senha"] . "',";
        $strSql .= "'" . $_POST["Adm"] . "')";
		$resultado = mysqli_query($conexao,$strSql);	
		
			echo "<script type='text/javascript'>	
			  alert('Usuario Cadastrado com sucesso !!!');	
			  location.href='form.php'
			</script>";
		
		
	}
	else
	{
		echo "<script type='text/javascript'>	
		         alert('Usuario Existente... Tente outro...');	
	          
			 </script>
			 ";
     } 
     mysqli_free_result($result);
	$fechou = mysqli_close($conexao);
	header('location:teladelogin.php')
?>