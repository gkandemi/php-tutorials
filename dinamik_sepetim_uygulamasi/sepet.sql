/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : sepet

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-10-30 18:27:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for urun
-- ----------------------------
DROP TABLE IF EXISTS `urun`;
CREATE TABLE `urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urunAdi` varchar(255) DEFAULT NULL,
  `fiyat` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of urun
-- ----------------------------
INSERT INTO `urun` VALUES ('1', 'Monitor', '10.20');
INSERT INTO `urun` VALUES ('2', 'Klavye', '45.50');
INSERT INTO `urun` VALUES ('3', 'Mouse', '10.00');
INSERT INTO `urun` VALUES ('4', 'Kasa', '100.00');
INSERT INTO `urun` VALUES ('5', 'Macbook', '4000.00');
