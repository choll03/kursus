/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL_MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : kursus

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 08/01/2020 00:05:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `pelatihan`;
CREATE TABLE `pelatihan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pelatihan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `jam_masuk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jam_keluar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengajar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelatihan
-- ----------------------------
INSERT INTO `pelatihan` VALUES (1, 'PL00001', '2019-12-11', '11:00', '16:00', 'Pengajar baru');
INSERT INTO `pelatihan` VALUES (2, 'PL00002', '2019-12-12', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES (3, 'PL00003', '2019-12-12', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES (4, 'PL00004', '2019-12-12', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES (5, 'PL00005', '2019-12-12', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES (6, 'PL00006', '2019-12-12', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES (7, 'PL00007', '2019-12-12', '10:00', '15:00', 'Pengajar 2');
INSERT INTO `pelatihan` VALUES (8, 'PL00008', '2019-12-12', '10:00', '15:00', 'Pengajar 2');

-- ----------------------------
-- Table structure for pelatihan_user
-- ----------------------------
DROP TABLE IF EXISTS `pelatihan_user`;
CREATE TABLE `pelatihan_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pelatihan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelatihan_user
-- ----------------------------
INSERT INTO `pelatihan_user` VALUES (2, 1, 2);
INSERT INTO `pelatihan_user` VALUES (5, 1, 1);
INSERT INTO `pelatihan_user` VALUES (6, 1, 3);
INSERT INTO `pelatihan_user` VALUES (7, 1, 4);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique_username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '1234', 'Admin');
INSERT INTO `user` VALUES (2, 'testing', '1234', 'coba');
INSERT INTO `user` VALUES (3, 'hello', '1234', 'halo');

-- ----------------------------
-- Table structure for user_profile
-- ----------------------------
DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE `user_profile`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `jenis_kelamin` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `no_telpon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_profile
-- ----------------------------
INSERT INTO `user_profile` VALUES (2, 1, '2011-06-01', 'laki laki', 'kp. mana aja boleh deh', '08990928890');

SET FOREIGN_KEY_CHECKS = 1;
