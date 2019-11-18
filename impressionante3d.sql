CREATE TABLE `cliente` (
  `idCliente` int(100) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(13) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `uf` varchar(3) NOT NULL,
  `telefone_ddd` varchar(3) NOT NULL,
  `telefone_numero` varchar(10) NOT NULL,
  `limite_credito` float(5,2) NOT NULL,
  `limite_disponivel` float(5,2) NOT NULL,
  PRIMARY KEY (idCliente)
);

CREATE TABLE `item_pedido` (
  `idPedido` int(100) NOT NULL,
  `idProduto` int(100) NOT NULL,
  `qtdVendida` int(100) NOT NULL,
  FOREIGN KEY (idPedido) REFERENCES pedido (idPedido),
  FOREIGN KEY (idProduto) REFERENCES produto (idProduto)
);

CREATE TABLE `pedido` (
  `idPedido` int(100) NOT NULL AUTO_INCREMENT,
  `idCliente` int(100) NOT NULL,
  `idVendedor` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `dtPedido` date NOT NULL,
  `dtPagto` date NOT NULL,
  PRIMARY KEY (idPedido),
  FOREIGN KEY (idCliente) REFERENCES cliente (idCliente),
  FOREIGN KEY (idVendedor) REFERENCES vendedor (idVendedor)
);

CREATE TABLE `produto` (
  `idProduto` int(100) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(250) NOT NULL,
  `qtdDisponivel` int(100) NOT NULL,
  `precoUnit` float(3,2) NOT NULL,
  `estoqueMinimo` int(100) NOT NULL,
  PRIMARY KEY (idProduto)
);

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `login_verificacao` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefone_ddd` int(4) NOT NULL,
  `telefone_numero` int(15) NOT NULL,
  `tipo_user` int(2) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `vendedor` (
  `idVendedor` int(100) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(75) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `telefone_ddd` int(5) NOT NULL,
  `salario_base` float(5,2) NOT NULL,
  `taxa_comissao` float(5,2) NOT NULL,
  PRIMARY KEY (idVendedor)
);

-- INSERTS

INSERT INTO `cliente`(`idCliente`, `cpf`, `nome`, `endereco`, `cidade`, `cep`, `uf`, `telefone_ddd`, `telefone_numero`, `limite_credito`, `limite_disponivel`) VALUES ("","47394486885","Felipe","Rua","Sumacity","13178623","SP","19","992556759",1000,1000);
INSERT INTO `produto`(`idProduto`, `descricao`, `qtdDisponivel`, `precoUnit`, `estoqueMinimo`) VALUES ("","Baby Groot",5,29.99,1);
INSERT INTO `vendedor`(`idVendedor`, `cpf`, `nome`, `endereco`, `cidade`, `cep`, `uf`, `telefone_ddd`, `salario_base`, `taxa_comissao`) VALUES ("","123456789","Seu Roberto","Avenida","Campinas","1234567","SP",19,1000.00,5.9);
INSERT INTO `pedido` (`idPedido`, `idCliente`, `idVendedor`, `status`, `dtPedido`, `dtPagto`) VALUES ('1', '1', '1', '1', '2019-11-18', '2019-11-18');
INSERT INTO `item_pedido` (`idPedido`, `idProduto`, `qtdVendida`) VALUES ('1', '1', '1');