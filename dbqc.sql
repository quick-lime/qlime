/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbqc
Target Host: localhost
Target Database: dbqc
Date: 4/11/2018 1:31:14 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nik` int(25) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` char(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `idtps` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for kesempatan
-- ----------------------------
DROP TABLE IF EXISTS `kesempatan`;
CREATE TABLE `kesempatan` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `idsuara` int(10) NOT NULL,
  `calon1` int(6) NOT NULL,
  `calon2` int(6) NOT NULL,
  `calon3` int(6) NOT NULL,
  `tidaksah` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for suara
-- ----------------------------
DROP TABLE IF EXISTS `suara`;
CREATE TABLE `suara` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `idrelawan` int(6) NOT NULL,
  `idtps` int(10) NOT NULL,
  `notps` int(6) NOT NULL,
  `calon1` int(6) NOT NULL,
  `calon2` int(6) NOT NULL,
  `calon3` int(6) NOT NULL,
  `tidaksah` int(6) NOT NULL,
  `dpt` int(6) NOT NULL,
  `kesempatan` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `idadmin` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tps
-- ----------------------------
DROP TABLE IF EXISTS `tps`;
CREATE TABLE `tps` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `jlhtps` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `admin` VALUES ('5', '123123', '123', 'super', 'Firman', 'Laki-Laki', 'super', '1', 'Aceh', null);
INSERT INTO `admin` VALUES ('6', '123', '123', 'admin', 'Agus Setiawan', 'Laki-Laki', 'admin', '1', 'medan\r\n', '5');
INSERT INTO `admin` VALUES ('7', '4324', '123', 'relawan', 'Relawan', 'Perempuan', 'relawan', '1', 'Medan', '2');
INSERT INTO `admin` VALUES ('8', '23', '23', '123', '232', 'Perempuan', 'admin', '1', '', '6');
INSERT INTO `admin` VALUES ('9', '2222', '000', '000', 'Agus Setiawan', 'Perempuan', 'relawan', '1', 'Medan', '2');
INSERT INTO `admin` VALUES ('10', '12321', '111', '111', 'Relawan 2', 'Perempuan', 'relawan', '1', 'Medan', '2');
INSERT INTO `admin` VALUES ('11', '44', '444', '444', '44444', 'Perempuan', 'relawan', '1', 'medan', '8');
INSERT INTO `admin` VALUES ('12', '333', '333', '333', '111111', 'Perempuan', 'relawan', '1', '', '3');
INSERT INTO `admin` VALUES ('13', '3424', '123', '1', 'sdfsf', 'BAJENIS', 'relawan', '0', 'medan', '3');
INSERT INTO `admin` VALUES ('14', '123', '123', '2', 'sadsa', 'PADANG HIL', 'relawan', '0', 'asdad', null);
INSERT INTO `admin` VALUES ('15', '2313', '123', '', 'joko', 'BAJENIS', 'relawan', '1', 'alamat\r\n', null);
INSERT INTO `admin` VALUES ('16', '231', '321', '', '1231', 'BAJENIS', 'relawan', '1', 'alamat', null);
INSERT INTO `admin` VALUES ('17', '213', '34234', '', 'asds', 'BAJENIS', 'relawan', '1', 'dsadsa', null);
INSERT INTO `admin` VALUES ('18', '342', '432', '123', '342', 'Perempuan', 'relawan', '1', '4324', null);
INSERT INTO `admin` VALUES ('19', '231', '3213', '123', 'Agus Setiawan', 'Laki-Laki', 'relawan', '1', '321321', '2');
INSERT INTO `kesempatan` VALUES ('7', '23', '3', '3', '3', '2', '2018-04-11', '00:42:28');
INSERT INTO `suara` VALUES ('22', '7', '2', '3', '34', '33', '23', '3', '100', '0', '2018-04-11', '00:41:37', null);
INSERT INTO `suara` VALUES ('23', '10', '2', '2', '45', '23', '34', '3', '100', '4', '2018-04-11', '00:42:14', null);
INSERT INTO `tps` VALUES ('2', 'KOTA TEBING TINGGI', 'BAJENIS', 'BANDAR SAKTI', '12');
INSERT INTO `tps` VALUES ('3', 'KOTA TEBING TINGGI', 'BAJENIS', 'BEROHOL', '11');
INSERT INTO `tps` VALUES ('4', 'KOTA TEBING TINGGI', 'BAJENIS', 'BULIAN', '10');
INSERT INTO `tps` VALUES ('5', 'KOTA TEBING TINGGI', 'BAJENIS', 'PELITA', '9');
INSERT INTO `tps` VALUES ('6', 'KOTA TEBING TINGGI', 'BAJENIS', 'PINANG MANCUNG', '20');
INSERT INTO `tps` VALUES ('7', 'KOTA TEBING TINGGI', 'BAJENIS', 'TELUK KARANG', '18');
INSERT INTO `tps` VALUES ('8', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'BAGELEN', '23');
INSERT INTO `tps` VALUES ('9', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'SATRIA', '10');
INSERT INTO `tps` VALUES ('10', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'TAMBANGAN', '12');
INSERT INTO `tps` VALUES ('11', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'TAMBANGAN HULU', '32');
INSERT INTO `tps` VALUES ('12', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'TEBING TINGGI', '10');
INSERT INTO `tps` VALUES ('13', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'DEBLOD SUNDORO', '10');
INSERT INTO `tps` VALUES ('14', 'KOTA TEBING TINGGI', 'PADANG HILIR', 'DAMAR SARI', '10');
INSERT INTO `tps` VALUES ('15', 'Kota Lubuk Pakam', 'PADANG HILIR', 'DAMAR SARI', '34');
