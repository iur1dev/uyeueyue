-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cesta
CREATE DATABASE IF NOT EXISTS `cesta` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cesta`;

-- Dumping structure for table cesta.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `data_nascimento` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `cep_empresa` varchar(50) DEFAULT NULL,
  `cidade_empresa` varchar(50) DEFAULT NULL,
  `bairro_empresa` varchar(50) DEFAULT NULL,
  `rua_empresa` varchar(50) DEFAULT NULL,
  `numero_empresa` varchar(50) DEFAULT NULL,
  `data_update` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `data_cadastro` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.clientes: ~10 rows (approximately)
INSERT INTO `clientes` (`id_clientes`, `nome`, `cpf`, `rg`, `data_nascimento`, `celular`, `cep`, `cidade`, `bairro`, `rua`, `numero`, `empresa`, `cep_empresa`, `cidade_empresa`, `bairro_empresa`, `rua_empresa`, `numero_empresa`, `data_update`, `data_cadastro`) VALUES
	(66, 'Consequuntur laborio', 'uy', 'Cillum non et magnam', '', 'Minima optio duis s', '', 'Quam distinctio Fug', 'Consequatur dolorem ', 'Velit eveniet conse', 'Maxime repellendus ', 'Ut eos pariatur Mai', '', 'Ut inventore odio it', 'Temporibus possimus', 'Sit excepturi assume', 'Aspernatur sint et ', '2022-12-07 13:30:56', '2022-12-07'),
	(71, 'Harum excepteur enim', '', 'Est dolorem velit ', '', 'Amet quas in et in ', '', 'Neque aut ipsa enim', 'Fuga Fugit magnam ', 'Ex soluta Nam ut con', 'Est tenetur volupta', 'Sint debitis tempor', '', 'Enim assumenda qui q', 'Autem et mollit labo', 'Fuga Occaecat dolor', 'Ipsum distinctio Re', NULL, '2022-12-07'),
	(72, 'Et aliqua Irure qui', '', 'Velit ullamco aperi', '', 'Ullam eius voluptas ', '', 'Quas quos ipsa quo ', 'Nam excepteur quasi ', 'Vero suscipit aut qu', 'Dolor distinctio Ut', 'Qui commodo officia ', '', 'Et rerum sunt velit', 'Porro voluptate prov', 'Veritatis neque omni', 'Nisi tempora quos od', NULL, '2022-12-07'),
	(73, 'teste', '', 'Autem cupiditate aut', '', 'Non hic id eius adi', '', 'Autem nostrud et id ', 'Accusamus fugiat vo', 'Ipsum qui id ipsa', 'Eligendi dolorem lab', 'Et officiis perferen', '', 'Lorem sequi ex anim ', 'Harum ipsam numquam ', 'Quam aut fugiat com', 'Autem tempore liber', '2022-12-07 08:49:36', '2022-12-07'),
	(74, 'Quis sunt aspernatur', '', 'Fugiat rem sequi ci', '', 'Qui exercitationem n', '', 'Impedit ea asperior', 'Voluptates magni at ', 'Corporis eiusmod ill', 'Duis nihil repudiand', 'Labore placeat ipsu', '', 'Ut et omnis ratione ', 'Corrupti ipsum itaq', 'Veritatis architecto', 'Sunt omnis ex ut in', NULL, '2022-12-12'),
	(75, 'Consequat Est cons', '', 'Incidunt aute error', '', 'Quae qui ratione fac', '', 'Voluptatum hic fuga', 'Iure qui consequatur', 'Magnam culpa odio an', 'Non provident quo v', 'Tempora voluptatem ', '', 'Quam ut duis volupta', 'Duis aliquam omnis n', 'Vitae minima facere ', 'Expedita est sunt l', NULL, '2022-12-13'),
	(76, 'Consectetur aut comm', '', 'Dignissimos culpa do', '', 'Ratione architecto n', '', 'Id distinctio Qui ', 'Iure vel magna ut qu', 'In voluptatem Sit ', 'Omnis aut fugiat ex', 'Sed dolorem aliquid ', '', 'Labore fugit rem du', 'Molestias pariatur ', 'Voluptas nihil ut cu', 'Aliquam asperiores d', NULL, '2022-12-13'),
	(77, 'Amet anim est dolor', '', 'Itaque repellendus ', '', 'Sunt sequi aut earu', '', 'Mollit quidem tempor', 'Similique hic eum ni', 'Et sed et consectetu', 'Aperiam lorem sequi ', 'Aut eaque doloribus ', '', 'Nihil sit adipisicin', 'Nulla voluptatem en', 'Labore autem cupidit', 'Iure dolores aut cor', NULL, '2022-12-13'),
	(78, 'Cupidatat sed aute e', '', 'Nihil cillum accusan', '', 'Perspiciatis consec', '', 'Eveniet animi exce', 'Adipisci voluptas ip', 'Explicabo Aspernatu', 'Blanditiis ullamco v', 'Sunt elit inventore', '', 'Blanditiis est ut s', 'Nulla esse et saepe', 'Debitis duis dolorib', 'Anim impedit except', NULL, '2022-12-13'),
	(79, 'jose', '', 'Pariatur Maxime est', '', 'Inventore sit ipsam ', '', 'Amet illo deleniti ', 'Ad est reprehenderit', 'Error veniam omnis ', 'Lorem voluptatem con', 'Dolore nisi aut aliq', '', 'Nostrud animi provi', 'Error ad necessitati', 'Quia quidem voluptas', 'Ullam quia sint mingfhg', '2022-12-14 09:42:24', '2022-12-13'),
	(80, 'luric', '', 'Ipsa quia itaque fu', '', 'Sunt provident eos ', '', 'Molestiae irure irur', 'Culpa aliquam neces', 'Eos pariatur Facer', 'Suscipit reprehender', 'Commodo eos perspici', '', 'Hic ut cumque illum', 'Delectus cupiditate', 'Quas sunt voluptates', 'Mollit qui quia veri', NULL, '2022-12-28');

-- Dumping structure for table cesta.metodo_pagamento
CREATE TABLE IF NOT EXISTS `metodo_pagamento` (
  `id_metodo_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `metodo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_metodo_pagamento`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.metodo_pagamento: ~4 rows (approximately)
