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


    $consulta = mysqli_query($conexao, "SELECT * FROM usuario"); // query que busca todos os dados da tabela PRODUTO
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
            <a class="navbar-brand" href="#">Impressionante 3D</a>
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
                    <form method="_POST" action="#">
                        <div class="row">
                            <div class="col">
                                <label>Nome:</label> <input class="form-control" type="text" id="nome_vend">
                            </div>
                            <div class="col">
                                <label>CPF:</label> <input class="form-control" type="number" id="cpf_vend">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Endereço</label> <input class="form-control" type="text" id="end_vend">
                                <label>Cidade</label> <input class="form-control" type="text" id="cidade_vend">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>CEP</label> <input class="form-control" type="text" id="cep_vend" placeholder="13183-130">
                            </div>
                            <div class="col">
                                <label>UF</label> <input class="form-control" type="text" id="uf_vend" maxlength="2" placeholder="SP">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label> DDD </label> <input type="number" class="form-control" id="ddd_vend" placeholder="(019)" style="width:45%">
                            </div>
                            <div class="col">
                                <label> Telefone </label> <input type="number" class="form-control" id="ddd_vend" maxlength="9">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="reset" class="btn btn-secondary">limpar</button>
                            <button type="button" class="btn btn-primary">Adicionar</button>
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
                    <form method="_POST" action="#">
                        <div class="row">
                            <div class="col">
                                <label>Nome:</label> <input class="form-control" type="text" id="nome_vend">
                            </div>
                            <div class="col">
                                <label>CPF:</label> <input class="form-control" type="number" id="cpf_vend">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Endereço</label> <input class="form-control" type="text" id="end_vend">
                                <label>Cidade</label> <input class="form-control" type="text" id="cidade_vend">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>CEP</label> <input class="form-control" type="text" id="cep_vend" placeholder="13183-130">
                            </div>
                            <div class="col">
                                <label>UF</label> <input class="form-control" type="text" id="uf_vend" maxlength="2" placeholder="SP">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label> DDD </label> <input type="number" class="form-control" id="ddd_vend" placeholder="(019)" style="width:45%">
                            </div>
                            <div class="col">
                                <label> Telefone </label> <input type="number" class="form-control" id="ddd_vend" maxlength="9">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="reset" class="btn btn-secondary">limpar</button>
                            <button type="button" class="btn btn-primary">Adicionar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>

    <?
    mysqli_close($conexao);
    ?>
</body>