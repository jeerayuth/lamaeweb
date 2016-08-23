/*
Navicat MySQL Data Transfer

Source Server         : SERVER_MASTER
Source Server Version : 50532
Source Host           : 192.168.1.253:3306
Source Database       : db_lamaeweb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2016-08-23 09:57:25
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
INSERT INTO categories VALUES ('1', 'เอกสารทางราชการทั่วไป', '														เอกสารทางราชการทั่วๆไป																									');
INSERT INTO categories VALUES ('2', 'เอกสารคู่มือ-แบบฟอร์ม', '');
INSERT INTO categories VALUES ('3', 'ไฟล์นำเสนอ', '');

-- ----------------------------
-- Table structure for `configs`
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT 'ชื่อสถานประกอบการ',
  `address` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่สถานประกอบการ',
  `telephone` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `filename` varchar(255) DEFAULT 'default.png',
  `director_name` varchar(50) NOT NULL,
  `director_position` varchar(100) NOT NULL,
  `doctor_photo` varchar(255) NOT NULL DEFAULT 'default.png',
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO configs VALUES ('1', 'โรงพยาบาลละแม', '45 ม.7 ถ.เพชรเกษม ต.ละแม อ.ละแม จ.ชุมพร', '077-559116', '077-559115', 'lamaehaha', 'logo11381_thumb.png', 'นพ.กฤตภิษัช  ไม้ทองงาม', 'รักษาการ ผู้อำนวยการโรงพยาบาลละแม', 'leader_thumb.jpg', 'info@gmail.com');

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
  `download` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO documents VALUES ('7', 'D544343534', '2016-05-19 00:00:00', 'ไม่มี', 'คู่มือการปฏิบัติงานสำหรับพนักงานใหม่', 'ตู้เก็บเอกสาร1', '573dd27dd4a9c.pdf', '', '2016-05-19 16:49:33', '2016-06-23 08:55:15', '1', '1', '2', '6');
INSERT INTO documents VALUES ('8', 'D544343534rr', '2016-05-18 00:00:00', 'a0001', 'ระเบียบพนักงานราชการ', 'ตู้เก็บเอกสาร1', '573dd2a318143.pdf', 'รายละเอียด', '2016-05-18 16:50:11', '2016-05-19 16:50:11', '1', '1', '3', '20');
INSERT INTO documents VALUES ('9', 'D54434353456', '2016-05-21 00:00:00', '', 'เอกสารนำเสนองาน NCD คุณภาพ', 'ตู้เก็บเอกสาร1', '57406d9d88847.pdf', '', '2016-05-21 16:15:57', '2016-08-05 09:36:29', '1', '1', '3', '10');
INSERT INTO documents VALUES ('10', 'a001', '2016-08-15 00:00:00', 'a00915', 'test doc download', 'ธุรการ', '57b1620d4612f.doc', '', '2016-08-15 08:32:45', '2016-08-15 08:32:45', '1', '1', '1', '10');
INSERT INTO documents VALUES ('11', 'a1515', '2016-08-17 00:00:00', 'a009156', 'atestsdfdsfsf', 'ธุรการ', '57b1626c93d23.docx', '', '2016-08-15 08:34:20', '2016-08-16 05:12:11', '1', '1', '1', '9');
INSERT INTO documents VALUES ('12', 'awerewr', '2016-08-15 00:00:00', 'aerew', 'ddddsdeee', 'tttt', '57b163000614b.rar', '', '2016-08-15 08:36:48', '2016-08-15 08:36:48', '1', '1', '1', '7');
INSERT INTO documents VALUES ('13', 'awerew', '2016-08-15 00:00:00', 'dd', 'dddd', 'ธุรการ', '57b163357145b.xlsx', '', '2016-08-15 08:37:41', '2016-08-15 08:37:41', '1', '1', '1', '8');
INSERT INTO documents VALUES ('14', 'aaffee', '2016-08-15 00:00:00', 'sswww', 'dfsddeeeeeeeeeeeeeeeeeeee', 'ธุรการ', '57b163bcd5cbc.rar', '', '2016-08-15 08:39:56', '2016-08-15 08:39:56', '1', '1', '2', '85');
INSERT INTO documents VALUES ('15', 'tsss', '2016-08-15 00:00:00', 'sddwe', 'dsfs', 'ธุรการ', '57b1649a66a1c.rar', '', '2016-08-15 08:43:38', '2016-08-15 08:56:07', '1', '1', '3', '10');

-- ----------------------------
-- Table structure for `example_1`
-- ----------------------------
DROP TABLE IF EXISTS `example_1`;
CREATE TABLE `example_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=186 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of example_1
-- ----------------------------
INSERT INTO example_1 VALUES ('172', 'c360-9.jpg');
INSERT INTO example_1 VALUES ('176', 'b7b8-18.jpg');
INSERT INTO example_1 VALUES ('177', '3fd6-21.jpg');
INSERT INTO example_1 VALUES ('183', '91678-nb002.jpg');
INSERT INTO example_1 VALUES ('184', '9a702-nb003.jpg');
INSERT INTO example_1 VALUES ('185', 'b0a7f-nb001.jpg');

-- ----------------------------
-- Table structure for `example_2`
-- ----------------------------
DROP TABLE IF EXISTS `example_2`;
CREATE TABLE `example_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of example_2
-- ----------------------------
INSERT INTO example_2 VALUES ('172', 'eb4f-51.jpg', '1');
INSERT INTO example_2 VALUES ('173', 'ac84-52.jpg', '2');
INSERT INTO example_2 VALUES ('176', '7ad8-63.jpg', '4');

-- ----------------------------
-- Table structure for `example_3`
-- ----------------------------
DROP TABLE IF EXISTS `example_3`;
CREATE TABLE `example_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of example_3
-- ----------------------------
INSERT INTO example_3 VALUES ('172', 'a48d-88.jpg', '22', null);
INSERT INTO example_3 VALUES ('173', '5e32-89.jpg', '22', null);
INSERT INTO example_3 VALUES ('174', '7628-90.jpg', '22', null);
INSERT INTO example_3 VALUES ('180', 'f2182-nb001.jpg', '25', null);
INSERT INTO example_3 VALUES ('181', '598fa-nb003.jpg', '9', null);

-- ----------------------------
-- Table structure for `example_4`
-- ----------------------------
DROP TABLE IF EXISTS `example_4`;
CREATE TABLE `example_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=185 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of example_4
-- ----------------------------
INSERT INTO example_4 VALUES ('172', 'My house!', 'eb4f-51.jpg', '1');
INSERT INTO example_4 VALUES ('173', 'Some flowers', 'ac84-52.jpg', '3');
INSERT INTO example_4 VALUES ('176', 'My garden!', '7ad8-63.jpg', '2');
INSERT INTO example_4 VALUES ('182', '', '046ab-nb003.jpg', null);
INSERT INTO example_4 VALUES ('183', '', '0b40d-nb002.jpg', null);
INSERT INTO example_4 VALUES ('184', '', '140af-nb001.jpg', null);

-- ----------------------------
-- Table structure for `gallery`
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8,
  `filename` varchar(100) CHARACTER SET utf8 NOT NULL,
  `thumbnail` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'default.jpg',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NULL DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `view` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO gallery VALUES ('24', 'test99999', 'test', 'nb001.jpg', 'nb001_thumb.jpg', '2016-08-03 09:51:05', '2016-08-15 11:44:29', '1', '15', '0', null);
INSERT INTO gallery VALUES ('25', 'test2333333', 'ts', 'nb002.jpg', 'nb002_thumb.jpg', '2016-08-03 09:52:30', '2016-08-15 11:44:34', '1', '20', '0', null);
INSERT INTO gallery VALUES ('26', 'ทดสอบ กิจกรรม รพ. 1', '', 'IMG_02641.JPG', 'IMG_02641_thumb.JPG', '2016-08-15 13:21:55', null, '1', '0', '0', null);
INSERT INTO gallery VALUES ('29', 'sdfsdf', 'sdf', '', 'default.jpg', '2016-08-16 11:21:01', null, '1', '0', '0', null);
INSERT INTO gallery VALUES ('30', 'sdddsfs', 'sdf', '', 'default.jpg', '2016-08-16 11:21:10', null, '1', '0', '0', null);

-- ----------------------------
-- Table structure for `gallery_sub`
-- ----------------------------
DROP TABLE IF EXISTS `gallery_sub`;
CREATE TABLE `gallery_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gallery_sub
-- ----------------------------
INSERT INTO gallery_sub VALUES ('193', '98de9-nb001.jpg', '25', '2');
INSERT INTO gallery_sub VALUES ('194', 'a93a5-nb002.jpg', '25', '1');
INSERT INTO gallery_sub VALUES ('195', 'b5310-nb003.jpg', '25', '3');

-- ----------------------------
-- Table structure for `links`
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of links
-- ----------------------------
INSERT INTO links VALUES ('1', 'ระบบ Intranet', 'http://192.168.1.252/hosxp');
INSERT INTO links VALUES ('2', 'ศูนย์ข้อมูลและสารสนเทศ', 'http://192.168.1.252:8080/mis');
INSERT INTO links VALUES ('3', 'ระบบบันทึกตัวชี้วัด KPI', 'http://192.168.1.252/kpi');

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
  `view` int(11) DEFAULT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO news VALUES ('9', 'โรงพยาบาลละแม จัดซื้อจัดจ้างครุภัณฑ์คอมพิวเตอร์ 999', 'โรงพยาบาลละแม จัดซื้อจัดจ้างครุภัณฑ์คอมพิวเตอร์', '2016-05-17 15:47:13', '2016-08-05 09:31:54', '1', '1', '2', '10', '573b20e1b9830.pdf');
INSERT INTO news VALUES ('10', 'จ้ดซื้อจัดจ้างครุภัณฑ์ทางการแพทย์1', 'รายละเอียดประกาศ1', '2016-05-17 15:49:01', '2016-05-19 16:16:23', '1', '1', '2', '15', '573b214d59333.pdf');
INSERT INTO news VALUES ('11', 'ขอเชิญร่วมทำบุญตักบาตรในวันที่ 20 พ.ค.59 ที่ตึกผู้ป่วยนอก', 'ขอเชิญร่วมทำบุญตักบาตรในวันที่ 20 พ.ค.59 ที่ตึกผู้ป่วยนอก', '2016-05-19 15:26:58', '2016-05-19 15:26:58', '1', '1', '1', '23', '573dbf224ac55');
INSERT INTO news VALUES ('12', 'ทดสอบกิจกรรม รพ.งงงงงf44', 'testtttt', '2016-05-21 12:13:04', '2016-06-23 08:50:55', '1', '1', '2', '2', '574034b025ceb.pdf');
INSERT INTO news VALUES ('13', 'test ข่าวประชาสัมพันธ์ 188888', 'test ข่าวประชาสัมพันธ์ 1', '2016-08-15 08:19:20', '2016-08-16 04:51:23', '1', '1', '1', null, '57b15ee8b3b05');
INSERT INTO news VALUES ('14', 'test ข่าวประชาสัมพันธ์ 299999', 'test ข่าวประชาสัมพันธ์ 2', '2016-08-15 08:20:58', '2016-08-16 04:51:17', '1', '1', '1', null, '57b15f4a0b9d3');
INSERT INTO news VALUES ('15', 'กกกกกหดดหกดหกดหก', 'หกดหกดหก', '2016-08-16 04:54:23', '2016-08-16 04:54:23', '1', '1', '2', null, '57b2805f4e3af.pdf');
INSERT INTO news VALUES ('16', 'หหหหกดกหด', 'หกดหกดหก', '2016-08-16 04:55:31', '2016-08-16 04:55:31', '1', '1', '2', null, '57b280a39ec63.rar');
INSERT INTO news VALUES ('17', 'กหกกหกดหกดหข่าว', 'หกกดห', '2016-08-16 04:55:54', '2016-08-17 03:30:29', '1', '1', '1', null, '57b280ba1b408');

-- ----------------------------
-- Table structure for `news_categories`
-- ----------------------------
DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_categories
-- ----------------------------
INSERT INTO news_categories VALUES ('1', 'ข่าวประชาสัมพันธ์', 'ข่าวประชาสัมพันธ์', 'no-image.gif');
INSERT INTO news_categories VALUES ('2', 'จัดซื้อจัดจ้าง', 'จัดซื้อจัดจ้าง	', 'no-image.gif');

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO pages VALUES ('1', 'ข้อมูลพื้นฐาน', 'ใส่รายละเอียด');
INSERT INTO pages VALUES ('2', 'ประวัติความเป็นมา', null);
INSERT INTO pages VALUES ('3', 'วิสัยทัศน์ พันธกิจ', null);
INSERT INTO pages VALUES ('4', 'ปรัชญา ค่านิยม', null);
INSERT INTO pages VALUES ('5', 'ประเด็นยุทธศาสตร์', null);
INSERT INTO pages VALUES ('6', 'เป้าหมาย', null);
INSERT INTO pages VALUES ('7', 'คณะผู้บริหาร', null);

-- ----------------------------
-- Table structure for `slideshow`
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'default.jpg',
  `thumbnail` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'default.jpg',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NULL DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO slideshow VALUES ('24', 'test99999', '10.jpg', 'default.jpg', '2016-08-03 09:51:05', '2016-08-15 11:44:29', '1', '1');
INSERT INTO slideshow VALUES ('25', 'test2333333', '11.jpg', 'default.jpg', '2016-08-03 09:52:30', '2016-08-15 11:44:34', '1', '2');

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
