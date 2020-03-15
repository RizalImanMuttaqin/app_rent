/*
 Navicat Premium Data Transfer

 Source Server         : __LOCAL
 Source Server Type    : MariaDB
 Source Server Version : 100322
 Source Host           : localhost:3306
 Source Schema         : market_rent

 Target Server Type    : MariaDB
 Target Server Version : 100322
 File Encoding         : 65001

 Date: 16/03/2020 00:43:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_admin
-- ----------------------------
DROP TABLE IF EXISTS `m_admin`;
CREATE TABLE `m_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of m_admin
-- ----------------------------
BEGIN;
INSERT INTO `m_admin` VALUES (1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for m_kategori
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori`;
CREATE TABLE `m_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of m_kategori
-- ----------------------------
BEGIN;
INSERT INTO `m_kategori` VALUES (18, 'CAMERA', '2020-03-15 04:22:55', '2020-03-15 05:42:16', '1584294136kategori.jpg');
COMMIT;

-- ----------------------------
-- Table structure for m_kategori_pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori_pengaduan`;
CREATE TABLE `m_kategori_pengaduan` (
  `id_kategori_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kategori_pengaduan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of m_kategori_pengaduan
-- ----------------------------
BEGIN;
INSERT INTO `m_kategori_pengaduan` VALUES (6, 'test kategori', '2019-01-06 07:02:54', '2019-01-06 07:02:54');
COMMIT;

-- ----------------------------
-- Table structure for m_profile_desa
-- ----------------------------
DROP TABLE IF EXISTS `m_profile_desa`;
CREATE TABLE `m_profile_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of m_profile_desa
-- ----------------------------
BEGIN;
INSERT INTO `m_profile_desa` VALUES (1, 'Informasi Umum', '<p>wwwwwsssss1111</p>\r\n', '1gambar.jpg', '1', '2019-01-02 01:51:11', '2019-01-02 09:21:42');
INSERT INTO `m_profile_desa` VALUES (2, 'Sejarah Desa', '<p>samapahhahahah</p>\r\n', '2gambar.jpg', '1', '2019-01-02 01:51:11', '2020-03-05 04:08:11');
INSERT INTO `m_profile_desa` VALUES (6, 'A BIT ABOUT US', '<p><strong>What started out as just an idea has developed into one of the best rental shops in the area. We&rsquo;re proud of the business that we&rsquo;ve created, and relish the opportunity to continue offering our rentals and services to customers in the future. Give us a call to see if we might just have what you&rsquo;re looking for.</strong></p>\r\n', '6gambar.jpg', NULL, NULL, '2020-03-05 04:09:22');
INSERT INTO `m_profile_desa` VALUES (7, 'Letak Geografis', '<p>Jalan DD no 25</p>\r\n\r\n<p>RT.12/RW.1</p>\r\n\r\n<p>Menteng Dalam</p>\r\n\r\n<p>Tebet</p>\r\n\r\n<p>Kota Jakarta Selatan</p>\r\n\r\n<p>DKI Jakarta 12870</p>\r\n\r\n<p>Indonesia</p>\r\n', '7gambar.jpg', NULL, NULL, '2020-03-05 03:56:33');
INSERT INTO `m_profile_desa` VALUES (8, 'Buruh Migran', '<p>wkwkwkwkland</p>\r\n', '7gambar.jpg', NULL, NULL, '2019-01-06 03:35:03');
COMMIT;

-- ----------------------------
-- Table structure for t_artikel
-- ----------------------------
DROP TABLE IF EXISTS `t_artikel`;
CREATE TABLE `t_artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_artikel`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of t_artikel
-- ----------------------------
BEGIN;
INSERT INTO `t_artikel` VALUES (6, 'xxxx', '<p>xxx</p>\r\n', '1546609608artikel.jpg', '1', '2019-01-02 11:29:33', '2019-01-04 02:46:48');
COMMIT;

-- ----------------------------
-- Table structure for t_galeri
-- ----------------------------
DROP TABLE IF EXISTS `t_galeri`;
CREATE TABLE `t_galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_foto` varchar(50) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_galeri`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of t_galeri
-- ----------------------------
BEGIN;
INSERT INTO `t_galeri` VALUES (26, 'Makanan Khas', '1546449932galeri.jpg', NULL, 'test', '1', '2019-01-02 06:25:32', '2019-01-02 06:25:32');
INSERT INTO `t_galeri` VALUES (28, 'Produk Lokal', '1546604586galeri.jpg', NULL, 'foro galeri', '1', '2019-01-04 01:23:06', '2019-01-04 01:23:06');
INSERT INTO `t_galeri` VALUES (29, 'Tradisional', '1546604604galeri.jpg', NULL, 'tradisional', '1', '2019-01-04 01:23:24', '2019-01-04 01:23:24');
INSERT INTO `t_galeri` VALUES (30, 'Kesenian', '1546616928galeri.jpg', NULL, 'www', '1', '2019-01-04 04:48:48', '2019-01-04 04:48:48');
INSERT INTO `t_galeri` VALUES (31, 'Makanan Khas', '1546617012galeri.jpg', NULL, 'rdfasd', '1', '2019-01-04 04:50:12', '2019-01-04 04:50:12');
INSERT INTO `t_galeri` VALUES (32, 'Kesenian', '1546617030galeri.jpg', NULL, 'ffas', '1', '2019-01-04 04:50:30', '2019-01-04 04:50:30');
INSERT INTO `t_galeri` VALUES (33, 'Kesenian', '1546793957galeri.jpg', 'test', 'ada judul', 'admin', '2019-01-06 05:59:17', '2019-01-06 05:59:17');
COMMIT;

-- ----------------------------
-- Table structure for t_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `t_kegiatan`;
CREATE TABLE `t_kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of t_kegiatan
-- ----------------------------
BEGIN;
INSERT INTO `t_kegiatan` VALUES (1, 'testing kegiatan', '<p>wererererere</p>\r\n', '1546421358Kegiatan.jpg', '1', '2019-01-02 10:29:18', '2019-01-02 10:29:18');
INSERT INTO `t_kegiatan` VALUES (2, 'tt333', '<p>tt333</p>\r\n', '1546425891kegiatan.jpg', '1', '2019-01-02 10:34:30', '2019-01-02 11:44:51');
INSERT INTO `t_kegiatan` VALUES (3, '444', '<p>33</p>\r\n', '1546425208kegiatan.jpg', '1', '2019-01-02 11:33:28', '2019-01-02 11:33:28');
INSERT INTO `t_kegiatan` VALUES (4, 'tess', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_kegiatan` VALUES (5, 'te', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_kegiatan` VALUES (6, 'e', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_kegiatan` VALUES (7, 'et', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_kegiatan` VALUES (8, 'et', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_kegiatan` VALUES (9, 'te', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_kegiatan` VALUES (10, 'et', '', '1546606555kegiatan.jpg', '1', NULL, '2019-01-04 01:55:55');
COMMIT;

-- ----------------------------
-- Table structure for t_media
-- ----------------------------
DROP TABLE IF EXISTS `t_media`;
CREATE TABLE `t_media` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_media` int(11) DEFAULT NULL COMMENT '0 = gambar header, 1 = file anggaran',
  `filename` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_media`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of t_media
-- ----------------------------
BEGIN;
INSERT INTO `t_media` VALUES (24, 1, '6a8b0ac1-a23b-4e32-8c65-63ef5a5e6df1.jpg', NULL, 'dddd', '1', '2019-01-02 06:02:38', '2019-01-02 06:02:38');
INSERT INTO `t_media` VALUES (27, 0, '1546793824slide.jpg', 'gendut', 'wkwkwk', 'admin', '2019-01-06 05:57:04', '2019-01-06 05:57:04');
INSERT INTO `t_media` VALUES (28, 0, '1583262062slide.jpg', 'work with us', 'get best experience', 'admin', '2020-03-04 02:01:02', '2020-03-04 02:01:02');
COMMIT;

-- ----------------------------
-- Table structure for t_pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `t_pengaduan`;
CREATE TABLE `t_pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 1 COMMENT '0=read, 1 =unread',
  PRIMARY KEY (`id_pengaduan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of t_pengaduan
-- ----------------------------
BEGIN;
INSERT INTO `t_pengaduan` VALUES (1, 'Rizal Iman Muttaqin', 'im.izal03@gmail.com', '081280972009', 6, 'xxxx', 'dfsafawe', '2019-01-04 03:58:42', '2019-01-04 03:58:42', 0);
INSERT INTO `t_pengaduan` VALUES (2, 'Rizal Iman Muttaqin', 'im.izal03@gmail.com', '081280972009', 6, 'xxxx', 'dfsafawe', '2019-01-04 04:02:23', '2019-01-04 04:02:23', 0);
INSERT INTO `t_pengaduan` VALUES (3, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:04:00', '2019-01-04 04:04:00', 0);
INSERT INTO `t_pengaduan` VALUES (4, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:05:57', '2019-01-04 04:05:57', 0);
INSERT INTO `t_pengaduan` VALUES (5, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:06:01', '2019-01-04 04:06:01', 0);
INSERT INTO `t_pengaduan` VALUES (6, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:08:03', '2019-01-04 04:08:03', 0);
INSERT INTO `t_pengaduan` VALUES (7, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 're', 'wkwkwk', '2019-01-06 03:16:35', '2019-01-06 03:16:35', 0);
INSERT INTO `t_pengaduan` VALUES (8, 'test', 'im.izal03@gmail.com', '1231313213', 6, 'babi', 'ekjrkwalf', '2019-01-06 07:18:27', '2019-01-06 07:18:27', 0);
COMMIT;

-- ----------------------------
-- Table structure for t_product
-- ----------------------------
DROP TABLE IF EXISTS `t_product`;
CREATE TABLE `t_product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `harga_sewa` varchar(30) DEFAULT NULL,
  `stock` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_product`) USING BTREE,
  KEY `to_category` (`id_kategori`),
  CONSTRAINT `to_category` FOREIGN KEY (`id_kategori`) REFERENCES `m_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of t_product
-- ----------------------------
BEGIN;
INSERT INTO `t_product` VALUES (71, 18, 'new product', '<p>ini lensa mahal</p>\r\n', '1584293128product.jpg', 'admin', '2020-03-15 05:25:28', '2020-03-15 05:25:28', '7000000', '50');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
