
<?php
include 'conecta-sem-log.php';
include 'stdObject.php';

$pesquisa = $_POST['palavra'];

//Pesquisar no banco de dados nome do cliente referente ao codigo digitado pelo usuário
$pesquisa = "SELECT * FROM pedido WHERE idPedido LIKE '%$pesquisa%' LIMIT 1";
$resultado_busca_midia = mysqli_query($conexao, $pesquisa);

if (mysqli_num_rows($resultado_busca_midia) <= 0) {
	echo "Nenhum item encontrado...";
} else {
	while ($rows = mysqli_fetch_assoc($resultado_busca_midia)) {
		$dados = new stdObject();

		$dados->dtPedido = $rows['dtPedido'];
		$dados->idCliente = $rows['idCliente'];
		$dados->idVendedor = $rows['idVendedor'];

		$produtos = array();

		// Cliente
		$pesquisaCliente = "SELECT * FROM cliente WHERE idCliente LIKE " . $rows['idCliente'] . "";
		$resultado_busca_cliente = mysqli_query($conexao, $pesquisaCliente);
		if (mysqli_num_rows($resultado_busca_cliente) > 0) {
			while ($rows2 = mysqli_fetch_assoc($resultado_busca_cliente)) {
				$dados->cliente = $rows2['nome'];
			}
		}

		// Vendedor
		$pesquisaVendedor = "SELECT * FROM vendedor WHERE idVendedor LIKE " . $rows['idVendedor'] . "";
		$resultado_busca_vendedor = mysqli_query($conexao, $pesquisaVendedor);
		if (mysqli_num_rows($resultado_busca_vendedor) > 0) {
			while ($rows2 = mysqli_fetch_assoc($resultado_busca_vendedor)) {
				$dados->vendedor = $rows2['nome'];
			}
		}

		// itens pedido
		$pesquisaItensProdutos = "SELECT * FROM item_pedido WHERE idPedido LIKE " . $rows['idPedido'] . "";
		$resultado_busca_itens = mysqli_query($conexao, $pesquisaItensProdutos);
		if (mysqli_num_rows($resultado_busca_itens) > 0) {
			while ($rows2 = mysqli_fetch_assoc($resultado_busca_itens)) {
				$produto = new stdObject();
				$produto->qtdVendida = $rows2['qtdVendida'];
				$subTotal = 0;

				$pesquisaProduto = "SELECT * FROM produto WHERE idProduto LIKE " . $rows2['idProduto'] . "";
				$resultado_busca_produto = mysqli_query($conexao, $pesquisaProduto);
				if (mysqli_num_rows($resultado_busca_produto) > 0) {
					while ($rows3 = mysqli_fetch_assoc($resultado_busca_produto)) {
						$produto->descricao = $rows3['descricao'];
						$produto->precoUnit = $rows3['precoUnit'];
						$produto->id = $rows3['idProduto'];
						$subTotal += $rows3['precoUnit'];
						$produto->subTotal = $subTotal;
					}
				}

				array_push($produtos, $produto);
			}
		}

		$dados->produtos = $produtos;

		echo json_encode($dados);
	}
}
?>