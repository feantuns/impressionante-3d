
<?php
include 'conecta-sem-log.php';
include 'stdObject.php';

$idProduto = $_POST['idProduto'];
$qtdVendida = $_POST['qtdVendida'];

$consulta_id_pedido = mysqli_query($conexao, "SELECT MAX(idPedido) FROM pedido LIMIT 1");
$idPedido = mysqli_fetch_array($consulta_id_pedido)[0];

$insert = mysqli_query($conexao, "INSERT INTO `item_pedido`(`idPedido`, `qtdVendida`, `idProduto`) VALUES  ('$idPedido', '$qtdVendida','$idProduto')");

if ($insert == TRUE) {
  echo "<script>console.log('item cadastrado com sucesso!')</script>";
} else {
  echo "<script>console.log('deu ruim pra cadastrar item')</script>";
}
?>