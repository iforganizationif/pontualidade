-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Mar-2023 às 14:55
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ponto`
--
CREATE DATABASE IF NOT EXISTS `ponto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ponto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagiarios`
--

CREATE TABLE `estagiarios` (
  `id` int(11) NOT NULL,
  `matricula` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `loc_estagio` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `professor` varchar(255) NOT NULL,
  `instrutor` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `estagiarios`
--

INSERT INTO `estagiarios` (`id`, `matricula`, `nome`, `loc_estagio`, `curso`, `professor`, `instrutor`, `horario`) VALUES
(1, '2021102189524588', 'Gustavo Martins Cardoso', 'CIEC', 'Bacharelado - Sistemas de Informação', 'Janio Carlos Nascimento', 'Ricardo Carilo Vivas', '14:00h-18:00h'),
(2, '2022102189524588', 'Renan Calheiros', 'Repografia', 'Técnico em Admnistração - Integrado', 'Arnaldo Coelho Junior', 'Paulo Cruz Nascimento', '15:00h-19:00h'),
(3, '2323232323', 'Gustavo Martins Cardoso', 'CIEC', 'Bacharelado - Sistemas de Informação', 'Janio Carlos Nascimento', 'Ricardo Carilo Vivas', '14:00h-18:00h'),
(4, '202020533451118', 'Louyze Mascarenhas blablabla', 'Repografia', 'Bacharelado - Sistemas de Informação', 'Arnaldo Coelho Junior', 'Paulo Ricardo', '14:00h-18:00h'),
(5, '202020533451118', 'Daniel Ângelo do Nascimento França', 'Reprografia ', 'Bacharelado - Sistemas de Informação', 'Demis Carvalho ', 'Euzebio Martins Silva', '14:00h-18:00h'),
(6, '1', 'Lino Bianco', 'Diretoria', 'Pedagogia - Licenciatura', 'Demis Carvalho ', 'Euzebio Martins Silva', '14:00h-18:00h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros_ponto`
--

CREATE TABLE `registros_ponto` (
  `id` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `tipo` enum('entrada','saida') NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `registros_ponto`
--

INSERT INTO `registros_ponto` (`id`, `id_funcionario`, `tipo`, `data_hora`) VALUES
(2, 1, 'entrada', '2023-03-02 23:11:28'),
(3, 1, 'entrada', '2023-05-14 03:00:00'),
(4, 1, 'entrada', '0000-00-00 00:00:00'),
(9, 2, 'entrada', '0000-00-00 00:00:00'),
(10, 2, 'saida', '0000-00-00 00:00:00'),
(11, 2, 'saida', '0000-00-00 00:00:00'),
(12, 2, 'entrada', '2023-03-03 19:42:00'),
(13, 2, 'saida', '2023-03-03 03:00:00'),
(14, 3, 'entrada', '2023-03-03 19:47:26'),
(15, 4, 'entrada', '2023-03-03 19:56:34'),
(16, 5, 'saida', '2023-03-03 19:59:08'),
(17, 5, 'entrada', '2023-03-03 20:12:00'),
(18, 5, 'entrada', '2023-03-03 20:12:18');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estagiarios`
--
ALTER TABLE `estagiarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registros_ponto`
--
ALTER TABLE `registros_ponto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_registros_ponto_estagiarios` (`id_funcionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estagiarios`
--
ALTER TABLE `estagiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `registros_ponto`
--
ALTER TABLE `registros_ponto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `registros_ponto`
--
ALTER TABLE `registros_ponto`
  ADD CONSTRAINT `fk_registros_ponto_estagiarios` FOREIGN KEY (`id_funcionario`) REFERENCES `estagiarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
