-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2015 às 17:44
-- Versão do servidor: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsicar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
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

CREATE TABLE `faculdade` (
  `id_faculdade` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `diretor` text NOT NULL,
  `email` text NOT NULL,
  `ramal` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `faculdade`
--

INSERT INTO `faculdade` (`id_faculdade`, `nome`, `diretor`, `email`, `ramal`) VALUES
(1, 'Faculdade de ComputaÃ§Ã£o', 'Yomara', 'sfdlfhdlhgfsaha', 345678987),
(2, 'Faculdade de EducaÃ§Ã£o FÃ­sica', 'Nassar', 'admin@ufpa.br', 456789);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimento`
--

CREATE TABLE `requerimento` (
  `req_id` int(11) NOT NULL,
  `req_protocolo` text NOT NULL,
  `req_faculdade` int(11) NOT NULL,
  `req_tipo` int(11) NOT NULL,
  `req_nome` text NOT NULL,
  `req_matricula` int(11) NOT NULL,
  `req_email` text NOT NULL,
  `req_cpf` text NOT NULL,
  `req_telefone` int(15) NOT NULL,
  `req_observacao` text NOT NULL,
  `req_anexo` text NOT NULL,
  `req_status` text NOT NULL,
  `req_avaliador` text NOT NULL,
  `req_resposta` text NOT NULL,
  `req_resposta_anexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `requerimento`
--

INSERT INTO `requerimento` (`req_id`, `req_protocolo`, `req_faculdade`, `req_tipo`, `req_nome`, `req_matricula`, `req_email`, `req_cpf`, `req_telefone`, `req_observacao`, `req_anexo`, `req_status`, `req_avaliador`, `req_resposta`, `req_resposta_anexo`) VALUES
(30, '291115122304', 1, 0, 'Diego', 7898765, 'diego@gmail.com', '567890', 4567890, 'gggg', '', '2', 'Ailton Lopes', 'Tudo certo!', ''),
(31, '291115125744', 1, 0, 'Jorge', 4567890, 'jorge@gmail.com', '4567890', 456789, 'egbkjdnln', '', '2', 'Fcomp', '', ''),
(32, '291115163243', 1, 0, 'Diego', 4567890, 'diego@gmail.com', '5678', 456789, '6789', '', '3', '567890', '56789', ''),
(33, '291115170650', 2, 0, 'Diego', 4567890, 'diego@gmail.com', '4567890', 456789, '', '', '1', '', '', ''),
(34, '291115173454', 1, 0, '4567890', 45689, 'sdbhsbdjs', '45678', 5678, 'hsgds', '', '1', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id_solicitacao` int(10) UNSIGNED NOT NULL,
  `faculdade_id_faculdade` int(11) NOT NULL,
  `requisitante` varchar(60) DEFAULT NULL,
  `contato_requisitante` varchar(45) DEFAULT NULL,
  `email_requisitante` varchar(60) DEFAULT NULL,
  `estado` int(10) UNSIGNED DEFAULT NULL,
  `tipo_doc` int(10) UNSIGNED DEFAULT NULL,
  `obs` text,
  `anexo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `cargo` int(11) DEFAULT NULL,
  `faculdade` text NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `matricula_ufpa` varchar(60) DEFAULT NULL,
  `email` text NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(15) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cargo`, `faculdade`, `nome`, `matricula_ufpa`, `email`, `cpf`, `telefone`, `login`, `senha`) VALUES
(7, 2, 'Sem VÃ­nculo', 'SecretÃ¡rio', '', 'secretario@gmail.com', 5678765, 0, 'secretario', 'senha'),
(8, 0, '1', 'Bolsista', '567890', 'bolsista@gmail.com', 546789, 56789, 'bolsista', 'senha'),
(9, 1, '1', 'Ailton Lopes', '13657493938', 'admin@ufpa.br', 7777777, 456789, 'diretor', 'senha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculdade`
--
ALTER TABLE `faculdade`
  ADD PRIMARY KEY (`id_faculdade`);

--
-- Indexes for table `requerimento`
--
ALTER TABLE `requerimento`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id_solicitacao`,`faculdade_id_faculdade`),
  ADD KEY `solicitacao_FKIndex1` (`faculdade_id_faculdade`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculdade`
--
ALTER TABLE `faculdade`
  MODIFY `id_faculdade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requerimento`
--
ALTER TABLE `requerimento`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id_solicitacao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
