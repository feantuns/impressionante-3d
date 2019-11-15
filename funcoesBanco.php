<?php

include 'conecta.php';

$consulta = mysqli_query($conexao,"SELECT * FROM usuario"); // query que busca todos os dados da tabela PRODUTO

while ($campo = mysqli_fetch_array($consulta)) { // laço de repetiçao que vai trazer todos os resultados da consulta

    $usuarioLogado = $campo['nome']; 
    if($usuarioLogado == $usuario){
        echo "<script>alert('<?php echo `$usuarioLogado` ?>');</script>";
    }
}




$consulta_prod = mysqli_query($conn, "SELECT * FROM produtos");

while($produto = mysqli_fetch_array($consulta_prod)){
    echo "<script>alert('<?php echo `$produto` ?>');</script>";
}






?>