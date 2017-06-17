/*
Navicat MySQL Data Transfer

Source Server         : oficios
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : novadesk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-17 12:30:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aula
-- ----------------------------
DROP TABLE IF EXISTS `aula`;
CREATE TABLE `aula` (
  `id_aula` int(11) NOT NULL,
  `aula` varchar(50) NOT NULL,
  PRIMARY KEY (`id_aula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aula
-- ----------------------------
INSERT INTO `aula` VALUES ('0', '2');
INSERT INTO `aula` VALUES ('1', '1');
INSERT INTO `aula` VALUES ('3', '3');
INSERT INTO `aula` VALUES ('4', '4');
INSERT INTO `aula` VALUES ('5', '5');
INSERT INTO `aula` VALUES ('6', '6');
INSERT INTO `aula` VALUES ('7', '7');
INSERT INTO `aula` VALUES ('8', '8');
INSERT INTO `aula` VALUES ('9', '9');
INSERT INTO `aula` VALUES ('10', '10');

-- ----------------------------
-- Table structure for chat
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `nom_user` varchar(250) DEFAULT NULL,
  `envio` int(11) DEFAULT NULL,
  `mensaje` varchar(250) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chat
-- ----------------------------
INSERT INTO `chat` VALUES ('38', '2', 'Victor Manuel', '1', 'Hola', '05:47:04', '2017-06-15');
INSERT INTO `chat` VALUES ('39', '2', 'admin', '0', 'Â¿Que sucede Victor?', '05:47:23', '2017-06-15');
INSERT INTO `chat` VALUES ('40', '2', 'Victor Manuel', '1', 'Tengo un pequeÃ±o problema.', '05:47:38', '2017-06-15');
INSERT INTO `chat` VALUES ('41', '0', 'admin', '0', 'A ver dime que sucede?\n', '06:00:55', '2017-06-15');
INSERT INTO `chat` VALUES ('42', '0', 'admin', '0', 'A ver dime que sucede?\n', '06:01:04', '2017-06-15');
INSERT INTO `chat` VALUES ('43', '0', 'admin', '0', 'A ver dime que sucede?\n', '06:01:05', '2017-06-15');
INSERT INTO `chat` VALUES ('44', '0', 'admin', '0', 'A ver dime que sucede?\n', '06:01:59', '2017-06-15');
INSERT INTO `chat` VALUES ('45', '0', 'admin', '0', 'A ver dime que sucede?\n', '06:04:42', '2017-06-15');
INSERT INTO `chat` VALUES ('46', '0', 'admin', '0', 'a ver, Â¿QuÃ© sucede?', '06:14:42', '2017-06-15');
INSERT INTO `chat` VALUES ('47', '2', 'admin', '0', 'A ver, Â¿QuÃ© pasa?', '06:25:47', '2017-06-15');
INSERT INTO `chat` VALUES ('48', '2', 'Victor Manuel', '1', 'Falla la solicitud de Equipo', '06:26:16', '2017-06-15');
INSERT INTO `chat` VALUES ('49', '2', 'Victor Manuel', '1', 'hola', '15:01:41', '2017-06-15');
INSERT INTO `chat` VALUES ('50', '2', 'admin', '0', 'que quieres', '15:01:57', '2017-06-15');
INSERT INTO `chat` VALUES ('51', '2', 'Victor Manuel', '1', 'holas', '15:07:36', '2017-06-15');
INSERT INTO `chat` VALUES ('52', '2', 'Victor Manuel', '1', 'Hola mundo!!', '20:17:16', '2017-06-15');
INSERT INTO `chat` VALUES ('53', '2', 'admin', '0', 'Algo!!', '20:18:33', '2017-06-15');
INSERT INTO `chat` VALUES ('54', '2', 'admin', '0', 'Algo!!', '20:18:37', '2017-06-15');
INSERT INTO `chat` VALUES ('55', '2', 'Victor Manuel', '1', 'Soy victor!!', '20:20:12', '2017-06-15');
INSERT INTO `chat` VALUES ('56', '2', 'admin', '0', 'Yo soy el administrador!', '20:20:40', '2017-06-15');

-- ----------------------------
-- Table structure for cuenta
-- ----------------------------
DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE `cuenta` (
  `id_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `cuenta` varchar(35) DEFAULT NULL,
  `tipo` varchar(35) DEFAULT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `razon` varchar(250) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cuenta`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `cuenta_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cuenta
-- ----------------------------

-- ----------------------------
-- Table structure for danios_equipo
-- ----------------------------
DROP TABLE IF EXISTS `danios_equipo`;
CREATE TABLE `danios_equipo` (
  `id_danios_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `id_aula` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `maquina` varchar(150) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_danios_equipo`),
  KEY `id_aula` (`id_aula`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `danios_equipo_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`),
  CONSTRAINT `danios_equipo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `danios_equipo_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of danios_equipo
-- ----------------------------
INSERT INTO `danios_equipo` VALUES ('1', '1', '2', 'mauqin', 'sas', '88                                ', '2');
INSERT INTO `danios_equipo` VALUES ('3', '1', '2', 'mauqin', 'sas', '88                                ', '1');
INSERT INTO `danios_equipo` VALUES ('4', '1', '2', '99999.000', '10:00', 'falla                                ', '1');
INSERT INTO `danios_equipo` VALUES ('5', '1', '2', '147', '10:00', '                                ', '2');
INSERT INTO `danios_equipo` VALUES ('6', '1', '3', '6.0.9.-9', '5:00 PM', '                                ', '3');

-- ----------------------------
-- Table structure for equipos_externos
-- ----------------------------
DROP TABLE IF EXISTS `equipos_externos`;
CREATE TABLE `equipos_externos` (
  `id_equipo_externo` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `tipo_configuracion` varchar(50) DEFAULT NULL,
  `razon` varchar(250) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_equipo_externo`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `equipos_externos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `equipos_externos_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of equipos_externos
-- ----------------------------
INSERT INTO `equipos_externos` VALUES ('1', 'maquina21', '1', 'actualizar', 'ejemplo', '1');
INSERT INTO `equipos_externos` VALUES ('23', '', '2', '', '', '1');

-- ----------------------------
-- Table structure for estado
-- ----------------------------
DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estado
-- ----------------------------
INSERT INTO `estado` VALUES ('0', null);
INSERT INTO `estado` VALUES ('1', 'Terminado');
INSERT INTO `estado` VALUES ('2', 'Pendiente');
INSERT INTO `estado` VALUES ('3', 'En espera');
INSERT INTO `estado` VALUES ('4', 'Cancelado');

-- ----------------------------
-- Table structure for instalacion_software
-- ----------------------------
DROP TABLE IF EXISTS `instalacion_software`;
CREATE TABLE `instalacion_software` (
  `id_instalacion_software` int(11) NOT NULL AUTO_INCREMENT,
  `id_aula` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `maquina` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `software` varchar(150) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_instalacion_software`),
  KEY `id_aula` (`id_aula`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `instalacion_software_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`),
  CONSTRAINT `instalacion_software_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `instalacion_software_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of instalacion_software
-- ----------------------------
INSERT INTO `instalacion_software` VALUES ('2', '1', '2', '444455', '666                                ', '5555', '1');
INSERT INTO `instalacion_software` VALUES ('3', '1', '2', '444', '\r\n\r\n                                    ', '', '1');
INSERT INTO `instalacion_software` VALUES ('4', '1', '2', 'yy', 'yy                                                    ', 'yy', '1');
INSERT INTO `instalacion_software` VALUES ('5', '8', '2', '192.168.31.37', '                                                    ', 'Netbeans para windows', '2');
INSERT INTO `instalacion_software` VALUES ('6', '1', '2', '129.125.2.1', '                                                    ', '', '1');
INSERT INTO `instalacion_software` VALUES ('7', '1', '2', '192.168.31.37', '                                                    ', '', '3');
INSERT INTO `instalacion_software` VALUES ('8', '1', '2', '12.32.98.29', '                                                    ', '', '3');
INSERT INTO `instalacion_software` VALUES ('9', '3', '2', '192.168.31.37', '                                                    ', '', '3');
INSERT INTO `instalacion_software` VALUES ('10', '1', '3', '22.34.23.23', '                                                    ', 'asasd', '3');
INSERT INTO `instalacion_software` VALUES ('11', '1', '3', '78.09.32.43', '                                                    ', 'jjj', '3');

-- ----------------------------
-- Table structure for plataformas_virtuales
-- ----------------------------
DROP TABLE IF EXISTS `plataformas_virtuales`;
CREATE TABLE `plataformas_virtuales` (
  `id_plataformas_virtuales` int(11) NOT NULL AUTO_INCREMENT,
  `falla` int(11) DEFAULT NULL COMMENT 'Falla del \r\naula virtual = 0 \r\nKabl = 1',
  `id_aula` int(11) DEFAULT NULL,
  `maquina` varchar(150) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_plataformas_virtuales`),
  KEY `id_aula` (`id_aula`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `plataformas_virtuales_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`),
  CONSTRAINT `plataformas_virtuales_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `plataformas_virtuales_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plataformas_virtuales
-- ----------------------------

-- ----------------------------
-- Table structure for restablecer
-- ----------------------------
DROP TABLE IF EXISTS `restablecer`;
CREATE TABLE `restablecer` (
  `id_restablecer` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_restablecer`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `restablecer_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `restablecer_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of restablecer
-- ----------------------------

-- ----------------------------
-- Table structure for restrinccion_red
-- ----------------------------
DROP TABLE IF EXISTS `restrinccion_red`;
CREATE TABLE `restrinccion_red` (
  `id_restrinccion_red` int(11) NOT NULL AUTO_INCREMENT,
  `id_aula` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_restrinccion_red`),
  KEY `id_aula` (`id_aula`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `restrinccion_red_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`),
  CONSTRAINT `restrinccion_red_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `restrinccion_red_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of restrinccion_red
-- ----------------------------
INSERT INTO `restrinccion_red` VALUES ('34', '1', '2', 'ads', '                                ', 'uu', '1');
INSERT INTO `restrinccion_red` VALUES ('35', '1', '2', 'jj', '                                ', '10:00 PM', '3');
INSERT INTO `restrinccion_red` VALUES ('36', '1', '2', 'www.p.com', '                                ', '11:00 AM', '4');

-- ----------------------------
-- Table structure for solicitud_equipo
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_equipo`;
CREATE TABLE `solicitud_equipo` (
  `id_solicitud_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(50) DEFAULT NULL,
  `fecha_inicio` varchar(35) DEFAULT NULL,
  `fecha_fin` varchar(35) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_solicitud_equipo`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_aula` (`lugar`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `solicitud_equipo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `solicitud_equipo_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_equipo
-- ----------------------------

-- ----------------------------
-- Table structure for solicitud_software
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_software`;
CREATE TABLE `solicitud_software` (
  `id_solicitud_software` int(11) NOT NULL AUTO_INCREMENT,
  `software` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_solicitud_software`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `solicitud_software_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `solicitud_software_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_software
-- ----------------------------

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(35) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido_paterno` varchar(35) NOT NULL,
  `apellido_materno` varchar(35) NOT NULL,
  `contrasenia` text NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'admin', 'admin', 'Arguelles', 'Alcazar', '0696c1955c431a45883ce0c544bf7bd6330bebd6b07c377660e016aa756125d8', '1', '0');
INSERT INTO `usuario` VALUES ('2', 'victor', 'Victor Manuel', 'Arguelles', 'Alcazar', '8b8cce0d79bfe0591eb74474dd4a3c95763577f16ba7001d73d861029da79d16', '2', '0');
INSERT INTO `usuario` VALUES ('3', 'alejandro', 'Aleandro', 'Rodriguez', 'Delgado', '3d92d3f6d14021f05bab6da4f0acc2ba1569fdaf7ce42ed154f92d2774bddeb0', '2', '0');
INSERT INTO `usuario` VALUES ('4', 'celina', 'Celina', 'Luis', 'Santos', '190d99555c9abe546b65ed4eba624d54e40b065f6c595c471af4388f7ee50ba4', '2', '1');
