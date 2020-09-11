SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `u773490287_hardc` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `u773490287_hardc`;

CREATE TABLE `administrador` (
  `id_adm` int(3) NOT NULL,
  `login_adm` varchar(30) DEFAULT NULL,
  `senha_adm` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `comentario` (
  `id_comentario` int(3) NOT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `id_us` int(3) DEFAULT NULL,
  `id_lugar` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `empresa` (
  `id_empresa` int(3) NOT NULL,
  `nome_empresa` varchar(50) DEFAULT NULL,
  `tel_empresa` varchar(12) DEFAULT NULL,
  `email_empresa` varchar(50) DEFAULT NULL,
  `estado_empresa` char(2) DEFAULT NULL,
  `cidade_empresa` varchar(30) DEFAULT NULL,
  `bairro_empresa` varchar(30) DEFAULT NULL,
  `rua_empresa` varchar(50) DEFAULT NULL,
  `numero_empresa` int(5) DEFAULT NULL,
  `cep_empresa` varchar(9) DEFAULT NULL,
  `login_empresa` varchar(30) DEFAULT NULL,
  `senha_empresa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `esportes` (
  `id_esporte` int(3) NOT NULL,
  `nome_esporte` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `esportes` (`id_esporte`, `nome_esporte`) VALUES
(1, 'Skateboard'),
(2, 'Escalada'),
(3, 'Bungee Jump'),
(4, 'Rafting'),
(5, 'Paraquedismo'),
(6, 'Surfing'),
(7, 'Balonismo'),
(8, 'Motocross'),
(9, 'Rapel'),
(10, 'Parkour'),
(11, 'MMA'),
(12, 'Muay Thai');

CREATE TABLE `feedback` (
  `id_feedback` int(3) NOT NULL,
  `mensagem` text,
  `id_us` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `lugar` (
  `id_lugar` int(3) NOT NULL,
  `nome_lugar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `cidade_lugar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `estado_lugar` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `site_lugar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_empresa` int(3) DEFAULT NULL,
  `id_esporte` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `lugar` (`id_lugar`, `nome_lugar`, `cidade_lugar`, `estado_lugar`, `site_lugar`, `imagem`, `id_empresa`, `id_esporte`) VALUES
(1, 'Skate City', 'São Paulo', 'SP', 'http://www.skatecity.com.br/', 'b1f33632f07fce9af50ee3c73c3ceb1c.jpg', 6, 1),
(2, 'Pista de Skate', 'Ribeirão Pires', 'SP', '', '7fe554ce2da2aa57b5179fc391f47129.jpg', 6, 1),
(3, 'Rio Abaixo Rafting Juquitiba', 'Juquitiba', 'SP', 'http://rioabaixo.com/', '9c055c0f1cbb5a30eaf3ecb8b474ea08.jpg', 6, 4),
(4, 'Kango Jango Rafting', 'Socorro', 'SP', 'http://www.kangojango.com.br/', '414c3e2a181068a7105162e04c74416f.jpg', 6, 4),
(5, 'Escola de Paraquedismo Sky Company', 'Boituva', 'SP', 'http://www.paraquedismoskycompany.com.br/', 'de48bc071fd62720ad196cf4cb24f7c0.jpg', 6, 5),
(6, 'Wind Up Indoor Skydiving', 'Canindé', 'SP', 'http://windup.com.br/', 'efd57d5cc8adee12ffb11be6788bd0fe.jpg', 6, 5),
(7, '90 Graus Academia de Escalada Esportiva', 'São Paulo', 'SP', 'http://www.90graus.com.br/', '43be243301e3612afc95ddc7a6d1cab1.jpg', 6, 2),
(8, 'Casa de Pedra Ginásio de Escalada', 'São Paulo', 'SP', 'http://www.casadepedra.com.br/', '7c853b57f63407ac3ea6f2b3a6d7c124.jpg', 6, 2),
(9, 'Maxtreme', 'São Paulo', 'SP', 'https://www.maxtreme.com.br/', 'a7b45061adc3b93e51d576557957c6fe.jpg', 6, 3),
(10, 'Riviera de São Lourenço', 'Bertioga (Praia de São Lourenço)', 'SP', 'http://www.rivieradesaolourenco.com/', 'b4fd49057dc621044c3afa6c472f5f01.jpg', 6, 6),
(11, 'Praia de Itamambuca', 'Ubatuba (Praia de Itamambuca)', 'SP', 'http://www.itamambuca.com.br/', 'd719b8e5bf4bf3e2f418e2270107ae59.jpg', 6, 6),
(12, 'Tracer Parkour', 'Pinheiros', 'SP', 'http://www.tracer.com.br/', '0a116bbfcc19601c2574412a6381db09.jpg', 6, 10),
(13, 'Lepartanos', 'São Paulo', 'SP', 'http://www.lepartanos.com/', '414f20b2ffdbcb62059f5ae3f08388d0.jpg', 6, 10),
(14, 'RM Racing', 'Campo Belo', 'SP', 'http://www.rmracing.com.br/', '9c04d0f1cfd437e7ec8c9b9c8fa4588d.jpg', 6, 8),
(15, 'Pista de Motocross', 'Praia Grande', 'SP', '', '19142f107b5b096663048c076c4776f9.jpg', 6, 8),
(16, 'Ponte Sumaré', 'Perdizes', 'SP', 'http://www.rapelsp.com.br/rapel-no-viaduto-sumare', '7c9815744635476abe7230e9563951c1.jpg', 6, 9),
(17, 'Casa de Pedra', 'São Paulo', 'SP', 'http://www.casadepedra.com.br/', '99e736754b39e271ffaa94301923cb6c.JPG', 6, 9),
(18, '011 MMA', 'São Paulo', 'SP', 'http://011mma.com.br/gym/', '0e95665a89d7e79c71b73d02a2a28a93.jpg', 6, 11),
(19, 'Lotus Cetepe', 'São Paulo', 'SP', '', '08d3ab2104d624d28160677b33599196.jpg', 6, 11),
(20, 'Academia Capital da Luta', 'Pinheiros', 'SP', '', '2a574e80e3dbf7443e2003f9a925585d.jpg', 6, 11),
(21, 'CT Viscardi Andrade', 'São Paulo', 'SP', 'https://www.ctviscardiandrade.com.br/', '905a30c07596c606f1fca070238de2e8.jpg', 6, 11),
(22, 'Balonismo Boituva', 'Boituva', 'SP', 'http://www.balonismoboituva.com.br/', '3867672a64b42db5c1cb727dfe555d23.jpeg', 6, 7),
(23, 'Escola Brasileira de Balonismo', 'Boituva', 'SP', 'http://www.voodebalao.com/voardebalao/index.php/en', '061bd37b06cd1712c68419d5f3434442.jpg', 6, 7),
(24, 'Urb Fitness', 'São Paulo', 'SP', 'http://urbfitness.com.br/', '66233fbb293cc0965d79ed9acd7db9fd.jpg', 6, 12),
(25, 'Academia Bluefit', 'São Paulo', 'SP', 'https://bluefitacademia.com.br/', '7c9e026862febb739f8eb61e687f2be8.jpg', 6, 12);

CREATE TABLE `usuario` (
  `login_us` varchar(20) DEFAULT NULL,
  `senha_us` varchar(20) DEFAULT NULL,
  `id_us` int(3) NOT NULL,
  `nome_us` varchar(50) DEFAULT NULL,
  `email_us` varchar(50) DEFAULT NULL,
  `cidade_us` varchar(30) NOT NULL,
  `estado_us` char(2) DEFAULT NULL,
  `telefone_us` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_lugar` (`id_lugar`),
  ADD KEY `id_us` (`id_us`);

ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

ALTER TABLE `esportes`
  ADD PRIMARY KEY (`id_esporte`);

ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_us` (`id_us`);
ALTER TABLE `feedback` ADD FULLTEXT KEY `mensagem` (`mensagem`);

ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lugar`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_esporte` (`id_esporte`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_us`);


ALTER TABLE `administrador`
  MODIFY `id_adm` int(3) NOT NULL AUTO_INCREMENT;
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(3) NOT NULL AUTO_INCREMENT;
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(3) NOT NULL AUTO_INCREMENT;
ALTER TABLE `esportes`
  MODIFY `id_esporte` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(3) NOT NULL AUTO_INCREMENT;
ALTER TABLE `lugar`
  MODIFY `id_lugar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
ALTER TABLE `usuario`
  MODIFY `id_us` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id_lugar`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id_us`);

ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id_us`);

ALTER TABLE `lugar`
  ADD CONSTRAINT `lugar_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `lugar_ibfk_2` FOREIGN KEY (`id_esporte`) REFERENCES `esportes` (`id_esporte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
