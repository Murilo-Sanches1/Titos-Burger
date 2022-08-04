-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 03:12
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tito-bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_acl`
--

CREATE TABLE `tb_acl` (
  `id_acl` int(2) NOT NULL,
  `tipo_acl` int(4) DEFAULT NULL,
  `descricao` char(45) DEFAULT NULL,
  `id_status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_acl`
--

INSERT INTO `tb_acl` (`id_acl`, `tipo_acl`, `descricao`, `id_status`) VALUES
(1, 1, 'Dev Master.', 2),
(2, 2, 'Master', 2),
(4, 3, 'Administrador', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_colaborador`
--

CREATE TABLE `tb_colaborador` (
  `id_colaborador` int(6) NOT NULL,
  `cargo` char(45) DEFAULT NULL,
  `descricao` char(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `id_contato` int(8) NOT NULL,
  `tipo_contato` char(20) DEFAULT NULL,
  `info_contato` char(255) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_doc`
--

CREATE TABLE `tb_doc` (
  `id_doc` int(6) NOT NULL,
  `tipo_doc` char(45) DEFAULT NULL,
  `is_doc` int(1) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `id_endereco` int(6) NOT NULL,
  `logradouro` char(60) DEFAULT NULL,
  `numero` char(6) DEFAULT NULL,
  `complemento` char(25) DEFAULT NULL,
  `cidade` char(50) DEFAULT NULL,
  `tipo_endereco` char(50) DEFAULT NULL,
  `id_uf` int(2) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id_colaborador` int(4) NOT NULL,
  `cargo` char(45) DEFAULT NULL,
  `descricao` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_genero`
--

CREATE TABLE `tb_genero` (
  `id_genero` int(2) NOT NULL,
  `tipo_genero` int(2) DEFAULT NULL,
  `descricao` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_genero`
--

INSERT INTO `tb_genero` (`id_genero`, `tipo_genero`, `descricao`) VALUES
(1, 1, 'Masculino'),
(2, 2, 'Feminino'),
(3, 3, 'Cisgênero'),
(4, 4, 'Transgênero'),
(5, 5, 'Agênero'),
(6, 6, 'Não-binário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_persona`
--

CREATE TABLE `tb_persona` (
  `id_persona` int(11) NOT NULL,
  `nome_razao` varchar(255) DEFAULT NULL,
  `social_fantasia` varchar(155) DEFAULT NULL,
  `id_tipo_persona` int(4) DEFAULT NULL,
  `id_colaborador` int(6) DEFAULT NULL,
  `id_usuario` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(4) NOT NULL,
  `tipo_status` char(45) DEFAULT NULL,
  `descricao` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `tipo_status`, `descricao`) VALUES
(1, '0', 'Inativo'),
(2, '1', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_persona`
--

CREATE TABLE `tb_tipo_persona` (
  `id_tipo_persona` int(4) NOT NULL,
  `tipo_persona` int(4) DEFAULT NULL,
  `descricao` char(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo_persona`
--

INSERT INTO `tb_tipo_persona` (`id_tipo_persona`, `tipo_persona`, `descricao`) VALUES
(1, 1, 'Colaborador'),
(2, 2, 'Fornecedor'),
(3, 3, 'Cliente PJ'),
(4, 4, 'Cliente PF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_uf`
--

CREATE TABLE `tb_uf` (
  `id_uf` int(2) NOT NULL,
  `uf` char(2) DEFAULT NULL,
  `descricao` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_uf`
--

INSERT INTO `tb_uf` (`id_uf`, `uf`, `descricao`) VALUES
(1, '1', 'AC - Acre'),
(2, '2', 'AM - Amazonas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(4) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `senha_usuario` char(12) DEFAULT NULL,
  `hash` varchar(45) DEFAULT NULL,
  `id_acl` int(2) DEFAULT NULL,
  `id_status` int(4) DEFAULT NULL,
  `id_genero` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `hash`, `id_acl`, `id_status`, `id_genero`) VALUES
(1, 'Nerildo Viana', 'prof.nerildo@hotmail.com', 'Tito@302010', '12582Apm45', 1, 2, 1),
(2, 'Nerildo Viana', 'prof.nerildo@hotmail.com', 'Tito@302010', '12582Apm45', 1, 2, 1),
(3, 'Nerildo Viana', 'prof.nerildo@hotmail.com', 'Tito@302010', '12582Apm45', 1, 2, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_acl`
--
ALTER TABLE `tb_acl`
  ADD PRIMARY KEY (`id_acl`),
  ADD KEY `id_status` (`id_status`) USING BTREE;

--
-- Índices para tabela `tb_colaborador`
--
ALTER TABLE `tb_colaborador`
  ADD PRIMARY KEY (`id_colaborador`);

--
-- Índices para tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `tb_doc`
--
ALTER TABLE `tb_doc`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Índices para tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE,
  ADD KEY `id_uf` (`id_uf`) USING BTREE;

--
-- Índices para tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id_colaborador`);

--
-- Índices para tabela `tb_genero`
--
ALTER TABLE `tb_genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices para tabela `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE,
  ADD KEY `id_tipo_persona` (`id_tipo_persona`) USING BTREE,
  ADD KEY `id_colaborador` (`id_colaborador`) USING BTREE;

--
-- Índices para tabela `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices para tabela `tb_tipo_persona`
--
ALTER TABLE `tb_tipo_persona`
  ADD PRIMARY KEY (`id_tipo_persona`);

--
-- Índices para tabela `tb_uf`
--
ALTER TABLE `tb_uf`
  ADD PRIMARY KEY (`id_uf`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`,`nome_usuario`,`email_usuario`),
  ADD KEY `id_acl` (`id_acl`) USING BTREE,
  ADD KEY `id_genero` (`id_genero`) USING BTREE,
  ADD KEY `id_status` (`id_status`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_acl`
--
ALTER TABLE `tb_acl`
  MODIFY `id_acl` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_colaborador`
--
ALTER TABLE `tb_colaborador`
  MODIFY `id_colaborador` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `id_contato` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_doc`
--
ALTER TABLE `tb_doc`
  MODIFY `id_doc` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  MODIFY `id_endereco` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_genero`
--
ALTER TABLE `tb_genero`
  MODIFY `id_genero` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_persona`
--
ALTER TABLE `tb_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_tipo_persona`
--
ALTER TABLE `tb_tipo_persona`
  MODIFY `id_tipo_persona` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_uf`
--
ALTER TABLE `tb_uf`
  MODIFY `id_uf` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_acl`
--
ALTER TABLE `tb_acl`
  ADD CONSTRAINT `tb_acl_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD CONSTRAINT `tb_contato_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_doc`
--
ALTER TABLE `tb_doc`
  ADD CONSTRAINT `tb_doc_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD CONSTRAINT `tb_endereco_ibfk_1` FOREIGN KEY (`id_uf`) REFERENCES `tb_uf` (`id_uf`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_endereco_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD CONSTRAINT `tb_persona_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_persona_ibfk_3` FOREIGN KEY (`id_colaborador`) REFERENCES `tb_colaborador` (`id_colaborador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_persona_ibfk_4` FOREIGN KEY (`id_tipo_persona`) REFERENCES `tb_tipo_persona` (`id_tipo_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_acl`) REFERENCES `tb_acl` (`id_acl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_usuario_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `tb_genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_usuario_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
