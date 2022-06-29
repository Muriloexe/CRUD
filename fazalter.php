<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTERAR</title>

    <?php
    include('conexao.php');
    //variável de verificação para comparar com os dados da mesma
    $id = $_GET['id'];

    $sql_consultar = mysqli_query($conexao, "SELECT * FROM alunos WHERE id='$id'");

    $resultado = mysqli_fetch_array($sql_consultar);

    ?>
</head>
<body>
    <h1>Alter</h1>
    <br>
    <p>Tela de alteração de dados, para alterar, o dado deve existir, lembre-se disso</p>
    <br>
    <form method="POST" action="ALTER.php">
    <legend>Digite os dados da conta para alterar</legend>
    <fieldset>
        <input type="hidden" name="id" value="<?=$resultado[0] ?>">

        Nome:<input type="text" name="nome" value="<?=$resultado[1] ?>">
            <br>
        Senha:<input type="password" name="senha" value="<?=$resultado[2] ?>">
            <br>
        Email:<input type="email" name="email" value="<?=$resultado[3] ?>">
            <br>
        Adm?:<input type="number" name="ADM" value="<?=$resultado[4] ?>">
        <br>
        <input type="submit" value="ALTER">
        <br>
        <p>Caso queira voltar, <a href="User_adm.php">pressione</a>
    </fieldset>
    </form>
</body>
</html>