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
-- Database: `cds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `nome_real_art` varchar(60) NOT NULL,
  `cod_art` int(11) NOT NULL,
  `nome_artistico` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`nome_real_art`, `cod_art`, `nome_artistico`) VALUES
('nome Real 1', 1, 'nome1'),
('nome Real 2', 2, 'nome2'),
('nome Real 3', 3, 'nome3'),
('nome Real 4', 4, 'nome4'),
('nome Real 5', 5, 'nome5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `art_musica`
--

CREATE TABLE `art_musica` (
  `cod` int(11) NOT NULL,
  `cod_art` int(11) NOT NULL,
  `cod_musica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `art_musica`
--

INSERT INTO `art_musica` (`cod`, `cod_art`, `cod_musica`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 2, 4),
(6, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cantor`
--

CREATE TABLE `cantor` (
  `cod_cantor` int(11) NOT NULL,
  `cod_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `cantor`
--

INSERT INTO `cantor` (`cod_cantor`, `cod_art`) VALUES
(1, 1),
(2, 2),
(3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cd`
--

CREATE TABLE `cd` (
  `cod_cd` int(11) NOT NULL,
  `titulo_cd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `cd`
--

INSERT INTO `cd` (`cod_cd`, `titulo_cd`) VALUES
(1, 'CD1'),
(2, 'CD 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cd_musica`
--

CREATE TABLE `cd_musica` (
  `cod` int(11) NOT NULL,
  `cod_cd` int(11) NOT NULL,
  `cod_musica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `cd_musica`
--

INSERT INTO `cd_musica` (`cod`, `cod_cd`, `cod_musica`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 4),
(7, 2, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compositor`
--

CREATE TABLE `compositor` (
  `cod_compositor` int(11) NOT NULL,
  `cod_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `compositor`
--

INSERT INTO `compositor` (`cod_compositor`, `cod_art`) VALUES
(1, 1),
(2, 2),
(3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE `musica` (
  `cod_musica` int(11) NOT NULL,
  `titulo_musica` varchar(60) NOT NULL,
  `duracao_musica` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`cod_musica`, `titulo_musica`, `duracao_musica`) VALUES
(1, 'titulo 1', 15),
(2, 'titulo 2', 5),
(3, 'titulo 3', 57),
(4, 'titulo 4', 6),
(5, 'titulo 5', 5),
(6, 'titulo 6', 3),
(7, 'titulo 7', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`cod_art`);

--
-- Indexes for table `art_musica`
--
ALTER TABLE `art_musica`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_art_musica_art` (`cod_art`),
  ADD KEY `fk_art_musica_musica` (`cod_musica`);

--
-- Indexes for table `cantor`
--
ALTER TABLE `cantor`
  ADD PRIMARY KEY (`cod_cantor`),
  ADD KEY `fk_cantor_art` (`cod_art`);

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`cod_cd`);

--
-- Indexes for table `cd_musica`
--
ALTER TABLE `cd_musica`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_cd_musica_cd` (`cod_cd`),
  ADD KEY `fk_cd_musica_musica` (`cod_musica`);

--
-- Indexes for table `compositor`
--
ALTER TABLE `compositor`
  ADD PRIMARY KEY (`cod_compositor`),
  ADD KEY `fk_compositor_art` (`cod_art`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`cod_musica`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
  MODIFY `cod_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `art_musica`
--
ALTER TABLE `art_musica`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cantor`
--
ALTER TABLE `cantor`
  MODIFY `cod_cantor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cd`
--
ALTER TABLE `cd`
  MODIFY `cod_cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cd_musica`
--
ALTER TABLE `cd_musica`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `compositor`
--
ALTER TABLE `compositor`
  MODIFY `cod_compositor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `musica`
--
ALTER TABLE `musica`
  MODIFY `cod_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `art_musica`
--
ALTER TABLE `art_musica`
  ADD CONSTRAINT `fk_art_musica_art` FOREIGN KEY (`cod_art`) REFERENCES `artista` (`cod_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_art_musica_musica` FOREIGN KEY (`cod_musica`) REFERENCES `musica` (`cod_musica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cantor`
--
ALTER TABLE `cantor`
  ADD CONSTRAINT `fk_cantor_art` FOREIGN KEY (`cod_art`) REFERENCES `artista` (`cod_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cd_musica`
--
ALTER TABLE `cd_musica`
  ADD CONSTRAINT `fk_cd_musica_cd` FOREIGN KEY (`cod_cd`) REFERENCES `cd` (`cod_cd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cd_musica_musica` FOREIGN KEY (`cod_musica`) REFERENCES `musica` (`cod_musica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `compositor`
--
ALTER TABLE `compositor`
  ADD CONSTRAINT `fk_compositor_art` FOREIGN KEY (`cod_art`) REFERENCES `artista` (`cod_art`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
