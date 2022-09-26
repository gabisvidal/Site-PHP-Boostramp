-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2020 às 02:35
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `delivery`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `sabor` text NOT NULL,
  `valor` text NOT NULL,
  `entrega` text NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email` text NOT NULL,
  `telefone` text NOT NULL,
  `complemento` text NOT NULL,
  `referencia` varchar(40) NOT NULL,
  `rua` text NOT NULL,
  `numero` int(10) NOT NULL,
  `cep` int(20) NOT NULL,
  `pagamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`sabor`, `valor`, `entrega`, `nome`, `sobrenome`, `email`, `telefone`, `complemento`, `referencia`, `rua`, `numero`, `cep`, `pagamento`) VALUES
('Frango', 'Grande - 24,00', 'RÃ¡pida - 7,00', 'Gabriele', 'Vidal', 'mariagabrielyvidal@gmail.com', '(85)97380409', 'Casa', 'Perto do CÃ­rculo OperÃ¡rio', 'Rua Edmundo Linhares', 373, 60420340, 'CrÃ©dito');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
