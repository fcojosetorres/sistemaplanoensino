# Host: localhost  (Version: 5.5.5-10.1.8-MariaDB)
# Date: 2016-04-19 16:36:35
# Generator: MySQL-Front 5.3  (Build 4.249)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "cad_usuarios"
#

CREATE TABLE `cad_usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "cad_usuarios"
#

INSERT INTO `cad_usuarios` VALUES (1,'FRANCISCO JOSE','3021130','123456');
