-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para cesta
CREATE DATABASE IF NOT EXISTS `cesta` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cesta`;

-- Copiando estrutura para tabela cesta.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `data_nasc` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `cep_` varchar(50) DEFAULT NULL,
  `cidade_` varchar(50) DEFAULT NULL,
  `bairro_` varchar(50) DEFAULT NULL,
  `rua_` varchar(50) DEFAULT NULL,
  `numero_` varchar(50) DEFAULT NULL,
  `update` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `criado` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cesta.clientes: ~11 rows (aproximadamente)
INSERT INTO `clientes` (`id_clientes`, `nome`, `cpf`, `rg`, `data_nasc`, `celular`, `cep`, `cidade`, `bairro`, `rua`, `numero`, `empresa`, `cep_`, `cidade_`, `bairro_`, `rua_`, `numero_`, `update`, `criado`) VALUES
	(63, 'Blanditiis harum ex ', '', 'Doloribus beatae err', '', 'Est aut sunt fugiat', '', 'Dolore tempor eligen', 'Optio sit et cupida', 'Voluptas sunt illum', 'Soluta sit eum quid', 'Rerum excepteur accu', '', 'Assumenda illo susci', 'Aliquam quia est ut ', 'Nemo perspiciatis i', 'Non magnam eos venitr', '2022-12-05 13:51:01', '2022-12-05'),
	(64, 'Ducimus ea cillum e', '', 'Suscipit voluptates ', '', 'Perspiciatis consec', '', 'Doloremque id sed al', 'Totam quod rerum mol', 'Neque neque sed dele', 'Vitae voluptas est m', 'Vero laboriosam dig', '', 'Quae dolores explica', 'Dolor qui commodo vo', 'Elit necessitatibus', 'Ad eveniet vel face', NULL, '2022-12-07'),
	(66, 'Consequuntur laborio', 'uy', 'Cillum non et magnam', '', 'Minima optio duis s', '', 'Quam distinctio Fug', 'Consequatur dolorem ', 'Velit eveniet conse', 'Maxime repellendus ', 'Ut eos pariatur Mai', '', 'Ut inventore odio it', 'Temporibus possimus', 'Sit excepturi assume', 'Aspernatur sint et ', '2022-12-07 13:30:56', '2022-12-07'),
	(67, 'Ad rerum quae dolori', '', 'Hic magnam incidunt', '', 'Quia vitae velit aut', '', 'Possimus officia no', 'Enim quasi voluptate', 'Molestiae consequunt', 'Omnis facere aliquip', 'Dolores laboriosam ', '', 'Pariatur Quos et no', 'Autem voluptatem des', 'Dolorum architecto v', 'Laboriosam error vo', NULL, '2022-12-07'),
	(68, 'Eu consectetur paria', '', 'Adipisicing accusamu', '', 'Velit qui voluptatu', '', 'Illum nihil consect', 'Eos ea id non quia ', 'Eaque officia nostru', 'Odit iste ab culpa ', 'Tempore dignissimos', '', 'Consectetur et mole', 'Quos dignissimos vol', 'Ad mollit quis ipsa', 'Et aut totam quo exe', NULL, '2022-12-07'),
	(69, 'Aliquip quos ut comm', '', 'Sunt sed qui iure re', '', 'Provident sit opti', '', 'Fugiat beatae quisq', 'Non sed commodo sit', 'Dolore nesciunt ess', 'Expedita voluptatum ', 'Perspiciatis maxime', '', 'Ea sed consectetur ', 'Reiciendis consequat', 'Excepturi et et sit ', 'Laboris consequatur', NULL, '2022-12-07'),
	(70, 'Optio irure sint de', '', 'Aliquip qui necessit', '', 'Exercitationem susci', '', 'In qui nesciunt vol', 'Nobis expedita illo ', 'In repellendus Nemo', 'Hic iure debitis et ', 'Perferendis debitis ', '', 'Sapiente magni sit c', 'Atque animi non est', 'Sint esse quae et se', 'Soluta aliqua Ab no', NULL, '2022-12-07'),
	(71, 'Harum excepteur enim', '', 'Est dolorem velit ', '', 'Amet quas in et in ', '', 'Neque aut ipsa enim', 'Fuga Fugit magnam ', 'Ex soluta Nam ut con', 'Est tenetur volupta', 'Sint debitis tempor', '', 'Enim assumenda qui q', 'Autem et mollit labo', 'Fuga Occaecat dolor', 'Ipsum distinctio Re', NULL, '2022-12-07'),
	(72, 'Et aliqua Irure qui', '', 'Velit ullamco aperi', '', 'Ullam eius voluptas ', '', 'Quas quos ipsa quo ', 'Nam excepteur quasi ', 'Vero suscipit aut qu', 'Dolor distinctio Ut', 'Qui commodo officia ', '', 'Et rerum sunt velit', 'Porro voluptate prov', 'Veritatis neque omni', 'Nisi tempora quos od', NULL, '2022-12-07'),
	(73, 'teste', '', 'Autem cupiditate aut', '', 'Non hic id eius adi', '', 'Autem nostrud et id ', 'Accusamus fugiat vo', 'Ipsum qui id ipsa', 'Eligendi dolorem lab', 'Et officiis perferen', '', 'Lorem sequi ex anim ', 'Harum ipsam numquam ', 'Quam aut fugiat com', 'Autem tempore liber', '2022-12-07 08:49:36', '2022-12-07'),
	(74, 'Quis sunt aspernatur', '', 'Fugiat rem sequi ci', '', 'Qui exercitationem n', '', 'Impedit ea asperior', 'Voluptates magni at ', 'Corporis eiusmod ill', 'Duis nihil repudiand', 'Labore placeat ipsu', '', 'Ut et omnis ratione ', 'Corrupti ipsum itaq', 'Veritatis architecto', 'Sunt omnis ex ut in', NULL, '2022-12-12');

-- Copiando estrutura para tabela cesta.metodo_pagamento
CREATE TABLE IF NOT EXISTS `metodo_pagamento` (
  `id_metodo` int(11) NOT NULL AUTO_INCREMENT,
  `metodo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_metodo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cesta.metodo_pagamento: ~2 rows (aproximadamente)
