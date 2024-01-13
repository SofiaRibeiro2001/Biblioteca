-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2024 às 00:18
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_manual`
--

CREATE TABLE `t_manual` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL DEFAULT 'Nenhum',
  `num_pag` varchar(11) NOT NULL DEFAULT '0',
  `text_descr` varchar(200) DEFAULT NULL,
  `peso_kb` varchar(6) NOT NULL DEFAULT '0',
  `autor` varchar(20) NOT NULL DEFAULT 'Desconhecido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `t_manual`
--

INSERT INTO `t_manual` (`id`, `titulo`, `num_pag`, `text_descr`, `peso_kb`, `autor`) VALUES
(3, 'Volta ao mundo com Html', '120', 'A vida cheia de cor', '600', 'Luisa Morais');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_manual`
--
ALTER TABLE `t_manual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_manual`
--
ALTER TABLE `t_manual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
