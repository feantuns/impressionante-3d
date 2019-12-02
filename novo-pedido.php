
<?php
include 'conecta-sem-log.php';
include 'stdObject.php';

$idCliente = $_POST['idCliente'];
$idVendedor = $_POST['idVendedor'];
$status = $_POST['status'];
$dtPedido = $_POST['dtPedido'];

$insert = mysqli_query($conexao, "INSERT INTO `pedido`(`idCliente`, `idVendedor`, `status`, `dtPedido`) VALUES  ('$idCliente', '$idVendedor','$status', '$dtPedido')");

if ($insert == TRUE) {
  echo "<script>alert('Pedido cadastrado com sucesso!')</script>";
} else {
  echo "<script>alert('deu ruim pra cadastrar pedido')</script>";
}
?>