<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Impressionante 3D - ADM</title>
    
    <?php
    //faz conexao com o banco de dados
    include 'conecta.php';
    ?>

</head>

<body>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css-index-php.css" />

    <main>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form class="form-signin" method="post" action="login-verificacao.php">
                      <div class="form-label-group">
                        <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Usuário" required autofocus>
                        <label for="usuario">Usuário</label>
                      </div>
        
                      <div class="form-label-group">
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
                        <label for="senha">Senha</label>
  
                      </div>
        
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                      <hr class="my-4">
                      <a href="recupera_senha.php"><input class="btn btn-lg btn-google btn-block text-uppercase" type="button" value="Esqueceu sua senha?"> </a>
                      <script>

                      </script>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </main>


</body>

</html>