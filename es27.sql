drop database if exists es27PHP;
create database es27PHP;
use es27PHP;
CREATE TABLE `candidati` (
    `id_candidato` BIGINT(20) NOT NULL AUTO_INCREMENT,
    `cognome` VARCHAR(30) NOT NULL DEFAULT '',
    `nome` VARCHAR(25) NOT NULL DEFAULT '',
    `id_lista` BIGINT(20) NOT NULL DEFAULT '0',
    `voti` BIGINT(20) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id_candidato`)
)  ENGINE=MYISAM DEFAULT CHARSET=LATIN1 AUTO_INCREMENT=23;

CREATE TABLE `es27php`.`user` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `codicefiscale` VARCHAR(16) NULL,
  `cartaidentita` VARCHAR(9) NULL,
  `patente` VARCHAR(10) NULL,
  PRIMARY KEY (`username`, `email`));


INSERT INTO `candidati` VALUES (1, 'Marietti', 'Giovanni', 2, 3);
INSERT INTO `candidati` VALUES (2, 'Giannini', 'Maurizio', 5, 2);
INSERT INTO `candidati` VALUES (3, 'Calvino', 'Simona', 5, 4);
INSERT INTO `candidati` VALUES (4, 'Santolini', 'Michele', 1, 7);
INSERT INTO `candidati` VALUES (5, 'Mazzetti', 'Luigi', 1, 2);
INSERT INTO `candidati` VALUES (6, 'Attucci', 'Paola', 2, 3);
INSERT INTO `candidati` VALUES (7, 'Mazzi', 'Vittorio', 4, 4);
INSERT INTO `candidati` VALUES (8, 'Masseti', 'Gianni', 4, 4);
INSERT INTO `candidati` VALUES (9, 'D''Antonio', 'Ugo Alberto', 2, 3);
INSERT INTO `candidati` VALUES (10, 'Paolini', 'Pietro', 3, 3);
INSERT INTO `candidati` VALUES (11, 'Corsani', 'Patrizia', 3, 0);
INSERT INTO `candidati` VALUES (12, 'Kindelas', 'Walter', 1, 2);
INSERT INTO `candidati` VALUES (13, 'Barlucci', 'Urbano', 2, 1);
INSERT INTO `candidati` VALUES (14, 'Filippini', 'Otello', 3, 1);
INSERT INTO `candidati` VALUES (15, 'Nantegacci', 'Francesco', 5, 0);
INSERT INTO `candidati` VALUES (16, 'Pollini', 'Andrea', 2, 0);
INSERT INTO `candidati` VALUES (17, 'Sassi', 'Marzia', 4, 1);
INSERT INTO `candidati` VALUES (18, 'Grechi', 'Roberto', 2, 0);
INSERT INTO `candidati` VALUES (19, 'Greco', 'Lucia', 5, 0);
INSERT INTO `candidati` VALUES (20, 'Viciani', 'Daniele', 1, 1);
INSERT INTO `candidati` VALUES (21, 'Bruschi', 'Nicoletta', 4, 1);
INSERT INTO `candidati` VALUES (22, 'Manichi', 'Silvano', 3, 1);

CREATE TABLE `liste` (
`id_lista` bigint(20) NOT NULL auto_increment,
`nome_lista` varchar(50) NOT NULL default '',
PRIMARY KEY (`id_lista`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `liste` VALUES (1, 'Per il bene della gente');
INSERT INTO `liste` VALUES (2, 'Democrazia sempre');
INSERT INTO `liste` VALUES (3, 'Viva l''Italia');
INSERT INTO `liste` VALUES (4, 'Repubblica nuova');
INSERT INTO `liste` VALUES (5, 'Facciamo politica');


