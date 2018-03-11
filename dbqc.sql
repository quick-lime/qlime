/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbqc
Target Host: localhost
Target Database: dbqc
Date: 3/10/2018 11:32:06 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nik` int(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` char(1) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for relawan
-- ----------------------------
DROP TABLE IF EXISTS `relawan`;
CREATE TABLE `relawan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tps` int(5) NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for suara
-- ----------------------------
DROP TABLE IF EXISTS `suara`;
CREATE TABLE `suara` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `idrelawan` int(6) NOT NULL,
  `calon1` int(6) NOT NULL,
  `calon2` int(6) NOT NULL,
  `calon3` int(6) NOT NULL,
  `tidaksah` int(6) NOT NULL,
  `dpt` int(6) NOT NULL,
  `kesempatan` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `idadmin` int(5) DEFAULT NULL,
  `verifikasi` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `admin` VALUES ('5', '123123', 'firman', 'firman', 'Firman', 'Laki-Laki', 'super', '1', '0812', 'Aceh');
INSERT INTO `admin` VALUES ('6', '123', 'agus', 'agus', 'agus', 'Laki-Laki', 'admin', '1', '08213', 'medan\r\n');
INSERT INTO `relawan` VALUES ('1', '12110046', 'Agus Setiawann', '12', '12', 'Laki-Laki', 'Medan', '1', '0');
INSERT INTO `relawan` VALUES ('2', '12110047', 'Firman', '123', '123', 'Laki-Laki', 'Aceh', '2', '1');
INSERT INTO `relawan` VALUES ('3', '111111111', '123', '123', '123', 'Laki-Laki', '123', '12', '1');
INSERT INTO `relawan` VALUES ('4', '123', '123', '123', '123', 'Laki-Laki', '123', '12', '1');
INSERT INTO `relawan` VALUES ('5', '12', 'Joko Setiawan', '0899', '123', 'Laki-Laki', 'Medan', '23', '0');
INSERT INTO `relawan` VALUES ('6', '123333333333', 'Joko Setiawan', '0899', '123', 'Laki-Laki', 'Medan', '23', '0');
INSERT INTO `relawan` VALUES ('7', '232131', 'Firman', '082137', '123', 'Laki-Laki', 'xasdsad', '3', '1');
INSERT INTO `relawan` VALUES ('8', '12124213', 'Yusuf', '082231', '123', 'Laki-Laki', 'sadasda', '4', '1');
INSERT INTO `suara` VALUES ('8', '2', '12', '23', '21', '12', '12', '23', '2018-03-10', '23:15:15', null, null);
