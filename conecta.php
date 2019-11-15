<?php
    $usuario = 'root';
    $senha = '';
    $db_name = 'impressionante3d';
    $host = '127.0.0.1';

    $conexao = mysqli_connect($host, $usuario, $senha, $db_name);

    if($conexao){ 
               echo"<script> console.log('sucesso ao conectar com o banco de dados!');</script>";

    }else{
        echo"<script> alert('Impossível a conexão com o banco de dados.');</script>";
    }
?>