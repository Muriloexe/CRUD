<?php
//nova conexão:

$conexao = mysqli_connect ('localhost', 'root', '','Banco_Att');

//validacao da conexao:

if(!$conexao){
    die('Problema de conexão: '.mysqli_connect_error($conexao)); //possível erro
}else{
    echo('Conexão estabelecida');
}

?>