/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : db_desa

 Target Server Type    : MariaDB
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 07/01/2019 03:08:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_admin
-- ----------------------------
DROP TABLE IF EXISTS `m_admin`;
CREATE TABLE `m_admin`  (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_update` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_admin
-- ----------------------------
INSERT INTO `m_admin` VALUES (1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL);

-- ----------------------------
-- Table structure for m_kategori
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori`;
CREATE TABLE `m_kategori`  (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_kategori
-- ----------------------------
INSERT INTO `m_kategori` VALUES (0, 'Buruh Migran', NULL, NULL);
INSERT INTO `m_kategori` VALUES (1, 'test12', '2019-01-02 12:16:56', '2019-01-02 11:04:45');
INSERT INTO `m_kategori` VALUES (3, 'wqw', '2019-01-02 12:31:10', '2019-01-02 12:31:18');
INSERT INTO `m_kategori` VALUES (4, 're', '2019-01-02 01:17:23', '2019-01-02 01:17:23');
INSERT INTO `m_kategori` VALUES (5, 'Rizal', '2019-01-02 11:00:40', '2019-01-02 11:00:40');
INSERT INTO `m_kategori` VALUES (6, 'test pengaduan', '2019-01-06 06:52:26', '2019-01-06 06:52:26');

-- ----------------------------
-- Table structure for m_kategori_pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori_pengaduan`;
CREATE TABLE `m_kategori_pengaduan`  (
  `id_kategori_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori_pengaduan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_kategori_pengaduan
-- ----------------------------
INSERT INTO `m_kategori_pengaduan` VALUES (6, 'test kategori', '2019-01-06 07:02:54', '2019-01-06 07:02:54');

-- ----------------------------
-- Table structure for m_profile_desa
-- ----------------------------
DROP TABLE IF EXISTS `m_profile_desa`;
CREATE TABLE `m_profile_desa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_profile_desa
-- ----------------------------
INSERT INTO `m_profile_desa` VALUES (1, 'Informasi Umum', '<p>wwwwwsssss1111</p>\r\n', '1gambar.jpg', '1', '2019-01-02 01:51:11', '2019-01-02 09:21:42');
INSERT INTO `m_profile_desa` VALUES (2, 'Sejarah Desa', '<p>samapahhahahah</p>\r\n', '2gambar.jpg', '1', '2019-01-02 01:51:11', '2019-01-02 08:57:53');
INSERT INTO `m_profile_desa` VALUES (3, 'Jumlah Penduduk', '<p>samapah</p>\r\n', '3gambar.jpg', '1', '2019-01-02 01:51:11', '2019-01-02 09:22:25');
INSERT INTO `m_profile_desa` VALUES (4, 'Jenis Pekerjaan', '<p>samapahaa</p>\r\n', '4gambar.jpg', '1', '2019-01-02 01:51:11', '2019-01-06 03:31:22');
INSERT INTO `m_profile_desa` VALUES (5, 'Peraturan Desa', '<p>samapah</p>\r\n', '5gambar.jpg', '1', '2019-01-02 01:51:11', '2019-01-02 09:38:00');
INSERT INTO `m_profile_desa` VALUES (6, 'Kata Mutiara', '<p>mari korupsi wkwkwkwwkwk</p>\r\n', '6gambar.jpg', NULL, NULL, '2019-01-06 03:31:35');
INSERT INTO `m_profile_desa` VALUES (7, 'Letak Geografis', '<p>wkwkwkwkland</p>\r\n', '7gambar.jpg', NULL, NULL, '2019-01-06 03:35:03');
INSERT INTO `m_profile_desa` VALUES (8, 'Buruh Migran', '<p>wkwkwkwkland</p>\r\n', '7gambar.jpg', NULL, NULL, '2019-01-06 03:35:03');

-- ----------------------------
-- Table structure for t_artikel
-- ----------------------------
DROP TABLE IF EXISTS `t_artikel`;
CREATE TABLE `t_artikel`  (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_artikel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_artikel
-- ----------------------------
INSERT INTO `t_artikel` VALUES (6, 'xxxx', '<p>xxx</p>\r\n', '1546609608artikel.jpg', '1', '2019-01-02 11:29:33', '2019-01-04 02:46:48');

-- ----------------------------
-- Table structure for t_berita
-- ----------------------------
DROP TABLE IF EXISTS `t_berita`;
CREATE TABLE `t_berita`  (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_berita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_berita
-- ----------------------------
INSERT INTO `t_berita` VALUES (1, 0, 'test buruh ', '<p>test buruh 1</p>\r\n', '1546610419berita.jpg', '1', '2019-01-04 03:00:19', '2019-01-04 03:00:19');
INSERT INTO `t_berita` VALUES (3, 0, 'test buruh ', '<p>test buruh 1</p>\r\n', '1546610419berita.jpg', '1', '2019-01-04 03:00:19', '2019-01-04 03:00:19');
INSERT INTO `t_berita` VALUES (5, 5, 'wwww111111', '<p>11111</p>\r\n', '1546424446berita.jpg', '1', '2019-01-02 04:32:58', '2019-01-02 11:20:46');
INSERT INTO `t_berita` VALUES (7, 5, 're', '<p>ter</p>\r\n', '1546424462berita.jpg', '1', '2019-01-02 10:00:49', '2019-01-02 11:21:02');
INSERT INTO `t_berita` VALUES (8, 4, 'dfda', '<p>dfdaf</p>\r\n', '1546422002berita.jpg', '1', '2019-01-02 10:35:24', '2019-01-02 10:40:02');
INSERT INTO `t_berita` VALUES (9, 3, '1', '<p>1</p>\r\n', '1546456382berita.jpg', '1', '2019-01-02 11:28:25', '2019-01-02 08:13:02');
INSERT INTO `t_berita` VALUES (10, 4, '11111111', '<p>1111</p>\r\n', '1546424935berita.jpg', '1', '2019-01-02 11:28:55', '2019-01-02 11:28:55');
INSERT INTO `t_berita` VALUES (12, 0, 'test buruh ', '<p>test buruh 1</p>\r\n', '1546610419berita.jpg', '1', '2019-01-04 03:00:19', '2019-01-04 03:00:19');
INSERT INTO `t_berita` VALUES (20, 0, 'test buruh ', '<p>test buruh 1</p>\r\n', '1546610419berita.jpg', '1', '2019-01-04 03:00:19', '2019-01-04 03:00:19');
INSERT INTO `t_berita` VALUES (21, 0, 'test buruh  tmashovdfda', '<p>buruh test2</p>\r\n', '1546610442berita.jpg', '1', '2019-01-04 03:00:42', '2019-01-04 03:00:42');
INSERT INTO `t_berita` VALUES (33, 0, 'test buruh ', '<p>test buruh 1</p>\r\n', '1546610419berita.jpg', '1', '2019-01-04 03:00:19', '2019-01-04 03:00:19');
INSERT INTO `t_berita` VALUES (66, 0, 'test buruh ', '<p>test buruh 1</p>\r\n', '1546610419berita.jpg', '1', '2019-01-04 03:00:19', '2019-01-04 03:00:19');

-- ----------------------------
-- Table structure for t_galeri
-- ----------------------------
DROP TABLE IF EXISTS `t_galeri`;
CREATE TABLE `t_galeri`  (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_foto` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_galeri`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_galeri
-- ----------------------------
INSERT INTO `t_galeri` VALUES (26, 'Makanan Khas', '1546449932galeri.jpg', NULL, 'test', '1', '2019-01-02 06:25:32', '2019-01-02 06:25:32');
INSERT INTO `t_galeri` VALUES (28, 'Produk Lokal', '1546604586galeri.jpg', NULL, 'foro galeri', '1', '2019-01-04 01:23:06', '2019-01-04 01:23:06');
INSERT INTO `t_galeri` VALUES (29, 'Tradisional', '1546604604galeri.jpg', NULL, 'tradisional', '1', '2019-01-04 01:23:24', '2019-01-04 01:23:24');
INSERT INTO `t_galeri` VALUES (30, 'Kesenian', '1546616928galeri.jpg', NULL, 'www', '1', '2019-01-04 04:48:48', '2019-01-04 04:48:48');
INSERT INTO `t_galeri` VALUES (31, 'Makanan Khas', '1546617012galeri.jpg', NULL, 'rdfasd', '1', '2019-01-04 04:50:12', '2019-01-04 04:50:12');
INSERT INTO `t_galeri` VALUES (32, 'Kesenian', '1546617030galeri.jpg', NULL, 'ffas', '1', '2019-01-04 04:50:30', '2019-01-04 04:50:30');
INSERT INTO `t_galeri` VALUES (33, 'Kesenian', '1546793957galeri.jpg', 'test', 'ada judul', 'admin', '2019-01-06 05:59:17', '2019-01-06 05:59:17');

-- ----------------------------
-- Table structure for t_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `t_kegiatan`;
CREATE TABLE `t_kegiatan`  (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_kegiatan
-- ----------------------------
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

-- ----------------------------
-- Table structure for t_media
-- ----------------------------
DROP TABLE IF EXISTS `t_media`;
CREATE TABLE `t_media`  (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_media` int(11) NULL DEFAULT NULL COMMENT '0 = gambar header, 1 = file anggaran',
  `filename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_media`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_media
-- ----------------------------
INSERT INTO `t_media` VALUES (12, 0, '1546442393slide.jpg', 'test', 'd', '1', '2019-01-02 04:19:53', '2019-01-02 04:19:53');
INSERT INTO `t_media` VALUES (24, 1, '6a8b0ac1-a23b-4e32-8c65-63ef5a5e6df1.jpg', NULL, 'dddd', '1', '2019-01-02 06:02:38', '2019-01-02 06:02:38');
INSERT INTO `t_media` VALUES (27, 0, '1546793824slide.jpg', 'gendut', 'wkwkwk', 'admin', '2019-01-06 05:57:04', '2019-01-06 05:57:04');

-- ----------------------------
-- Table structure for t_pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `t_pengaduan`;
CREATE TABLE `t_pengaduan`  (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_kategori` int(11) NULL DEFAULT NULL,
  `judul` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1 COMMENT '0=read, 1 =unread',
  PRIMARY KEY (`id_pengaduan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_pengaduan
-- ----------------------------
INSERT INTO `t_pengaduan` VALUES (1, 'Rizal Iman Muttaqin', 'im.izal03@gmail.com', '081280972009', 6, 'xxxx', 'dfsafawe', '2019-01-04 03:58:42', '2019-01-04 03:58:42', 0);
INSERT INTO `t_pengaduan` VALUES (2, 'Rizal Iman Muttaqin', 'im.izal03@gmail.com', '081280972009', 6, 'xxxx', 'dfsafawe', '2019-01-04 04:02:23', '2019-01-04 04:02:23', 0);
INSERT INTO `t_pengaduan` VALUES (3, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:04:00', '2019-01-04 04:04:00', 0);
INSERT INTO `t_pengaduan` VALUES (4, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:05:57', '2019-01-04 04:05:57', 0);
INSERT INTO `t_pengaduan` VALUES (5, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:06:01', '2019-01-04 04:06:01', 0);
INSERT INTO `t_pengaduan` VALUES (6, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 'xxxx', 'dfadfadfaf', '2019-01-04 04:08:03', '2019-01-04 04:08:03', 0);
INSERT INTO `t_pengaduan` VALUES (7, 'Rizal Iman Muttaqin', 'admin@gmail.com', '081280972009', 6, 're', 'wkwkwk', '2019-01-06 03:16:35', '2019-01-06 03:16:35', 0);
INSERT INTO `t_pengaduan` VALUES (8, 'test', 'im.izal03@gmail.com', '1231313213', 6, 'babi', 'ekjrkwalf', '2019-01-06 07:18:27', '2019-01-06 07:18:27', 1);

SET FOREIGN_KEY_CHECKS = 1;
