
<?php
include 'conecta-sem-log.php';
include 'stdObject.php';

$pesquisa = $_POST['idProduto'];

//Pesquisar no banco de dados nome do cliente referente ao codigo digitado pelo usuário
$pesquisa = "SELECT * FROM produto WHERE idProduto LIKE '%$pesquisa%' LIMIT 1";
$resultado_busca_midia = mysqli_query($conexao, $pesquisa);

if (mysqli_num_rows($resultado_busca_midia) > 0) {
  while ($rows = mysqli_fetch_assoc($resultado_busca_midia)) {
    $dados = new stdObject();
    $dados->descricao = $rows['descricao'];
    $dados->precoUnit = $rows['precoUnit'];
    echo json_encode($dados);
  }
}
?>