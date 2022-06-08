-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Jun-2022 às 22:10
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `celular` varchar(50) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `cpf`, `celular`, `rua`, `numero`) VALUES
(1, 'Heitor OtÃ¡vio Peixoto', '816.821.374-22', '(98)98155-1168', 'Avenida JK', '448'),
(2, 'Theo Vinicius da Cunha', '193.121.106-08', '(96)98707-0144', 'Brigadeiro Araripe Macedo', '510'),
(3, 'FÃ¡tima Silvana M. Rocha', '406.199.846-35', '(98)98997-0813', 'Rua C', '513'),
(4, 'Sandra Daniela Clara Ribeiro', '612.923.815-07', '(81)99232-8670', 'Rua Assucena', '528'),
(5, 'CÃ©sar LuÃ­s ClÃ¡udio Duarte', '138.874.466-07', '(71)99952-3403', 'Rua E', '157'),
(6, 'LetÃ­cia Louise JÃ©ssica Mendes', '130.277.886-20', '(79)99341-3879', 'Maria SalomÃ© N. Vasconcelos', '154'),
(7, 'Yago Miguel Rodrigues', '738.799.066-29', '(96)99191-2894', 'Rua Beira-mar', '442'),
(8, 'Davi BenÃ­cio Baptista', '355.832.637-76', '(69)98947-6883', 'Rua Caruana', '723'),
(9, 'Caleb Alexandre J. Almeida', '324.647.968-24', '(98)99388-8673', 'Rua Nova Betel', '627'),
(10, 'Jorge Igor Costa', '777.612.821-02', '(96)98406-8661', 'Av Josefa Pelaes da Silva', '544'),
(16, 'Victor Gabriel', '076.756.781-17', '(19)99267-4129', 'Hormindo Feres', '465');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
