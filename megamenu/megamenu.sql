/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : megamenu

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-11-11 20:05:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Teknoloji');
INSERT INTO `kategori` VALUES ('2', 'Ev Esyasi');
INSERT INTO `kategori` VALUES ('3', 'Bahce Urunleri');
INSERT INTO `kategori` VALUES ('4', 'Elektronik');

-- ----------------------------
-- Table structure for urun
-- ----------------------------
DROP TABLE IF EXISTS `urun`;
CREATE TABLE `urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of urun
-- ----------------------------
INSERT INTO `urun` VALUES ('1', 'Masaustu Bilgisayar', '1', '#');
INSERT INTO `urun` VALUES ('2', 'Laptop', '1', '#');
INSERT INTO `urun` VALUES ('3', 'Klavye', '1', '#');
INSERT INTO `urun` VALUES ('4', 'Sifonyer', '2', '#');
INSERT INTO `urun` VALUES ('5', 'TV Sehpahasi', '2', '#');
INSERT INTO `urun` VALUES ('6', 'Yemek Masasi', '2', '#');
INSERT INTO `urun` VALUES ('7', 'Hortum', '3', '#');
INSERT INTO `urun` VALUES ('8', 'Cardak', '3', '#');
INSERT INTO `urun` VALUES ('9', 'Sandalye', '3', '#');
INSERT INTO `urun` VALUES ('10', 'Masa', '3', '#');
INSERT INTO `urun` VALUES ('11', 'Teyp', '4', 'http://www.kablosuzkedi.com');
