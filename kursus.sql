/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : kursus

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2019-12-12 00:29:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `pelatihan`;
CREATE TABLE `pelatihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pelatihan` varchar(255) NOT NULL,
  `tanggal` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `jam_masuk` varchar(255) DEFAULT NULL,
  `jam_keluar` varchar(255) DEFAULT NULL,
  `pengajar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelatihan
-- ----------------------------
INSERT INTO `pelatihan` VALUES ('1', 'PL00001', '2019-12-11 22:00:56', '10:00', '15:00', 'Pengajar');
INSERT INTO `pelatihan` VALUES ('2', 'PL00002', '2019-12-12 22:00:56', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('3', 'PL00003', '2019-12-12 00:24:14', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('4', 'PL00004', '2019-12-12 00:24:18', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('5', 'PL00005', '2019-12-12 00:24:22', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('6', 'PL00006', '2019-12-12 00:24:26', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('7', 'PL00007', '2019-12-12 00:24:28', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('8', 'PL00008', '2019-12-12 00:24:31', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('9', 'PL00009', '2019-12-12 00:24:34', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES ('10', 'PL00010', '2019-12-12 00:24:39', '10:00', '15:00', 'Pengajar 2');

-- ----------------------------
-- Table structure for pelatihan_user
-- ----------------------------
DROP TABLE IF EXISTS `pelatihan_user`;
CREATE TABLE `pelatihan_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pelatihan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelatihan_user
-- ----------------------------
INSERT INTO `pelatihan_user` VALUES ('2', '1', '2');
INSERT INTO `pelatihan_user` VALUES ('5', '1', '1');
INSERT INTO `pelatihan_user` VALUES ('6', '1', '3');
INSERT INTO `pelatihan_user` VALUES ('7', '1', '4');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '1234', 'Admin');
INSERT INTO `user` VALUES ('2', 'testing', '1234', 'coba');
INSERT INTO `user` VALUES ('3', 'hello', '1234', 'halo');

-- ----------------------------
-- Table structure for user_profile
-- ----------------------------
DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_telpon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_profile
-- ----------------------------
INSERT INTO `user_profile` VALUES ('2', '1', '2011-06-01', 'laki laki', 'kp. mana aja boleh deh', '08990928890');
