<?php
    include 'conecta.php';
    
    $cpf = $_POST['cpf_cliente'];
    $nome = $_POST['nome_cliente'];
    $endereco = $_POST['end_cliente'];
    $cidade = $_POST['cidade_cliente'];
    $cep = $_POST['cep_cliente'];
    $uf = $_POST['uf_cliente'];
    $telefone_ddd = $_POST['ddd_cliente'];
    $telefone_numero = $_POST['numeroTel_cliente'];
    $limite_credito = $_POST['lim_cred'];
    $credito_disponivel = $_POST['cred_disp'];

    

    $insert = mysqli_query($conexao, "INSERT INTO `cliente`(`cpf`, `nome`, `endereco`, `cidade`, `cep`, `uf`, `telefone_ddd`, `telefone_numero`, `limite_credito`, `limite_disponivel`) VALUES  ('$cpf', '$nome','$endereco', '$cidade', '$cep', '$uf', '$telefone_ddd', '$telefone_numero', '$limite_credito', '$credito_disponivel')");
   if($insert == TRUE){
        echo "<script>alert('deu bom')</script>";
   }
   else{
        echo "<script>alert('deu ruim')</script>";
    }

   mysqli_close($conexao);
