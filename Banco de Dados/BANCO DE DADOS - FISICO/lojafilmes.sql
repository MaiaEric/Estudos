-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2022 às 16:02
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojafilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `tipoLogadouro` varchar(100) NOT NULL,
  `logadouro` varchar(100) NOT NULL,
  `numero` int(4) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `nomecliente` varchar(100) NOT NULL,
  `idcliente` int(10) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cpfcliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`tipoLogadouro`, `logadouro`, `numero`, `complemento`, `bairro`, `municipio`, `estado`, `cep`, `nomecliente`, `idcliente`, `telefone`, `cpfcliente`) VALUES
('rua', 'R. Ametista', 0, 'L: 18 Q:54', 'Coelho da Rocha', 'Parque Alian', 'Rio de Janeiro', '25550-46', 'Eric', 51, 979555210, ''),
('', '', 0, '', '', '', '', '', 'Valdo', 60, 0, '158.173.591-71'),
('', '', 0, '', '', '', '', '', 'Katya', 61, 0, '746.241.641-91'),
('', '', 0, '', '', '', 'RS', '', 'Katya', 63, 0, '152.241.641-91'),
('rua', 'R.ametista', 0, NULL, 'Coelho da Rocha', 'Parque Alian', 'RJ', '17523-78', 'Maria', 64, 0, '986.571.334-88');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_departamento`
--

CREATE TABLE `tb_departamento` (
  `iddepartamento` int(10) NOT NULL,
  `nomedepartamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_departamento`
--

INSERT INTO `tb_departamento` (`iddepartamento`, `nomedepartamento`) VALUES
(2, 'T.I');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_filme`
--

CREATE TABLE `tb_filme` (
  `idfilme` int(11) NOT NULL,
  `nomefilme` varchar(100) NOT NULL,
  `nomediretor` varchar(100) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `qtestoque` int(100) NOT NULL,
  `idfornecedor` int(11) NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_filme`
--

INSERT INTO `tb_filme` (`idfilme`, `nomefilme`, `nomediretor`, `categoria`, `qtestoque`, `idfornecedor`, `preco`) VALUES
(3, 'O chamado 3', 'F. Javier Gutiérrez', 'Terror', 7, 2, '15.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE `tb_fornecedor` (
  `idFornecedor` int(10) NOT NULL,
  `tipoLogadouro` varchar(40) NOT NULL,
  `logadouro` varchar(40) NOT NULL,
  `numero` int(4) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cep` int(8) NOT NULL,
  `nomeFornecedor` varchar(40) NOT NULL,
  `telefoneFornecedor1` int(11) NOT NULL,
  `telefoneFornecedor2` int(11) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `nomeGerente` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_fornecedor`
--

INSERT INTO `tb_fornecedor` (`idFornecedor`, `tipoLogadouro`, `logadouro`, `numero`, `complemento`, `bairro`, `municipio`, `estado`, `cep`, `nomeFornecedor`, `telefoneFornecedor1`, `telefoneFornecedor2`, `cnpj`, `nomeGerente`) VALUES
(2, 'rua', 'R. do Ferro', 0, 'L: 04 Q:14', 'Coelho da Rocha', 'Parque Alian', 'Rio de Janeiro', 25550, 'Marcos', 979123115, 979555210, '000', 'Jacinto'),
(3, '', '', 0, '', '', '', 'RS', 0, 'Kaike', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `tipoLogadouro` varchar(100) NOT NULL,
  `logadouro` varchar(100) NOT NULL,
  `numero` int(4) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cpffuncionario` varchar(30) NOT NULL,
  `cep` int(8) NOT NULL,
  `nomefuncionario` varchar(100) NOT NULL,
  `idfuncionario` int(10) NOT NULL,
  `telefone` int(11) NOT NULL,
  `iddepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`tipoLogadouro`, `logadouro`, `numero`, `complemento`, `bairro`, `municipio`, `estado`, `cpffuncionario`, `cep`, `nomefuncionario`, `idfuncionario`, `telefone`, `iddepartamento`) VALUES
('Rua', 'R. Estanho', 0, 'L:13 Q:67', 'Coelho da Rocha', 'Parque Alian', 'Rio de Janeiro', '312431', 25550, 'Arthur', 2, 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itenspedido`
--

CREATE TABLE `tb_itenspedido` (
  `iditenspedido` int(11) NOT NULL,
  `idfilme` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idfuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_itenspedido`
--

INSERT INTO `tb_itenspedido` (`iditenspedido`, `idfilme`, `idpedido`, `idcliente`, `idfuncionario`) VALUES
(3, 3, 3, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `idpedido` int(11) NOT NULL,
  `dtcompra` datetime NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  `numcompras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`idpedido`, `dtcompra`, `idcliente`, `idfuncionario`, `numcompras`) VALUES
(3, '2022-11-22 15:26:19', 51, 2, 0),
(4, '2022-11-22 16:17:37', 51, 2, 0),
(5, '2022-11-22 16:17:49', 51, 2, 0),
(6, '2022-11-30 14:06:30', 51, 2, 6),
(7, '2022-11-30 14:06:30', 51, 2, 9),
(8, '2022-11-30 14:06:30', 51, 2, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `cpfcliente` (`cpfcliente`);

--
-- Índices para tabela `tb_departamento`
--
ALTER TABLE `tb_departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Índices para tabela `tb_filme`
--
ALTER TABLE `tb_filme`
  ADD PRIMARY KEY (`idfilme`),
  ADD KEY `idfornecedor` (`idfornecedor`);

--
-- Índices para tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  ADD PRIMARY KEY (`idFornecedor`);

--
-- Índices para tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD UNIQUE KEY `cpffuncionario` (`cpffuncionario`),
  ADD KEY `iddepartamento` (`iddepartamento`);

--
-- Índices para tabela `tb_itenspedido`
--
ALTER TABLE `tb_itenspedido`
  ADD PRIMARY KEY (`iditenspedido`),
  ADD KEY `idfilme` (`idfilme`),
  ADD KEY `idpedido` (`idpedido`);

--
-- Índices para tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idfuncionario` (`idfuncionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `idcliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `tb_departamento`
--
ALTER TABLE `tb_departamento`
  MODIFY `iddepartamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_filme`
--
ALTER TABLE `tb_filme`
  MODIFY `idfilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  MODIFY `idFornecedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `idfuncionario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_itenspedido`
--
ALTER TABLE `tb_itenspedido`
  MODIFY `iditenspedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_filme`
--
ALTER TABLE `tb_filme`
  ADD CONSTRAINT `tb_filme_ibfk_1` FOREIGN KEY (`idfornecedor`) REFERENCES `tb_fornecedor` (`idFornecedor`);

--
-- Limitadores para a tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD CONSTRAINT `tb_funcionario_ibfk_1` FOREIGN KEY (`iddepartamento`) REFERENCES `tb_departamento` (`iddepartamento`);

--
-- Limitadores para a tabela `tb_itenspedido`
--
ALTER TABLE `tb_itenspedido`
  ADD CONSTRAINT `tb_itenspedido_ibfk_1` FOREIGN KEY (`idfilme`) REFERENCES `tb_filme` (`idfilme`),
  ADD CONSTRAINT `tb_itenspedido_ibfk_2` FOREIGN KEY (`idpedido`) REFERENCES `tb_pedido` (`idpedido`);

--
-- Limitadores para a tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `tb_pedido_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `tb_cliente` (`idcliente`),
  ADD CONSTRAINT `tb_pedido_ibfk_2` FOREIGN KEY (`idfuncionario`) REFERENCES `tb_funcionario` (`idfuncionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
