/*
 Navicat Premium Data Transfer

 Source Server         : __LOCAL
 Source Server Type    : MariaDB
 Source Server Version : 100322
 Source Host           : localhost:3306
 Source Schema         : tradepro

 Target Server Type    : MariaDB
 Target Server Version : 100322
 File Encoding         : 65001

 Date: 30/04/2020 13:51:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for temp_import_order
-- ----------------------------
DROP TABLE IF EXISTS `temp_import_order`;
CREATE TABLE `temp_import_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tradeID` varchar(20) DEFAULT NULL,
  `account` varchar(20) DEFAULT NULL,
  `transaction` varchar(20) DEFAULT NULL,
  `product` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `liquidPrice` varchar(20) DEFAULT NULL,
  `refTradeID` varchar(20) DEFAULT NULL,
  `orderDate` varchar(20) DEFAULT NULL,
  `lot` varchar(20) DEFAULT NULL,
  `market_date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;