INSERT INTO `metodo_pagamento` (`id_metodo`, `metodo`) VALUES
	(1, 'Á Vista'),
	(2, '2 Vezes'),
	(3, '3 Vezes'),
	(4, '4 Vezes');

-- Copiando estrutura para tabela cesta.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `valor` decimal(20,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cesta.produtos: ~0 rows (aproximadamente)
INSERT INTO `produtos` (`valor`) VALUES
	(600.000000);

-- Copiando estrutura para tabela cesta.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cesta.user: ~0 rows (aproximadamente)
INSERT INTO `user` (`id_user`, `nome`, `senha`) VALUES
	(1, 'admin', 'admin');

-- Copiando estrutura para tabela cesta.valor_cesta
CREATE TABLE IF NOT EXISTS `valor_cesta` (
  `valor` decimal(20,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cesta.valor_cesta: ~0 rows (aproximadamente)
INSERT INTO `valor_cesta` (`valor`) VALUES
	(653.000000);

-- Copiando estrutura para tabela cesta.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `id_vendas` int(11) NOT NULL AUTO_INCREMENT,
  `id_clientes` int(11) DEFAULT NULL,
  `id_pagamento` int(11) DEFAULT NULL,
  `create` date DEFAULT current_timestamp(),
  `valor` decimal(20,6) DEFAULT NULL,
  `data_pagamento` date DEFAULT NULL,
  `duas_vezes` date DEFAULT NULL,
  `tres_vezes` date DEFAULT NULL,
  `quatro_vezes` date DEFAULT NULL,
  PRIMARY KEY (`id_vendas`),
  KEY `FK_vendas_clientes` (`id_clientes`),
  KEY `FK_vendas_metodo_pagamento` (`id_pagamento`),
  CONSTRAINT `FK_vendas_clientes` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_vendas_metodo_pagamento` FOREIGN KEY (`id_pagamento`) REFERENCES `metodo_pagamento` (`id_metodo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela cesta.vendas: ~32 rows (aproximadamente)
INSERT INTO `vendas` (`id_vendas`, `id_clientes`, `id_pagamento`, `create`, `valor`, `data_pagamento`, `duas_vezes`, `tres_vezes`, `quatro_vezes`) VALUES
	(130, 63, 1, '2022-12-05', 600.000000, '2022-12-01', '2022-12-06', NULL, NULL),
	(131, 63, 2, '2022-12-06', 600.000000, '2022-12-14', NULL, '2022-12-06', NULL),
	(142, 73, 1, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(146, 73, 1, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(147, 73, 1, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(148, 73, 2, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(149, 73, 1, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(150, 73, 1, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(151, 73, 1, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(152, 73, 2, '2022-12-08', 0.000000, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
	(154, 73, 1, '2022-12-08', 0.000000, '2022-12-12', NULL, NULL, NULL),
	(156, 73, 1, '2022-12-08', 600.000000, '2020-12-12', NULL, NULL, NULL),
	(157, 73, 2, '2022-12-08', 600.000000, '2022-11-12', NULL, NULL, NULL),
	(158, 73, 3, '2022-12-08', 600.000000, NULL, '2022-12-08', NULL, NULL),
	(159, 73, 3, '2022-12-08', 600.000000, '2022-12-08', NULL, NULL, NULL),
	(160, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(161, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(162, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(163, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(164, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(165, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(166, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(167, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(168, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(169, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(170, 73, 2, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(171, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(172, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(173, 73, 3, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(174, 73, 4, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(175, 73, 4, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(176, 73, 4, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(177, 73, 4, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(178, 73, 4, '2022-12-08', 600.000000, NULL, NULL, NULL, NULL),
	(180, 73, 2, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(181, 73, 1, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(182, 73, 3, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(183, 73, 4, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(184, 73, 4, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(185, 73, 4, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(186, 73, 4, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(187, 73, 4, '2022-12-12', 0.000000, NULL, NULL, NULL, NULL),
	(188, 73, 1, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(189, 73, 2, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(190, 73, 3, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(191, 73, 4, '2022-12-12', 600.000000, '2022-12-12', '2022-12-12', '2022-12-12', '2022-12-12'),
	(192, 73, 1, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(193, 73, 1, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(194, 73, 2, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(195, 73, 2, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(196, 73, 3, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(197, 73, 4, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(198, 73, 4, '2022-12-12', 600.000000, NULL, NULL, NULL, NULL),
	(199, 73, 1, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(200, 73, 2, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(201, 73, 3, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(202, 73, 4, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(203, 73, 4, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(204, 73, 4, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(205, 73, 4, '2022-12-12', 653.000000, NULL, NULL, NULL, NULL),
	(206, 74, 1, '2022-12-12', 653.000000, '2022-12-12', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
