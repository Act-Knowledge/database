/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : mark-it

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2014-03-17 09:55:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'jordy', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
