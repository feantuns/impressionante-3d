
<?php
include 'conecta-sem-log.php';
include 'stdObject.php';

$pesquisa = $_POST['palavra'];

//Pesquisar no banco de dados nome do cliente referente ao codigo digitado pelo usuário
$pesquisa = "SELECT * FROM cliente WHERE idCliente LIKE '%$pesquisa%' LIMIT 1";
$resultado_busca_midia = mysqli_query($conexao, $pesquisa);

if (mysqli_num_rows($resultado_busca_midia) <= 0) {
  echo "Nenhum item encontrado...";
} else {
  while ($rows = mysqli_fetch_assoc($resultado_busca_midia)) {
    $dados = new stdObject();
    $dados->cliente = $rows['nome'];
    echo json_encode($dados);
  }
}
?>