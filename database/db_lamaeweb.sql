/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3307
Source Database       : db_lamaeweb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-19 15:28:19
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO categories VALUES ('1', 'เอกสารทางราชการทั่วไป', '							เอกสารทางราชการทั่วๆไป																			');
INSERT INTO categories VALUES ('2', 'เอกสารคู่มือ-แบบฟอร์ม', '');
INSERT INTO categories VALUES ('3', 'ไฟล์นำเสนอ', '');

-- ----------------------------
-- Table structure for `documents`
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_code` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสเอกสาร',
  `register_date` datetime NOT NULL COMMENT 'วันที่ลงทะเบียนเอกสาร',
  `reference` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อ้างอิงเอกสาร',
  `topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเอกสาร',
  `store` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'สถานที่จัดเก็บเอกสาร',
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อไฟล์อัพโหลด',
  `description` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL COMMENT 'วันที่บันทึก',
  `modified_date` datetime NOT NULL COMMENT 'วันที่แก้ไข',
  `created_by` int(11) NOT NULL COMMENT 'ผู้สร้าง',
  `modified_by` int(11) NOT NULL COMMENT 'ผู้แก้ไข',
  `categorie_id` int(11) NOT NULL COMMENT 'หมวดหมู่',
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO documents VALUES ('6', 'D544343534', '2016-05-17 00:00:00', 'ไม่มี', 'คู่มือนักศึกษาฝึกงาน', 'ตู้เก็บเอกสาร1', '573b26a01533b', 'รายละเอียด', '2016-05-17 16:11:44', '2016-05-17 16:12:09', '1', '1', '1', null);

-- ----------------------------
-- Table structure for `gallery`
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8 NOT NULL,
  `thumbnail` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `view_count` int(11) NOT NULL DEFAULT '0',
  `download_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO gallery VALUES ('1', 'กิจกรรมรดน้ำ ดำหัว ผู้ใหญ่ 2559', 'Image+1.jpg', '', '2015-10-05 03:18:03', '0', '6', '5');
INSERT INTO gallery VALUES ('2', 'กิจกรรม รณรงค์ฉัดวัคซีน เด็กประถม 2', 'Image+2.jpg', '', '2015-10-05 03:18:03', '1', '9', '9');
INSERT INTO gallery VALUES ('3', 'เจ้าหน้าที่ รพ.ละแม ร่วมกันทำกิจกรรม 5ส', 'Image+3.jpg', '', '2015-10-05 03:18:03', '1', '10', '2');
INSERT INTO gallery VALUES ('4', 'ชาวบ้านพักร่วมแรงร่วมใจ กำจัดลูกน้ำยุงลาย', 'Image+4.jpg', '', '2015-10-05 03:20:03', '1', '5', '2');
INSERT INTO gallery VALUES ('5', 'Image 5', 'Image+5.jpg', '', '2015-10-05 03:21:03', '1', '9', '3');
INSERT INTO gallery VALUES ('6', 'Image 6', 'Image+6.jpg', '', '2015-10-05 03:18:03', '1', '8', '5');
INSERT INTO gallery VALUES ('7', 'Image 7', 'Image+7.jpg', '', '2015-10-05 03:18:03', '1', '11', '10');
INSERT INTO gallery VALUES ('8', 'Image 8', 'Image+8.jpg', '', '2015-10-05 03:18:03', '1', '12', '2');
INSERT INTO gallery VALUES ('9', 'First Image', '', '', '2015-10-07 01:31:52', '1', '1', '0');
INSERT INTO gallery VALUES ('10', 'The second Image', '', '', '2015-10-07 01:41:17', '0', '0', '0');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเอกสาร',
  `description` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL COMMENT 'วันที่บันทึก',
  `modified_date` datetime NOT NULL COMMENT 'วันที่แก้ไข',
  `created_by` int(11) NOT NULL COMMENT 'ผู้สร้าง',
  `modified_by` int(11) NOT NULL COMMENT 'ผู้แก้ไข',
  `news_categorie_id` int(11) NOT NULL COMMENT 'หมวดหมู่',
  `stat` int(11) DEFAULT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO news VALUES ('9', 'โรงพยาบาลละแม จัดซื้อจัดจ้างครุภัณฑ์คอมพิวเตอร์ 999', 'โรงพยาบาลละแม จัดซื้อจัดจ้างครุภัณฑ์คอมพิวเตอร์', '2016-05-17 15:47:13', '2016-05-17 16:27:47', '1', '1', '2', null, '573b20e1b9830.pdf');
INSERT INTO news VALUES ('10', 'จ้ดซื้อจัดจ้างครุภัณฑ์ทางการแพทย์1', 'รายละเอียดประกาศ1', '2016-05-17 15:49:01', '2016-05-17 16:37:51', '1', '1', '1', null, '573b214d59333.pdf');

-- ----------------------------
-- Table structure for `news_categories`
-- ----------------------------
DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_categories
-- ----------------------------
INSERT INTO news_categories VALUES ('1', 'กิจกรรมโรงพยาบาล', '							กิจกรรมโรงพยาบาล																									');
INSERT INTO news_categories VALUES ('2', 'จัดซื้อจัดจ้าง', '							ลงประกาศจัดซื้อจัดจ้าง																			');
INSERT INTO news_categories VALUES ('5', 'ข่าวสารประชาสัมพันธ์', '							ข่าวสารประชาสัมพันธ์						');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_read` bigint(20) NOT NULL DEFAULT '0',
  `permission_write` bigint(20) NOT NULL DEFAULT '0',
  `permission_edit` bigint(20) NOT NULL DEFAULT '0',
  `permission_delete` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'manmakemoney@gmail.com', '', 'Jeerayuth Pinsuwan', '0', '0', '0', '0');
