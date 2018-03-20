/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbqc
Target Host: localhost
Target Database: dbqc
Date: 3/21/2018 12:55:49 AM
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
-- Table structure for suara
-- ----------------------------
DROP TABLE IF EXISTS `suara`;
CREATE TABLE `suara` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `idrelawan` int(6) NOT NULL,
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
  `verifikasi` char(1) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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
INSERT INTO `suara` VALUES ('18', '13', '3', '23', '2222', '34', '34', '34', '23', '2018-03-19', '01:34:47', '6', '1', '13-border-20clip-20art-56-Free-Celtic-Vine-Border-Accent-Clipart-Illustration.jpg');
INSERT INTO `suara` VALUES ('19', '9', '34', '34', '34', '23', '23', '43', '34', '2018-03-21', '00:53:40', null, null, '9-539268_425313630848744_1240671638_n.jpg');
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
