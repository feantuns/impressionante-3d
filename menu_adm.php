<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Impressionante 3D - ADM</title>

    <?php
    //faz conexao com o banco de dados
    include 'conecta.php';


    $consulta = mysqli_query($conexao, "SELECT * FROM usuario"); // query que busca todos os dados da tabela USUARIO
    while ($campo = mysqli_fetch_array($consulta)) { // laço de repetiçao que vai trazer todos os resultados da consulta
        if ($campo['nome'] == $campo['login_verificacao']) {
            $login_verificacao = $campo['nome'];
        }
    }
    ?>

    <style>
        #for_container {
            background-color: aliceblue;
            border-radius: 15px;
        }

        p {
            color: white;
            text-align: center;
        }
    </style>

    <script>
        $('#meuModal').on('shown.bs.modal', function() {
            $('#meuInput').trigger('focus')
        })
    </script>


</head>

<body>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="css-index-php.css" />



    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Impressionante 3D</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link" href="#">Quem somos</a>
                    <a class="nav-item nav-link" href="#">Produtos</a>
                    <a class="nav-item nav-link" href="#">Calculadora</a>
                    <a class="nav-item nav-link active" href="#">Menu do administrador</a>
                </div>
            </div>
            <a style="color: white; slign:center;">Bem vindo(a), <?php echo "$login_verificacao"; ?></a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>

                        Na área do administrador você conseguirá incluir clientes e vendedores

                    </p>

                </div>
            </div>



            <div class="row">
                <div class="col">

                    <center>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_vendedor">
                            Adicionar Vendedor
                        </button>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_cliente">
                            Adicionar Cliente
                        </button>
                    </center>
                </div>
            </div>
        </div>
    </main>




    <!-- Modal -->
    <div class="modal fade" id="modal_vendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Vendedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <form action="insere_vendedor.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <label>Nome:</label> <input class="form-control" type="text" name="nome_vend" id="nome_vend" onkeyup="valida_vendedor()">
                            </div>
                            <div class="col">
                                <label>CPF:</label> <input class="form-control" type="number" name="cpf_vend" id="cpf_vend" onkeyup="valida_vendedor()">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Endereço</label> <input class="form-control" type="text" name="end_vend" id="end_vend" onkeyup="valida_vendedor()">
                                <label>Cidade</label> <input class="form-control" type="text" name="cidade_vend" id="cidade_vend" onkeyup="valida_vendedor()">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>CEP</label> <input class="form-control" type="text" name="cep_vend" id="cep_vend" placeholder="13183-130" onkeyup="valida_vendedor()">
                            </div>
                            <div class="col">
                                <label>UF</label> <input class="form-control" type="text" name="uf_vend" id="uf_vend" maxlength="2" placeholder="SP" onkeyup="valida_vendedor()">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label> DDD </label> <input type="number" class="form-control" name="ddd_vend" id="ddd_vend" placeholder="(019)" style="width:45%" onkeyup="valida_vendedor()">
                            </div>
                            <div class="col">
                                <label> Telefone </label> <input type="number" class="form-control" name="numeroTel_vend" id="numeroTel_vend" maxlength="9" onkeyup="valida_vendedor()">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label> Salário Base </label> <input type="number" class="form-control" name="salario_base" id="salario_base" onkeyup="valida_vendedor()">
                            </div>
                            <div class="col mb-2">
                                <label> Taxa de Comissão </label> <input type="number" class="form-control" name="taxa_comissao" id="taxa_comissao" onkeyup="valida_vendedor()">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="reset" class="btn btn-secondary">limpar</button>
                            <input type="submit" class="btn btn-primary" value="Adicionar" id="adicionar_vendedor" disabled>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <form action="insere_cliente.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <label>Nome:</label> <input class="form-control" type="text" name="nome_cliente" id="nome_cliente" onkeyup="valida_cliente()">
                            </div>
                            <div class="col">
                                <label>CPF:</label> <input class="form-control" type="number" name="cpf_cliente" id="cpf_cliente" onkeyup="valida_cliente()">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Endereço</label> <input class="form-control" type="text" name="end_cliente" id="end_cliente" onkeyup="valida_cliente()">
                                <label>Cidade</label> <input class="form-control" type="text" name="cidade_cliente" id="cidade_cliente" onkeyup="valida_cliente()">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>CEP</label> <input class="form-control" type="text" name="cep_cliente" id="cep_cliente" placeholder="13183-130" onkeyup="valida_cliente()">
                            </div>
                            <div class="col">
                                <label>UF</label> <input class="form-control" type="text" name="uf_cliente" id="uf_cliente" maxlength="2" placeholder="SP" onkeyup="valida_cliente()">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label> DDD </label> <input type="number" class="form-control" name="ddd_cliente" id="ddd_cliente" placeholder="(019)" style="width:45%" onkeyup="valida_cliente()">
                            </div>
                            <div class="col">
                                <label> Telefone </label> <input type="number" class="form-control" name="numeroTel_cliente" id="numeroTel_cliente" maxlength="9" onkeyup="valida_cliente()">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <label> Limite de Crédito </label> <input type="number" class="form-control" name="lim_cred" id="lim_cred" onkeyup="valida_cliente()">
                            </div>
                            <div class="col mb-2">
                                <label> Crédito Disponível </label> <input type="number" class="form-control" name="cred_disp" id="cred_disp" onkeyup="valida_cliente()">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="reset" class="btn btn-secondary">limpar</button>
                            <input type="submit" class="btn btn-primary" value="Adicionar" id="adicionar_cliente" disabled>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    function valida_cliente() {

        var cpf_cliente = document.getElementById('cpf_cliente').value;
        var nome_cliente = document.getElementById('nome_cliente').value;
        var end_cliente = document.getElementById('end_cliente').value;
        var cidade_cliente = document.getElementById('cidade_cliente').value;
        var cep_cliente = document.getElementById('cep_cliente').value;
        var uf_cliente = document.getElementById('uf_cliente').value;
        var ddd_cliente = document.getElementById('ddd_cliente').value;
        var numeroTel_cliente = document.getElementById('numeroTel_cliente').value;
        var lim_cred = document.getElementById('lim_cred').value;
        var cred_disp = document.getElementById('cred_disp').value;

        if (nome_cliente != "" && cpf_cliente != "" && end_cliente != "" && cidade_cliente != "" && cep_cliente != "" && uf_cliente != "" && ddd_cliente != "" && numeroTel_cliente != "" && lim_cred != "" && cred_disp != "") {
            btn_adiciona = document.getElementById('adicionar_cliente').disabled = false;
        }
    }

    function valida_vendedor() {
        var cep_vendedor = document.getElementById('cep_vend').value;
        var cidade_vendedor = document.getElementById('cidade_vend').value;
        var cpf_vendedor = document.getElementById('cpf_vend').value;
        var endereco_vendedor = document.getElementById('end_vend').value;
        var nome_vendedor = document.getElementById('nome_vend').value;
        var sal_base_vendedor = document.getElementById('salario_base').value;
        var taxa_comissao_vendedor = document.getElementById('taxa_comissao').value;
        var telefone_ddd_vendedor = document.getElementById('ddd_vend').value;
        var telefone_numero_vendedor = document.getElementById('numeroTel_vend').value;
        var uf_vendedor = document.getElementById('uf_vend').value;

        if (cep_vendedor != "" && cidade_vendedor != "" && cpf_vendedor != "" && endereco_vendedor != "" && nome_vendedor != "" && sal_base_vendedor != "" && taxa_comissao_vendedor != "" && telefone_ddd_vendedor != "" && telefone_numero_vendedor != "" && uf_vendedor != "") {
            btn_adiciona = document.getElementById('adicionar_vendedor').disabled = false;
        }
    }
</script>


<?
mysqli_close($conexao);
?>
