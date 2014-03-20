/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : mark-it

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2014-03-20 13:54:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tuts
-- ----------------------------
DROP TABLE IF EXISTS `tuts`;
CREATE TABLE `tuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) DEFAULT NULL,
  `bericht` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `videolink` varchar(255) DEFAULT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tuts
-- ----------------------------
INSERT INTO `tuts` VALUES ('1', 'Tut', 'dfdshufhdufhsdufhdshfudhsufhudsfus', '1', '', 'http://www.startpagina.nl/athene/dochters/php/images/php-logo.jpg', 'Jordy');
INSERT INTO `tuts` VALUES ('2', 'Foto', 'dfdshufhdufhsdufhdshfudhsufhudsfus', '2', '', 'http://twittermania.nl/wp-content/uploads/2009/06/Afbeelding-12.png', 'Glen');
INSERT INTO `tuts` VALUES ('3', 'Video', 'dfdshufhdufhsdufhdshfudhsufhudsfus', '3', '//www.youtube.com/embed/wn40ARXhas0', '', 'Nick');
INSERT INTO `tuts` VALUES ('9', 'Jquery onzin!', 'alalalala jordy is de beste codeur ever!', '4', '', 'http://www.schoolplaten.com/hond-t20990.jpg', 'jordy');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'jordy', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
INSERT INTO `users` VALUES ('2', 'Glen', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
INSERT INTO `users` VALUES ('3', 'Nick', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
