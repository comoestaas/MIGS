-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Nov-2023 às 05:01
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `migseventoskids`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(110) NOT NULL,
  `senha` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `email`, `senha`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

DROP TABLE IF EXISTS `arquivos`;
CREATE TABLE IF NOT EXISTS `arquivos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(110) NOT NULL,
  `path` varchar(110) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `path`, `data_upload`) VALUES
(15, '40583784_247215665980091_3589625149353099264_n.jpg', 'arquivos/6556e2b3bc5a5.jpg', '2023-11-17 00:49:07'),
(14, '37272290_210791749622483_6872279391104139264_n.jpg', 'arquivos/6556e2b3b8b20.jpg', '2023-11-17 00:49:07'),
(13, '27657529_152985952069730_6481992186462112448_n.jpg', 'arquivos/6556e2b3b5092.jpg', '2023-11-17 00:49:07'),
(12, '26221053_146398272728498_1344466553836773805_o.jpg', 'arquivos/6556e2b3b1045.jpg', '2023-11-17 00:49:07'),
(11, '25487298_141534196548239_1458768122862038017_o.jpg', 'arquivos/6556e2b3adeaa.jpg', '2023-11-17 00:49:07'),
(16, '42929621_256310148403976_7081619485840375808_n.jpg', 'arquivos/6556e2b3c006a.jpg', '2023-11-17 00:49:07'),
(17, '279686806_993408141360836_5867373176840843605_n.jpg', 'arquivos/6556e2b3c3984.jpg', '2023-11-17 00:49:07'),
(18, '281702502_1002937030407947_901832997081339716_n.jpg', 'arquivos/6556e2b3c74a5.jpg', '2023-11-17 00:49:07'),
(19, 'alou.jpg', 'arquivos/6556e2b3cb187.jpg', '2023-11-17 00:49:07'),
(20, 'jogos.jpg', 'arquivos/6556e2b3cef62.jpg', '2023-11-17 00:49:07'),
(21, 'www.jpg', 'arquivos/6556e2b3d2973.jpg', '2023-11-17 00:49:07'),
(22, '6556e2b3adeaa.jpg', 'arquivos/6556e36470f1d.jpg', '2023-11-17 00:52:04'),
(23, '6556e2b3b8b20.jpg', 'arquivos/6556e364749c5.jpg', '2023-11-17 00:52:04'),
(24, '6556e2b3b1045.jpg', 'arquivos/6556e364785cc.jpg', '2023-11-17 00:52:04'),
(25, '6556e2b3b5092.jpg', 'arquivos/6556e3647c44d.jpg', '2023-11-17 00:52:04'),
(26, '6556e2b3bc5a5.jpg', 'arquivos/6556e364802f8.jpg', '2023-11-17 00:52:04'),
(27, '6556e2b3c006a.jpg', 'arquivos/6556e36484066.jpg', '2023-11-17 00:52:04'),
(28, '6556e2b3c74a5.jpg', 'arquivos/6556e364880b0.jpg', '2023-11-17 00:52:04'),
(29, '6556e2b3c3984.jpg', 'arquivos/6556e3648b7a5.jpg', '2023-11-17 00:52:04'),
(30, '6556e2b3cb187.jpg', 'arquivos/6556e3648f43c.jpg', '2023-11-17 00:52:04'),
(31, '6556e2b3cef62.jpg', 'arquivos/6556e364931f8.jpg', '2023-11-17 00:52:04'),
(32, '6556e2b3d2973.jpg', 'arquivos/6556e36497003.jpg', '2023-11-17 00:52:04'),
(33, '25487298_141534196548239_1458768122862038017_o.jpg', 'arquivos/6556e3649ab10.jpg', '2023-11-17 00:52:04'),
(34, '26221053_146398272728498_1344466553836773805_o.jpg', 'arquivos/6556e3649e983.jpg', '2023-11-17 00:52:04'),
(35, '27657529_152985952069730_6481992186462112448_n.jpg', 'arquivos/6556e364a24b7.jpg', '2023-11-17 00:52:04'),
(36, '37272290_210791749622483_6872279391104139264_n.jpg', 'arquivos/6556e364a9cf2.jpg', '2023-11-17 00:52:04'),
(37, '40583784_247215665980091_3589625149353099264_n.jpg', 'arquivos/6556e364adb87.jpg', '2023-11-17 00:52:04'),
(38, '42929621_256310148403976_7081619485840375808_n.jpg', 'arquivos/6556e364b18e4.jpg', '2023-11-17 00:52:04'),
(39, '279686806_993408141360836_5867373176840843605_n.jpg', 'arquivos/6556e364b5289.jpg', '2023-11-17 00:52:04'),
(40, '281702502_1002937030407947_901832997081339716_n.jpg', 'arquivos/6556e364b9096.jpg', '2023-11-17 00:52:04'),
(41, '296812399_1049681019066881_5612946568894708149_n.jpg', 'arquivos/6556e364bcd39.jpg', '2023-11-17 00:52:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

DROP TABLE IF EXISTS `formulario`;
CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(110) NOT NULL,
  `sobrenome` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(110) NOT NULL,
  `mensagem` text NOT NULL,
  `data_envio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id`, `primeiro_nome`, `sobrenome`, `email`, `telefone`, `mensagem`, `data_envio`) VALUES
(2, 'wetwrqwrq', 'qweqwe', 'qweqweqw', 'vewrf@gmail.com', '1233123', '2023-11-17 01:43:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(110) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `senha` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'www', 'www@gmail.com', 'www'),
(4, '23rqwe', 'qweqwe@gmail.com', 'qwe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
