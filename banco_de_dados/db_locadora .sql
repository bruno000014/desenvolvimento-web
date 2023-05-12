-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2023 às 18:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE `carro` (
  `codigo_carro` int(11) NOT NULL,
  `marca` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `modelo` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ano` int(10) NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipo_carro` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`codigo_carro`, `marca`, `modelo`, `ano`, `descricao`, `tipo_carro`) VALUES
(1, 'VOLKSWAGEN', 'VIRTUS', 2022, '4 PORTAS, CAMBIO AUTOMATICO', 'HATCH'),
(3, 'HYUNDAI', 'HB20', 2019, '4 PORTAS, CAMBIO AUTOMATICOSEDAN PLUS', 'SEDAN PLUS'),
(4, 'CHEVROLET', 'ONIX', 2017, '4 PORTAS, CAMBIO MANUAL', 'HATCH'),
(5, 'FIAT', 'MOBI', 2018, '4 PORTAS, CAMBIO MANUAL', 'HATCH'),
(6, 'VOLKSWAGEN ', 'POLO TSI', 2020, '4 PORTAS, CAMBIO AUTOMATICO, 1.6', 'HATCH');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `codigo_login` int(11) NOT NULL,
  `nome_completo_login` varchar(100) NOT NULL,
  `nome_login` varchar(30) NOT NULL,
  `senha_login` int(32) NOT NULL,
  `tipo_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`codigo_login`, `nome_completo_login`, `nome_login`, `senha_login`, `tipo_login`) VALUES
(1, 'administrador', 'admin', 2114, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`codigo_carro`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`codigo_login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `codigo_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `codigo_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
