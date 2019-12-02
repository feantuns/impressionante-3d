
<?php
include 'conecta-sem-log.php';
include 'stdObject.php';

$pesquisa = $_POST['palavra'];

//Pesquisar no banco de dados nome do vendedor referente ao codigo digitado pelo usuário
$pesquisa = "SELECT * FROM vendedor WHERE idVendedor LIKE '%$pesquisa%' LIMIT 1";
$resultado_busca_midia = mysqli_query($conexao, $pesquisa);

if (mysqli_num_rows($resultado_busca_midia) <= 0) {
  echo "Nenhum item encontrado...";
} else {
  while ($rows = mysqli_fetch_assoc($resultado_busca_midia)) {
    $dados = new stdObject();
    $dados->vendedor = $rows['nome'];
    echo json_encode($dados);
  }
}
?>