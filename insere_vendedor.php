<?php
    include 'conecta.php';

    
    $cep = $_POST['cep_vend'];
    $cidade = $_POST['cidade_vend'];
    $cpf = $_POST['cpf_vend'];
    $endereco = $_POST['end_vend'];
    $nome = $_POST['nome_vend'];
    $sal_base = $_POST['salario_base'];
    $taxa_comissao = $_POST['taxa_comissao'];
    $telefone_ddd = $_POST['ddd_vend'];
    $telefone_numero = $_POST['numeroTel_vend'];
    $uf = $_POST['uf_vend'];

    
    $insert = mysqli_query($conexao, "INSERT INTO vendedor (idVendedor, cpf, nome, endereco, cidade, cep, uf, telefone_ddd, telefone_numero, salario_base, taxa_comissao) VALUES ('','$cpf', '$nome','$endereco', '$cidade', '$cep', '$uf', '$telefone_ddd', '$telefone_numero', '$sal_base', '$taxa_comissao')");
        
    if($insert == TRUE){
        echo "<script>alert('deu bom')</script>";
    }
    else{
        echo "<script>alert('deu ruim')</script>";
    }

    mysqli_close($conexao);

    ?>