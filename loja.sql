CREATE DATABASE IF NOT EXISTS `loja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loja`;

CREATE TABLE IF NOT EXISTS `nota` (
  `cod_nota` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `telefone` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cod_nota`),
  KEY `cod_nota` (`cod_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `item_nota` (
  `cod_item` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `codigo_nota` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`cod_item`),
  KEY `FK_item_nota_nota` (`cod_nota`),
  CONSTRAINT `FK_item_nota_nota` FOREIGN KEY (`cod_nota`) REFERENCES `nota` (`cod_nota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


