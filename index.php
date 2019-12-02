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
            <a style="color: white; slign:center;">PScripts <i class="fas fa-heart" style="color: rgb(224, 36, 94)"></i></a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row mt-4 justify-content-end">
                <div class="col-md-4">
                    <h6>Feito por <b>Felipe Antunes</b> e <b>Matheus Figueiredo</b></h6>
                </div>
            </div>
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
                        <div class="col col-sm">
                            <div class="row align-items-end">
                                <div class="col-md-10">
                                    <label for="num_pedido"> Numero do pedido </label>
                                    <input type='number' class='form-control' name="num_pedido" id='num_pedido' value=''>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="onClickSearchPedido()"><i class="fas fa-search"></i></button>
                                </div>
                            </div>


                        </div>

                        <div class="col col-sm">
                            <label for="Num_pedido"> Data do Pedido </label>
                            <input type="date" class="form-control" id="data_pedido" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-sm">
                            <div class="row align-items-end">
                                <div class="col-md-3">
                                    <label for="cod_cliente"> Código do Cliente </label>
                                    <input type='number' class='form-control' name="cod_cliente" id='cod_cliente'>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-primary" onclick="onClickSearchCliente()"><i class="fas fa-search"></i></button>
                                </div>
                                <div class="col-md-8">
                                    <label for="nome_cliente"> Nome do Cliente </label>
                                    <input type='text' class='form-control' name="nome_cliente" id='nome_cliente' disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-sm">
                            <div class="row align-items-end">
                                <div class="col-md-3">
                                    <label for="cod_vendedor"> Código do Vendedor </label>
                                    <input type='number' class='form-control' name="cod_vendedor" id='cod_vendedor'>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-primary" onclick="onClickSearchVendedor()"><i class="fas fa-search"></i></button>
                                </div>
                                <div class="col-md-8">
                                    <label for="nome_vendedor"> Nome do Vendedor </label>
                                    <input type='text' class='form-control' name="nome_vendedor" id='nome_vendedor' disabled>
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
                                <button type="button" class="btn btn-success mr-1" onclick="onClickAddItem()" id="adiciona_item" disabled> <i class="fas fa-plus"></i> Adicionar Item </button>
                                <button type="button" class="btn btn-danger ml-1" onclick="onClickRemoveItem()" id="remove_item" disabled> <i class="fas fa-minus"></i> Remover Item </button>
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
                                        <tbody id="body-tabela-produtos">
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row mt-4 justify-content-end">
                                <div class="col-md-2">
                                    <b>Total: </b> <span id="total">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                    <button type="button" class="btn btn-success mr-1 mb-4" onclick="onClickNewOrder()"> <i class="fas fa-plus"></i> Novo </button>
                    <button type="button" class="btn btn-primary mr-1 mb-4 ml-1" onclick="naoImplementado()" id="btn_salvar" disabled> <i class="far fa-save"></i> Salvar </button>
                    <button type="button" class="btn btn-danger mr-1 mb-4" onclick="naoImplementado()" id="btn_excluir" disabled> <i class="far fa-trash-alt"></i> Excluir </button>
                    <button type="button" class="btn btn-warning mr-1 mb-4 ml-1" onclick="limpaTudo()" id="btn_cancelar" disabled> <i class="fas fa-ban"></i> Cancelar </button>
                    <button type="button" class="btn btn-info mr-1 mb-4" onclick="naoImplementado()"> <i class="far fa-window-close"></i> Sair </button>
                </center>
            </div>


        </div>
    </main>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script>
        function onClickSearchPedido(evt) {
            var pesquisa = $('#num_pedido').val();

            //Verificar se há algo digitado
            if (pesquisa != '') {
                var dados = {
                    palavra: pesquisa
                }
                $.post('busca-pedido.php', dados, function(retorna) {
                    //Mostra dentro da ul os resultado obtidos 
                    console.log(retorna);
                    const response = JSON.parse(retorna);
                    $("#nome_cliente").val(response.cliente);
                    $("#nome_vendedor").val(response.vendedor);
                    $("#data_pedido").val(response.dtPedido);
                    $("#cod_cliente").val(response.idCliente);
                    $("#cod_vendedor").val(response.idVendedor);

                    const {
                        produtos
                    } = response;

                    produtos.forEach(({
                        id,
                        qtdVendida,
                        descricao,
                        precoUnit,
                        subTotal
                    }) => {
                        $('#body-tabela-produtos').text('');
                        $('#body-tabela-produtos').append(`<tr><td>${id}</td><td>${descricao}</td><td>${precoUnit}</td><td>${qtdVendida}</td><td>${subTotal}</td></tr>`)
                        $('#total').text(subTotal);


                        var numero_pedido = document.getElementById('num_pedido').value;
                        if (numero_pedido != "") {
                            document.getElementById('adiciona_item').disabled = false;
                            document.getElementById('remove_item').disabled = false;
                            document.getElementById('btn_cancelar').disabled = false;
                            document.getElementById('btn_salvar').disabled = false;
                            document.getElementById('btn_excluir').disabled = false;

                           


                        }

                    })
                });
            }
        }

        function onClickSearchCliente(evt) {
            var pesquisa = $('#cod_cliente').val();

            //Verificar se há algo digitado
            if (pesquisa != '') {
                var dados = {
                    palavra: pesquisa
                }
                $.post('busca-cliente.php', dados, function(retorna) {
                    //Mostra dentro da ul os resultado obtidos
                    const response = JSON.parse(retorna);
                    $("#nome_cliente").val(response.cliente);
                });
            }
        }

        function onClickSearchVendedor(evt) {
            var pesquisa = $('#cod_vendedor').val();

            //Verificar se há algo digitado
            if (pesquisa != '') {
                var dados = {
                    palavra: pesquisa
                }
                $.post('busca-vendedor.php', dados, function(retorna) {
                    //Mostra dentro da ul os resultado obtidos
                    const response = JSON.parse(retorna);
                    $("#nome_vendedor").val(response.cliente);
                });
            }
        }

        function onClickAddItem() {
            var idProduto = $('#cod_produto').val();
            var qtdVendida = $('#qtd_vendida').val();
            //Verificar se há algo digitado
            if (idProduto != '') {
                var dados = {
                    idProduto,
                    qtdVendida,
                }
                $.post('busca-produto.php', dados, function(retorna) {
                    //Mostra dentro da ul os resultado obtidos
                    const response = JSON.parse(retorna);
                    const {
                        descricao,
                        precoUnit
                    } = response;
                    // pegando dados da tabela calc subTotal
                    var array = $('#body-tabela-produtos tr').toArray();
                    array = array.map(el => el.children);
                    array = array.map(el => Array.from(el).map(child => child.textContent));
                    var subTotal = precoUnit * qtdVendida;
                    array.forEach(dados => {
                        subTotal += Number(dados[2]) * Number(dados[3]);
                    })
                    $('#body-tabela-produtos').append(`<tr><td>${idProduto}</td><td>${descricao}</td><td>${precoUnit}</td><td>${qtdVendida}</td><td>${subTotal}</td></tr>`)
                    $('#total').text(subTotal);
                });
            }
        }

        function onClickRemoveItem() {
            $('#body-tabela-produtos tr:last-child').remove();
        }

        function onClickNewOrder() {
            var idCliente = $('#cod_cliente').val();
            var idVendedor = $('#cod_vendedor').val();
            var status = "A";
            var dtPedido = $('#data_pedido').val();

            var dados = {
                idCliente,
                idVendedor,
                status,
                dtPedido,
            }

            $.post('novo-pedido.php', dados, function(retorna) {
                $('body').append(retorna);

                // adiciona itens
                var itens = $('#body-tabela-produtos tr').toArray();
                itens = itens.map(el => el.children);
                itens = itens.map(el => Array.from(el).map(child => child.textContent));

                itens.forEach(dados => {
                    body = {
                        idProduto: Number(dados[0]),
                        qtdVendida: Number(dados[3]),
                    }
                    $.post('novo-item-pedido.php', body, function(retorna) {
                        $('body').append(retorna)
                    });
                })
            });

        }

        function limpaTudo() {
            $('#body-tabela-produtos').text('');
            $('#total').text('');
            $('#cod_cliente').val('');
            $('#cod_vendedor').val('');
            $('#data_pedido').val('');
            $('#nome_cliente').val('');
            $('#nome_vendedor').val('');
            $('#num_pedido').val('');
        }

        function naoImplementado() {
            alert('não foi dessa vez :(');
        }

        //    adiciona_item
        //   remove_item
    </script>
    <?
    mysqli_close($conexao);
    ?>
</body>
