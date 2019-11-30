
<?php
    include 'conecta.php';   

$pesquisa = $_POST['palavra'];

//Pesquisar no banco de dados nome do cliente referente ao codigo digitado pelo usuário
$pesquisa = "SELECT * FROM cliente WHERE idCliente LIKE '%$pesquisa%' LIMIT 1";
$resultado_busca_midia = mysqli_query($conexao, $pesquisa);

if (mysqli_num_rows($resultado_busca_midia) <= 0) {
	echo "Nenhum item encontrado...";
} else {
	while ($rows = mysqli_fetch_assoc($resultado_busca_midia)) {
		echo "<li>" . $rows['nome'] . "</li>";
	}
}




$pesquisa_vendedor = $_POST['palavra'];
//Pesquisar no banco de dados nome do cliente referente ao codigo digitado pelo usuário
$pesquisa = "SELECT * FROM vendedor WHERE idvendedor LIKE '%$pesquisa_vendedor%' LIMIT 1";
$resultado_busca_midia = mysqli_query($conexao, $pesquisa);

if (mysqli_num_rows($resultado_busca_midia) <= 0) {
	echo "Nenhum item encontrado...";
} else {
	while ($rows = mysqli_fetch_assoc($resultado_busca_midia)) {
		echo "<li>" . $rows['nome'] . "</li>";
	}
}
?>