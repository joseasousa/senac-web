-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2017 às 15:13
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exer2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cod_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cod_aluno`, `nome_aluno`) VALUES
(1, 'Aluno 1'),
(2, 'Aluno 2'),
(3, 'Aluno 3'),
(4, 'Aluno 4'),
(5, 'Aluno 5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_trab`
--

CREATE TABLE `aluno_trab` (
  `cod_alu_tra` int(11) NOT NULL,
  `cod_alu` int(11) NOT NULL,
  `cod_trabalho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno_trab`
--

INSERT INTO `aluno_trab` (`cod_alu_tra`, `cod_alu`, `cod_trabalho`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 4),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `cod_autor` int(11) NOT NULL,
  `nome_autor` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`cod_autor`, `nome_autor`) VALUES
(1, 'Autor 1'),
(2, 'Autor 2'),
(3, 'Autor 3'),
(4, 'Autor 4'),
(5, 'Autor 5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome_cliente`) VALUES
(1, 'Cliente 1'),
(2, 'Cliente 2'),
(3, 'Cliente 3'),
(4, 'Cliente 4'),
(5, 'Cliente 5'),
(6, 'Cliente 6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `cod_contrato` int(11) NOT NULL,
  `cod_empresa` int(11) NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`cod_contrato`, `cod_empresa`, `data_ini`, `data_fim`) VALUES
(1, 1, '2017-02-01', '2017-10-21'),
(2, 1, '2017-02-01', '2017-10-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `cod_departamento` int(11) NOT NULL,
  `nome_departamento` varchar(40) NOT NULL,
  `cod_diretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`cod_departamento`, `nome_departamento`, `cod_diretor`) VALUES
(1, 'departamento 1', 3),
(2, 'departamento 2', 2),
(3, 'departamento 3', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretor`
--

CREATE TABLE `diretor` (
  `cod_diretor` int(11) NOT NULL,
  `nome_diretor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diretor`
--

INSERT INTO `diretor` (`cod_diretor`, `nome_diretor`) VALUES
(1, 'Diretor 1'),
(2, 'Diretor 2'),
(3, 'Diretor 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cod_emp` int(11) NOT NULL,
  `CNPJ` varchar(20) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`cod_emp`, `CNPJ`, `nome`, `endereco`) VALUES
(1, '31283y12j1jbe2', 'nome empresa  1', 'rua a'),
(2, '31283y12j1jbe3', 'nome empresa  2', 'rua a 1'),
(3, '31283y12j1be2', 'nome empresa  3', 'rua b'),
(4, '31283y12j1jb52', 'nome empresa  4', 'rua a'),
(5, '3128712j1jbe2', 'nome empresa  5', 'rua a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomenda`
--

CREATE TABLE `encomenda` (
  `cod_encomenda` int(11) NOT NULL,
  `descricao_encomenda` tinytext NOT NULL,
  `cod_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encomenda`
--

INSERT INTO `encomenda` (`cod_encomenda`, `descricao_encomenda`, `cod_cliente`) VALUES
(1, 'dsadas dsadas', 1),
(2, 'dsadas dsadas', 1),
(3, 'dsadas dsadas', 2),
(4, 'dsadas dsadas', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `cod_equipe` int(11) NOT NULL,
  `nome_equipe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`cod_equipe`, `nome_equipe`) VALUES
(1, 'equ 1'),
(2, 'equ 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `cod_jogador` int(11) NOT NULL,
  `nome_jogador` varchar(40) DEFAULT NULL,
  `cod_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`cod_jogador`, `nome_jogador`, `cod_equipe`) VALUES
(1, 'jogador1 ', 1),
(2, 'jogador2', 1),
(3, 'jogador3', 1),
(4, 'jogador4 ', 2),
(5, 'jogador5 ', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `cod_livro` int(11) NOT NULL,
  `nome_livro` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`cod_livro`, `nome_livro`) VALUES
(1, 'livro 1'),
(2, 'livro 2'),
(3, 'livro 3'),
(4, 'livro 4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_autor`
--

CREATE TABLE `livro_autor` (
  `cod_livro_autor` int(11) NOT NULL,
  `cod_autor` int(11) NOT NULL,
  `cod_livro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro_autor`
--

INSERT INTO `livro_autor` (`cod_livro_autor`, `cod_autor`, `cod_livro`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `dat_nacimento` date NOT NULL,
  `profissao` varchar(40) DEFAULT NULL,
  `cod_prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`cpf`, `nome`, `endereco`, `dat_nacimento`, `profissao`, `cod_prof`) VALUES
('23454465756', 'prof 1', 'rua 200', '1990-03-20', 'csac', 1),
('23454465456', 'prof 1', 'rua 200', '1990-03-20', 'csac', 2),
('22454465756', 'prof 1', 'rua 200', '1990-03-20', 'csac', 3),
('23454465759', 'prof 1', 'rua 200', '1990-03-20', 'csac', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE `trabalho` (
  `cod_tra` int(11) NOT NULL,
  `titulo_trabalho` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `trabalho`
--

INSERT INTO `trabalho` (`cod_tra`, `titulo_trabalho`) VALUES
(1, 'Trabalho 1'),
(2, 'Trabalho 2'),
(3, 'Trabalho 3'),
(4, 'Trabalho 4'),
(5, 'Trabalho 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cod_aluno`);

--
-- Indexes for table `aluno_trab`
--
ALTER TABLE `aluno_trab`
  ADD PRIMARY KEY (`cod_alu_tra`),
  ADD KEY `fk_aluno_trab_aluno` (`cod_alu`),
  ADD KEY `fk_aluno_trab_trab` (`cod_trabalho`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`cod_autor`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`cod_contrato`),
  ADD KEY `fk_contrato_empresa` (`cod_empresa`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`cod_departamento`),
  ADD KEY `fk_departamento_diretor` (`cod_diretor`);

--
-- Indexes for table `diretor`
--
ALTER TABLE `diretor`
  ADD PRIMARY KEY (`cod_diretor`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod_emp`);

--
-- Indexes for table `encomenda`
--
ALTER TABLE `encomenda`
  ADD PRIMARY KEY (`cod_encomenda`),
  ADD KEY `fk_encomenda_cliente` (`cod_cliente`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`cod_equipe`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`cod_jogador`),
  ADD KEY `fk_jogador_equipe` (`cod_equipe`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- Indexes for table `livro_autor`
--
ALTER TABLE `livro_autor`
  ADD PRIMARY KEY (`cod_livro_autor`),
  ADD KEY `fk_livro_autor_livro` (`cod_livro`),
  ADD KEY `fk_livro_autor_autor` (`cod_autor`);

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`cod_prof`);

--
-- Indexes for table `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`cod_tra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `aluno_trab`
--
ALTER TABLE `aluno_trab`
  MODIFY `cod_alu_tra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `cod_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `cod_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `cod_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `diretor`
--
ALTER TABLE `diretor`
  MODIFY `cod_diretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `encomenda`
--
ALTER TABLE `encomenda`
  MODIFY `cod_encomenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `cod_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `cod_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `livro_autor`
--
ALTER TABLE `livro_autor`
  MODIFY `cod_livro_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `cod_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trabalho`
--
ALTER TABLE `trabalho`
  MODIFY `cod_tra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno_trab`
--
ALTER TABLE `aluno_trab`
  ADD CONSTRAINT `fk_aluno_trab_aluno` FOREIGN KEY (`cod_alu`) REFERENCES `aluno` (`cod_aluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aluno_trab_trab` FOREIGN KEY (`cod_trabalho`) REFERENCES `trabalho` (`cod_tra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_contrato_empresa` FOREIGN KEY (`cod_empresa`) REFERENCES `empresa` (`cod_emp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_departamento_diretor` FOREIGN KEY (`cod_diretor`) REFERENCES `diretor` (`cod_diretor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `encomenda`
--
ALTER TABLE `encomenda`
  ADD CONSTRAINT `fk_encomenda_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `fk_jogador_equipe` FOREIGN KEY (`cod_equipe`) REFERENCES `equipe` (`cod_equipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `livro_autor`
--
ALTER TABLE `livro_autor`
  ADD CONSTRAINT `fk_livro_autor_autor` FOREIGN KEY (`cod_autor`) REFERENCES `autor` (`cod_autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_livro_autor_livro` FOREIGN KEY (`cod_livro`) REFERENCES `livro` (`cod_livro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
