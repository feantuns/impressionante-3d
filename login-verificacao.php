<?php

include 'conecta.php';

if (!empty($_POST["usuario"])) {
    $usuario = $_POST['usuario'];
}

if (!empty($_POST["senha"])) {
    $senha = $_POST['senha'];
}

$consulta = mysqli_query($conexao,"SELECT * FROM usuario WHERE nome = '$usuario'"); // query que busca todos os dados da tabela PRODUTO

while ($campo = mysqli_fetch_array($consulta)) { // laço de repetiçao que vai trazer todos os resultados da consulta
    if($usuario == $campo['nome'] && $senha == $campo['pwd'] && $campo['tipo_user'] == 1){
        $update = mysqli_query($conexao, "UPDATE usuario SET login_verificacao='$usuario' where nome='$usuario'");
        
        header("Location: http://localhost/impressionante3D-ADM/index-adm-verificado.php");
    }
    else{
        header("Location: http://localhost/impressionante3D-ADM/login.php");
    }
}

mysqli_close($conexao);
?>