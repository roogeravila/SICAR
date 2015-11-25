-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2015 às 19:58
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdsicar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `email` text NOT NULL,
  `login` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`email`, `login`, `senha`) VALUES
('admin@ufpa.br', 'admin', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faculdade`
--

CREATE TABLE IF NOT EXISTS `faculdade` (
  `id_faculdade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `diretor` text NOT NULL,
  `email` text NOT NULL,
  `ramal` int(9) NOT NULL,
  PRIMARY KEY (`id_faculdade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `faculdade`
--

INSERT INTO `faculdade` (`id_faculdade`, `nome`, `diretor`, `email`, `ramal`) VALUES
(1, 'Faculdade de ComputaÃ§Ã£o', 'Yomara', 'sfdlfhdlhgfsaha', 345678987);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE IF NOT EXISTS `solicitacao` (
  `id_solicitacao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faculdade_id_faculdade` int(11) NOT NULL,
  `requisitante` varchar(60) DEFAULT NULL,
  `contato_requisitante` varchar(45) DEFAULT NULL,
  `email_requisitante` varchar(60) DEFAULT NULL,
  `estado` int(10) unsigned DEFAULT NULL,
  `tipo_doc` int(10) unsigned DEFAULT NULL,
  `obs` text,
  `anexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_solicitacao`,`faculdade_id_faculdade`),
  KEY `solicitacao_FKIndex1` (`faculdade_id_faculdade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo` int(11) DEFAULT NULL,
  `faculdade` text NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `matricula_ufpa` varchar(60) DEFAULT NULL,
  `email` text NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(15) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cargo`, `faculdade`, `nome`, `matricula_ufpa`, `email`, `cpf`, `telefone`, `login`, `senha`) VALUES
(5, 1, 'Sem VÃ­nculo', 'Diretor', '', '', 1234, 0, 'diretor', 'diretor'),
(6, 0, 'Sem VÃ­nculo', 'Bolsista', '', '', 56788, 0, 'bolsista', 'bolsista'),
(7, 2, 'Sem VÃ­nculo', 'SecretÃ¡rio', '', '', 5678765, 0, 'secretario', 'secretario');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
