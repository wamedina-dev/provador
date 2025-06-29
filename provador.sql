-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/06/2025 às 22:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `provador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `identificador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `Nome`, `identificador`) VALUES
(1, 'Bermudas', 'berm');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dd_user`
--

CREATE TABLE `dd_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `poder` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `dd_user`
--

INSERT INTO `dd_user` (`id`, `nome`, `login`, `pass`, `poder`) VALUES
(1, 'Wagner Medina', 'sistema', '78764ff7e316f9671430ec0b5f1693fa', 1),
(2, 'Teste', 'teste', '13e9aae3cda2ee6b68bdcc8eb49c06a6', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `guia`
--

CREATE TABLE `guia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `guia`
--

INSERT INTO `guia` (`id`, `nome`, `arquivo`) VALUES
(1, 'Altura Masc', 'medida-bermuda-M-01.jpg'),
(2, 'Cintura masc', 'medida-bermuda-M-02.jpg'),
(3, 'Gancho Masc', 'medida-bermuda-M-03.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `manequim`
--

CREATE TABLE `manequim` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `arquivo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medida`
--

CREATE TABLE `medida` (
  `id` int(11) NOT NULL,
  `id_tabela` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `medida1` float NOT NULL,
  `medida2` float NOT NULL,
  `medida3` float NOT NULL,
  `medida4` float NOT NULL,
  `medida5` float DEFAULT 0,
  `medida6` float DEFAULT 0,
  `medida7` float DEFAULT 0,
  `medida8` float DEFAULT 0,
  `manequim` varchar(255) DEFAULT NULL,
  `guia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `medida`
--

INSERT INTO `medida` (`id`, `id_tabela`, `nome`, `medida1`, `medida2`, `medida3`, `medida4`, `medida5`, `medida6`, `medida7`, `medida8`, `manequim`, `guia`) VALUES
(1, 1, 'Altura', 47, 49, 51, 53, 55, 0, 0, 0, 'medida-berm-M-01.jpg', NULL),
(2, 1, 'Gancho', 29, 30, 31, 32, 33, 0, 0, 0, 'medida-berm-M-02.jpg', NULL),
(3, 1, 'Cintura', 88, 92, 96, 100, 104, 0, 0, 0, 'medida-berm-M-03.jpg', NULL),
(4, 2, 'Altura', 47, 49, 51, 53, 55, 0, 0, 0, 'medida-berm-F-01.jpg', NULL),
(5, 2, 'Gancho', 29, 30, 31, 32, 33, 0, 0, 0, 'medida-berm-F-02.jpg', NULL),
(6, 2, 'Cintura', 88, 92, 96, 100, 104, 0, 0, 0, 'medida-berm-F-03.jpg', NULL),
(7, 3, 'TÃ³rax', 90, 92, 95, 99, 106, 0, 0, 0, 'medida-camis-M-01.jpg', NULL),
(8, 3, 'Cintura', 88, 92, 96, 100, 104, 0, 0, 0, 'medida-camis-M-02.jpg', NULL),
(9, 3, 'BraÃ§o', 19, 21, 23, 25, 27, 0, 0, 0, 'medida-camis-M-03.jpg', NULL),
(10, 3, 'Comprimento', 62, 65, 68, 71, 74, 0, 0, 0, 'medida-camis-M-04.jpg', NULL),
(11, 4, 'TÃ³rax', 90, 92, 95, 99, 106, 0, 0, 0, 'medida-camis-F-01.jpg', NULL),
(12, 4, 'Cintura', 88, 92, 96, 100, 104, 0, 0, 0, 'medida-camis-F-02.jpg', NULL),
(13, 4, 'BraÃ§o', 19, 21, 23, 25, 27, 0, 0, 0, 'medida-camis-F-03.jpg', NULL),
(14, 4, 'Comprimento', 62, 65, 68, 71, 74, 0, 0, 0, 'medida-camis-F-04.jpg', NULL),
(15, 5, 'TÃ³rax', 90, 92, 95, 99, 106, 0, 0, 0, 'medida-agas-M-01.jpg', NULL),
(16, 5, 'Cintura', 88, 92, 96, 100, 104, 0, 0, 0, 'medida-agas-M-02.jpg', NULL),
(17, 5, 'BraÃ§o', 19, 21, 23, 25, 27, 0, 0, 0, 'medida-agas-M-03.jpg', NULL),
(18, 5, 'Comprimento', 62, 65, 68, 71, 74, 0, 0, 0, 'medida-agas-M-04.jpg', NULL),
(19, 6, 'TÃ³rax', 90, 92, 95, 99, 106, 0, 0, 0, 'medida-agas-F-01.jpg', NULL),
(20, 6, 'Cintura', 88, 92, 96, 100, 104, 0, 0, 0, 'medida-agas-F-02.jpg', NULL),
(21, 6, 'BraÃ§o', 19, 21, 23, 25, 27, 0, 0, 0, 'medida-agas-F-03.jpg', NULL),
(22, 6, 'Comprimento', 62, 65, 68, 71, 74, 0, 0, 0, 'medida-agas-F-04.jpg', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` enum('M','F') NOT NULL DEFAULT 'M',
  `categoria` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL,
  `manequim` int(11) NOT NULL,
  `tabela` int(11) NOT NULL,
  `acessos` int(11) DEFAULT 0,
  `criado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Objeto principal';

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `id_produto`, `nome`, `tipo`, `categoria`, `imagem`, `manequim`, `tabela`, `acessos`, `criado`) VALUES
(1, 421, 'Bermuda 01 Preta', 'M', 'berm', 'bermuda-1.jpg', 1, 1, 0, '2024-02-18 19:19:25'),
(13, 437, 'Bermuda Moletom AlgodÃ£o SustentÃ¡vel', 'M', 'berm', 'bermuda-moletom-sustentavel-43-550x550.png', 1, 1, 0, '2024-03-13 03:28:49');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela`
--

CREATE TABLE `tabela` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipo` enum('M','F') DEFAULT 'M',
  `categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tabela`
--

INSERT INTO `tabela` (`id`, `nome`, `tipo`, `categoria`) VALUES
(1, 'Bermudas', 'M', 'berm'),
(2, 'Bermudas', 'F', 'berm'),
(3, 'Camiseta', 'M', 'camis'),
(4, 'Camiseta', 'F', 'camis'),
(5, 'Agasalho', 'M', 'agas'),
(6, 'Agasalho', 'F', 'agas'),
(7, 'Calça', 'M', 'calca'),
(8, 'Calça', 'F', 'calca');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `id` int(11) NOT NULL,
  `id_tabela` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `extra` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tamanho`
--

INSERT INTO `tamanho` (`id`, `id_tabela`, `nome`, `tipo`, `extra`) VALUES
(1, 1, 'P', NULL, NULL),
(2, 1, 'M', NULL, NULL),
(3, 1, 'G', NULL, NULL),
(4, 1, 'GG', NULL, NULL),
(5, 1, 'XG', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dd_user`
--
ALTER TABLE `dd_user`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `guia`
--
ALTER TABLE `guia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `manequim`
--
ALTER TABLE `manequim`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_produto` (`id_produto`);

--
-- Índices de tabela `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `dd_user`
--
ALTER TABLE `dd_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `guia`
--
ALTER TABLE `guia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `manequim`
--
ALTER TABLE `manequim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medida`
--
ALTER TABLE `medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tabela`
--
ALTER TABLE `tabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