INSERT INTO `metodo_pagamento` (`id_metodo_pagamento`, `metodo`) VALUES
	(1, 'Á Vista'),
	(2, '2 Vezes'),
	(3, '3 Vezes'),
	(4, '4 Vezes');

-- Dumping structure for table cesta.tb_estoque
CREATE TABLE IF NOT EXISTS `tb_estoque` (
  `id_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `id_produtos` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(20,6) NOT NULL,
  `criado_em` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_estoque`),
  KEY `FK_tb_estoque_tb_produtos` (`id_produtos`),
  CONSTRAINT `FK_tb_estoque_tb_produtos` FOREIGN KEY (`id_produtos`) REFERENCES `tb_produtos` (`id_produtos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.tb_estoque: ~16 rows (approximately)
INSERT INTO `tb_estoque` (`id_estoque`, `id_produtos`, `quantidade`, `valor`, `criado_em`) VALUES
	(2, 1, 50, 30.000000, '2022-12-28'),
	(3, 1, 60, 60.000000, '2022-12-28'),
	(4, 3, 40, 40.000000, '2022-12-28'),
	(5, 3, 40, 40.000000, '2022-12-28'),
	(6, 3, 40, 40.000000, '2022-12-28'),
	(7, 3, 40, 40.000000, '2022-12-28'),
	(8, 3, 40, 40.000000, '2022-12-28'),
	(9, 3, 40, 40.000000, '2022-12-28'),
	(10, 2, 60, 60.000000, '2022-12-28'),
	(11, 2, 60, 60.000000, '2022-12-28'),
	(12, 2, 60, 60.000000, '2022-12-28'),
	(14, 1, 0, 0.000000, '2022-12-29'),
	(15, 1, 70, 0.000000, '2022-12-29'),
	(16, 2, 30, 0.000000, '2022-12-29'),
	(17, 3, 40, 0.000000, '2022-12-29'),
	(18, 1, 1, 0.000000, '2022-12-29');

-- Dumping structure for table cesta.tb_produtos
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `id_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produtos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.tb_produtos: ~4 rows (approximately)
INSERT INTO `tb_produtos` (`id_produtos`, `nome`, `quantidade`) VALUES
	(1, 'arroz', 71),
	(2, 'feijao', 30),
	(3, 'macarrao', 40),
	(4, 'teste', 0);

-- Dumping structure for table cesta.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.user: ~2 rows (approximately)
INSERT INTO `user` (`id_user`, `login`, `senha`) VALUES
	(1, 'admin', 'admin'),
	(2, 'test', 'test');

-- Dumping structure for table cesta.valores_parcelados
CREATE TABLE IF NOT EXISTS `valores_parcelados` (
  `id_vendas` int(11) NOT NULL,
  `a_vista` decimal(20,6) DEFAULT NULL,
  `duas_vezes_1` decimal(20,6) DEFAULT NULL,
  `duas_vezes_2` decimal(20,6) DEFAULT NULL,
  `tres_vezes_1` decimal(20,6) DEFAULT NULL,
  `tres_vezes_2` decimal(20,6) DEFAULT NULL,
  `tres_vezes_3` decimal(20,6) DEFAULT NULL,
  `quatro_vezes_1` decimal(20,6) DEFAULT NULL,
  `quatro_vezes_2` decimal(20,6) DEFAULT NULL,
  `quatro_vezes_3` decimal(20,6) DEFAULT NULL,
  `quatro_vezes_4` decimal(20,6) DEFAULT NULL,
  PRIMARY KEY (`id_vendas`) USING BTREE,
  CONSTRAINT `FK_valores_parcelados_vendas` FOREIGN KEY (`id_vendas`) REFERENCES `vendas` (`id_vendas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.valores_parcelados: ~0 rows (approximately)
INSERT INTO `valores_parcelados` (`id_vendas`, `a_vista`, `duas_vezes_1`, `duas_vezes_2`, `tres_vezes_1`, `tres_vezes_2`, `tres_vezes_3`, `quatro_vezes_1`, `quatro_vezes_2`, `quatro_vezes_3`, `quatro_vezes_4`) VALUES
	(290, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table cesta.valor_cesta
CREATE TABLE IF NOT EXISTS `valor_cesta` (
  `valor_cesta` decimal(20,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.valor_cesta: ~0 rows (approximately)
INSERT INTO `valor_cesta` (`valor_cesta`) VALUES
	(600.000000);

-- Dumping structure for table cesta.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `id_vendas` int(11) NOT NULL AUTO_INCREMENT,
  `id_clientes` int(11) DEFAULT NULL,
  `id_metodo_pagamento` int(11) DEFAULT NULL,
  `id_valores_parcelados` int(11) DEFAULT NULL,
  `data_venda` date DEFAULT current_timestamp(),
  `valor_cesta` decimal(20,6) DEFAULT NULL,
  `data_1_parcela` date DEFAULT NULL,
  `data_2_parcela` date DEFAULT NULL,
  `data_3_parcela` date DEFAULT NULL,
  `data_4_parcela` date DEFAULT NULL,
  PRIMARY KEY (`id_vendas`),
  KEY `FK_vendas_clientes` (`id_clientes`),
  KEY `FK_vendas_valores_parcelados` (`id_valores_parcelados`),
  KEY `FK_vendas_metodo_pagamento` (`id_metodo_pagamento`) USING BTREE,
  CONSTRAINT `FK_vendas_clientes` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_vendas_metodo_pagamento` FOREIGN KEY (`id_metodo_pagamento`) REFERENCES `metodo_pagamento` (`id_metodo_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cesta.vendas: ~37 rows (approximately)
INSERT INTO `vendas` (`id_vendas`, `id_clientes`, `id_metodo_pagamento`, `id_valores_parcelados`, `data_venda`, `valor_cesta`, `data_1_parcela`, `data_2_parcela`, `data_3_parcela`, `data_4_parcela`) VALUES
	(253, 66, NULL, NULL, '2022-12-13', NULL, NULL, NULL, NULL, NULL),
	(259, 79, 2, NULL, '2022-12-14', 500.000000, NULL, NULL, NULL, NULL),
	(260, 79, 3, NULL, '2022-12-14', 500.000000, NULL, NULL, NULL, NULL),
	(261, 79, 2, NULL, '2022-12-14', 500.000000, NULL, NULL, NULL, NULL),
	(262, 79, 1, NULL, '2022-12-14', 500.000000, '2022-12-14', NULL, NULL, NULL),
	(263, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(264, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(265, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(266, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(267, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(268, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(269, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(270, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(271, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(272, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(273, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(274, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(275, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(276, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(277, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(278, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(279, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(280, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(281, NULL, NULL, NULL, '2022-12-14', NULL, '0000-00-00', NULL, NULL, NULL),
	(282, 79, 1, NULL, '2022-12-14', 500.000000, NULL, NULL, NULL, NULL),
	(283, NULL, NULL, NULL, '2022-12-20', NULL, '0000-00-00', NULL, NULL, NULL),
	(284, NULL, NULL, NULL, '2022-12-20', NULL, '0000-00-00', NULL, NULL, NULL),
	(285, 79, 2, NULL, '2022-12-19', 600.000000, '2022-12-19', NULL, NULL, NULL),
	(286, 79, 2, NULL, '2022-12-19', 600.000000, '2022-12-19', NULL, NULL, NULL),
	(287, 79, 4, NULL, '2022-12-19', 600.000000, '0000-00-00', NULL, '2022-12-19', '2022-12-19'),
	(288, 78, 4, NULL, '2022-12-19', 600.000000, NULL, NULL, NULL, NULL),
	(289, NULL, NULL, NULL, '2022-12-20', NULL, '0000-00-00', NULL, NULL, NULL),
	(290, 79, 2, NULL, '2022-12-19', 600.000000, '2022-12-20', '2022-12-30', NULL, NULL),
	(292, NULL, NULL, NULL, '2022-12-20', NULL, '0000-00-00', NULL, NULL, NULL),
	(293, 80, 2, NULL, '2022-12-28', 600.000000, '2022-12-14', NULL, NULL, NULL),
	(294, 80, 1, NULL, '2022-12-28', 600.000000, '2020-11-30', NULL, NULL, NULL),
	(295, 80, 4, NULL, '2022-12-28', 600.000000, '2022-12-22', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
