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
    </style>

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
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link" href="#">Quem somos</a>
                    <a class="nav-item nav-link" href="#">Produtos</a>
                    <a class="nav-item nav-link" href="#">Calculadora</a>
                    <a class="nav-item nav-link" href="menu_adm.php">Menu do administrador</a>
                </div>
            </div>
            <a style="color: white; slign:center;">Bem vindo(a), <?php echo "$login_verificacao"; ?></a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="card-group mt-4 col-center " style="width:100%;">
                <div class="card ml-4 mr-4 mt-3">
                    <img class="card-img-top" src="imagens/tinkercad.jpg" alt="Imagem do logo do tinkercad">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title">Tinkercad</h5>
                        <p class="card-text">Ferramenta de modelagem 3D básica online.</p>
                        <a href="https://www.tinkercad.com/" class="btn btn-primary">Visitar</a>

                    </div>
                </div>

                <div class="card ml-4 mr-4 mt-3">
                    <img class="card-img-top" src="imagens/thingiverse.jpg" alt="Imagem do logo do site thingiverse">
                    <div class="card-body">
                        <hr>

                        <h5 class="card-title">Thingiverse</h5>
                        <p class="card-text">Thingiverse, atualmente o principal site de buscas de STL.</p>
                        <a href="https://www.thingiverse.com/" class="btn btn-primary">Visitar</a>

                    </div>
                </div>

                <div class="card ml-4 mr-4 mt-3 ">
                    <img class="card-img-top" src="imagens/stlfinder.png" alt="Logo do site STLFinder">
                    <div class="card-body">
                        <hr>

                        <h5 class="card-title">STL Finder</h5>
                        <p class="card-text">STL Finder, uma boa alternativa na busca de um STL.</p>
                        <a href="https://www.stlfinder.com/" class="btn btn-primary">Visitar</a>
                    </div>
                </div>

                <div class="card ml-4 mr-4 mt-3 ">
                    <img class="card-img-top" src="imagens/3d-printer.png" alt="Imagem do site TinkerCad">
                    <div class="card-body ">
                        <hr>
                        <h5 class="card-title">Calculadora de preços</h5>
                        <p class="card-text">Calculadora de preços de impressão 3D.</p>
                        <a href="https://www.tinkercad.com/" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>

            <br>

            <div class="container" id="for_container">
                <div class="form-group">
                    <div class="row mt-4">
                        <div class="col-sm">
                            <label for="num_pedido"> Numero do pedido </label>
                            <?php
                                $consulta_id_pedido = mysqli_query($conexao, "SELECT MAX(idPedido) FROM pedido LIMIT 1");
                                $idPedido = mysqli_fetch_array($consulta_id_pedido)[0] + 1;
                                echo "<script>console.log(' . $idPedido . ')</script>";
                                echo "                                           
                                        <input type='number' class='form-control' id='num_pedido' value='$idPedido'>
                                    ";
                            ?>                            
                        </div>

                        <div class="col-sm">
                            <label for="Num_pedido"> Data do Pedido </label>
                            <input type="date" class="form-control" id="data_pedido" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-sm">
                            <label for="cod_cliente"> Código do Cliente </label>
                            <div class="row">
                                <div class="col">
                                    <div class="row ml-0">
                                        <input type="number" class="form-control" id="cod_cliente" placeholder="0000" style="width:20%;"> <i class="fas fa-search mt-2 ml-2 mr-2"></i>
                                        <input type="text" class="form-control ml-4" id="nome_cliente" style="width:72%;" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-sm">
                            <label for="cod_cliente"> Código do Vendedor </label>
                            <div class="row">
                                <div class="col">
                                    <div class="row ml-0">
                                        <input type="number" class="form-control" id="cod_vendedir" placeholder="0000" style="width:20%;"> <i class="fas fa-search mt-2 ml-2 mr-2"></i>
                                        <input type="text" class="form-control ml-4" id="nome_vendedir" style="width:72%;" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="cod_prod">Código do produto</label> <i class="fas fa-search mt-2 ml-2 mr-2"></i>
                            <input type="number" class="form-control" id="cod_produto">
                        </div>
                        <div class="col">
                            <label for="qtd_vendida" style="margin-top:0.5%;">Quantidade Vendida</label>
                            <input type="number" class="form-control" id="qtd_vendida">
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="row">
                        <div class="col">
                            <center>
                                <button type="button" class="btn btn-success mr-1"> <i class="fas fa-plus"></i> Adicionar Item </button>
                                <button type="button" class="btn btn-danger" ml-1> <i class="fas fa-minus"></i> Remover Item </button>
                            </center>

                            <div class="row mt-4">
                                <div class="col" id="tabela">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Descrição</th>
                                                <th scope="col">Preço Unitário</th>
                                                <th scope="col">Quantidade Vendida</th>
                                                <th scope="col">SubTotal</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $consulta_prod = mysqli_query($conexao, "SELECT A.idProduto, A.descricao, A.precoUnit, B.qtdVendida FROM produto A, item_pedido B WHERE B.idPedido = $idPedido");
                                            while ($produto = mysqli_fetch_array($consulta_prod)) {
                                                echo "                                            
                                                    <tr>
                                                        <th scope='ro'>" . $produto['idProduto'] . "</th>
                                                        <td>" . $produto['descricao'] . "</td>
                                                        <td>" . $produto['precoUnit'] . "</td>
                                                        <td>" . $produto['qtdVendida'] . "</td>
                                                    </tr>
                                                ";
                                            } 
                                        ?>
                                </div>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                    <button type="button" class="btn btn-success mr-1 mb-4"> <i class="fas fa-plus"></i> Novo </button>
                    <button type="button" class="btn btn-primary mr-1 mb-4" ml-1> <i class="far fa-save"></i> Salvar </button>
                    <button type="button" class="btn btn-danger mr-1 mb-4"> <i class="far fa-trash-alt"></i> Excluir </button>
                    <button type="button" class="btn btn-warning mr-1 mb-4" ml-1> <i class="fas fa-ban"></i> Cancelar </button>
                    <button type="button" class="btn btn-info mr-1 mb-4"> <i class="far fa-window-close"></i> Sair </button>

                </center>
            </div>


        </div>
    </main>
    <script>
    </script>
    <?
    mysqli_close($conexao);
    ?>
</body>
