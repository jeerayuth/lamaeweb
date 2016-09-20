/*
Navicat MySQL Data Transfer

Source Server         : SERVER_MASTER
Source Server Version : 50532
Source Host           : 192.168.1.253:3306
Source Database       : db_lamaeweb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2016-09-19 14:20:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเอกสาร',
  `description` text COLLATE utf8_unicode_ci,
  `created_date` date NOT NULL COMMENT 'วันที่บันทึก',
  `modified_date` date NOT NULL COMMENT 'วันที่แก้ไข',
  `created_by` int(11) NOT NULL COMMENT 'ผู้สร้าง',
  `modified_by` int(11) NOT NULL COMMENT 'ผู้แก้ไข',
  `articles_categorie_id` int(11) NOT NULL COMMENT 'หมวดหมู่',
  `view` int(11) DEFAULT '0',
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO articles VALUES ('33', 'ทดสอบบทความทั่วไป', '<p>รายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไปรายละเอียดบทความทั่วไป</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '1', '14', '57d5ff55cb729.doc');
INSERT INTO articles VALUES ('34', 'ทดสอบบทความทางวิชาการ', '<p>ทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการทดสอบบทความทางวิชาการ</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '2', '9', '57d627f96abb7');
INSERT INTO articles VALUES ('35', 'ทดสอบบทความงานคุณภาพ', '<p>ทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพทดสอบบทความงานคุณภาพ</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '3', '6', '57d6280778d83');
INSERT INTO articles VALUES ('36', 'บทความทั่วไป2', '<p>บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2บทความทั่วไป2</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '1', '1', '57d64a728393e');
INSERT INTO articles VALUES ('37', 'บทความทางวิชาการ 2', '<p>บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2บทความทางวิชาการ 2</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '2', '2', '57d64a82cf3eb');
INSERT INTO articles VALUES ('38', 'บทความงานคุณภาพ 2', '<p>บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2บทความงานคุณภาพ 2</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '3', '2', '57d64a916f41f');
INSERT INTO articles VALUES ('39', 'บทความทั่วไป3', '<p>รายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความรายละเอียดบทความ</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '1', '1', '57d66c235fc40');
INSERT INTO articles VALUES ('40', 'บทความทางวิชาการ3', '<p>บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3บทความทางวิชาการ3</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '2', '0', '57d66c35d10f8');
INSERT INTO articles VALUES ('41', 'บทความงานคุณภาพ 3', '<p>บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3บทความงานคุณภาพ 3</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '3', '0', '57d66c4569c33');

-- ----------------------------
-- Table structure for `articles_categories`
-- ----------------------------
DROP TABLE IF EXISTS `articles_categories`;
CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles_categories
-- ----------------------------
INSERT INTO articles_categories VALUES ('1', 'บทความทั่วไป', 'รายละเอียดบทความทั่วไป', 'no-image.gif');
INSERT INTO articles_categories VALUES ('2', 'บทความทางวิชาการ', 'บทความทางวิชาการ', 'no-image.gif');
INSERT INTO articles_categories VALUES ('3', 'บทความงานคุณภาพ', 'บทความงานคุณภาพ', 'no-image.gif');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO categories VALUES ('1', 'เอกสารทางราชการทั่วไป', 'รายละเอียดเอกสารราชการทั่วไป																	');
INSERT INTO categories VALUES ('2', 'เอกสารคู่มือ-แบบฟอร์ม', '');
INSERT INTO categories VALUES ('3', 'ไฟล์นำเสนอ', '');
INSERT INTO categories VALUES ('4', 'เอกสารงานคุณภาพ', '');
INSERT INTO categories VALUES ('5', 'เอกสารงานวิจัย', '');

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
  `website` varchar(255) DEFAULT NULL,
  `google_map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO configs VALUES ('1', 'โรงพยาบาลละแม', '45 ม.7 ถ.เพชรเกษม ต.ละแม อ.ละแม จ.ชุมพร', '077-559116', '077-559115', 'lamaehaha', 'logo11381_thumb.png', 'นพ.กฤตภิษัช  ไม้ทองงาม', 'ผู้อำนวยการโรงพยาบาลละแม', 'leader2_thumb.jpg', 'info@gmail.com', 'www.lmh.moph.go.th/h11381', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15728.644100626883!2d99.08475680000001!3d9.752424499999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8711a3dd55afaef1!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Lil4Liw4LmB4Lih!5e0!3m2!1sth!2sth!4v1472790526811');

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
  `created_date` date NOT NULL COMMENT 'วันที่บันทึก',
  `modified_date` date NOT NULL COMMENT 'วันที่แก้ไข',
  `created_by` int(11) NOT NULL COMMENT 'ผู้สร้าง',
  `modified_by` int(11) NOT NULL COMMENT 'ผู้แก้ไข',
  `categorie_id` int(11) NOT NULL COMMENT 'หมวดหมู่',
  `download` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO documents VALUES ('18', 'aa', '2016-09-01 00:00:00', 'fff', 'dddrrr', 'dddd', '57d0db147d706.ppt', '', '2016-09-08', '2016-09-08', '1', '1', '3', null, '12');
INSERT INTO documents VALUES ('19', 'test', '2016-09-07 00:00:00', 'ff', 'ddd', 'dsfsd', '57d1032c8b5f4', 'dsfdsf', '2016-09-08', '2016-09-08', '1', '1', '1', '0', '7');
INSERT INTO documents VALUES ('20', 'A001', '2016-09-12 00:00:00', '', 'แบบฟอร์มใบลา', 'ธุรการ', '57d66dc4bb880', '', '2016-09-12', '2016-09-12', '1', '1', '2', '0', '5');
INSERT INTO documents VALUES ('21', 'A002', '2016-09-12 00:00:00', '', 'แบบฟอร์มแจ้งซ่อม', 'ธุรการ', '57d66ddc9f4ce', '', '2016-09-12', '2016-09-12', '1', '1', '2', '0', '0');
INSERT INTO documents VALUES ('22', 'P001', '2016-09-12 00:00:00', '', 'ไฟล์นำเสนองาน NCD', 'คลินิก HTDM', '57d66e185993e', '', '2016-09-12', '2016-09-12', '1', '1', '3', '0', '3');
INSERT INTO documents VALUES ('23', 'H001', '2016-09-12 00:00:00', '', 'เอกสารงานคุณภาพ 2015', 'กลุ่มการพยาบาล', '57d66e3662c94', '', '2016-09-12', '2016-09-12', '1', '1', '4', '0', '2');
INSERT INTO documents VALUES ('24', 'H002', '2016-09-12 00:00:00', '', 'เอกสารงานคุณภาพ 2016', 'กลุ่มการพยาบาล', '57d66e4d46c91', '', '2016-09-12', '2016-09-12', '1', '1', '4', '0', '0');
INSERT INTO documents VALUES ('25', 'R001', '2016-09-12 00:00:00', '', 'เอกสารงานวิจัยผู้ป่วยมะเร็ง', '์คลิกนิก', '57d66e8d3619a', '', '2016-09-12', '2016-09-12', '1', '1', '5', '0', '1');
INSERT INTO documents VALUES ('26', '็H003', '2016-09-12 00:00:00', '', 'เอกสารงานคุณภาพงาน IM', 'IM', '57d66ea89d442', '', '2016-09-12', '2016-09-12', '1', '1', '4', '0', '0');

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
  `created_date` date NOT NULL,
  `modified_date` date DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `view` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO gallery VALUES ('47', 'ทดสอบกิจกรรมหน่วยงาน 1', 'ทดสอบรายละเอียดกิจกรรม ทดสอบรายละเอียดกิจกรรม ทดสอบรายละเอียดกิจกรรม ทดสอบรายละเอียดกิจกรรม ทดสอบรายละเอียดกิจกรรม ทดสอบรายละเอียดกิจกรรม', '', 'default.jpg', '2016-09-14', '2016-09-15', '1', '177', '1', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gallery_sub
-- ----------------------------
INSERT INTO gallery_sub VALUES ('207', '8e068-1.jpg', '47', null);
INSERT INTO gallery_sub VALUES ('208', '98863-3.jpg', '47', null);
INSERT INTO gallery_sub VALUES ('209', 'a8e1e-2.jpg', '47', null);
INSERT INTO gallery_sub VALUES ('210', 'c4f5d-4.jpg', '47', null);
INSERT INTO gallery_sub VALUES ('211', '68ad1-999.jpg', '47', null);

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
  `created_date` date NOT NULL COMMENT 'วันที่บันทึก',
  `modified_date` date NOT NULL COMMENT 'วันที่แก้ไข',
  `created_by` int(11) NOT NULL COMMENT 'ผู้สร้าง',
  `modified_by` int(11) NOT NULL COMMENT 'ผู้แก้ไข',
  `news_categorie_id` int(11) NOT NULL COMMENT 'หมวดหมู่',
  `view` int(11) DEFAULT '0',
  `filename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO news VALUES ('18', 'สอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560', '<p>จังหวัดชุมพรมีความประสงค์จะสอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560 จำนวน 12 เดือน<br />\r\nตั้งแต่วันที่ 1 ตุลาคม 2559 ถึงวันที่ 30 กันยายน 2560 ตามรายละเอียดไฟล์ที่แนบมาด้วยนี้</p>\r\n\r\n<p>กำหนดยื่นซองสอบราคา ในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 8.30น. ถึงเวลา 16.00น.<br />\r\nณ ฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร และ<br />\r\nกำหนดเปิดซองใบเสนอราคา&nbsp; ในวันที่ 16 กันยายน 2559 ตั้งแต่เวลา 13.00น. เป็นต้นไป</p>\r\n\r\n<p>ผู้สนใจติดต่อขอรับเอกสารสอบราคา ได้ที่ งานพัสดุฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร<br />\r\nในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 08.30น. ถึงเวลา 16.00น.<br />\r\nสามารถดูรายละเอียดได้ที่เว็บไซต์ www.cmpo.moph.go.th หรือ สอบถามทางโทรศัพท์หมายเลข 077-559116 ในวันและเวลาราชการ</p>\r\n', '2016-09-07', '2016-09-07', '1', '1', '2', '12', '57cfd70c5dd3f.jpg');
INSERT INTO news VALUES ('22', 'test', '<p>จังหวัดชุมพรมีความประสงค์จะสอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560 จำนวน 12 เดือน<br />\r\nตั้งแต่วันที่ 1 ตุลาคม 2559 ถึงวันที่ 30 กันยายน 2560 ตามรายละเอียดไฟล์ที่แนบมาด้วยนี้</p>\r\n\r\n<p>กำหนดยื่นซองสอบราคา ในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 8.30น. ถึงเวลา 16.00น.<br />\r\nณ ฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร และ<br />\r\nกำหนดเปิดซองใบเสนอราคา&nbsp; ในวันที่ 16 กันยายน 2559 ตั้งแต่เวลา 13.00น. เป็นต้นไป</p>\r\n\r\n<p>ผู้สนใจติดต่อขอรับเอกสารสอบราคา ได้ที่ งานพัสดุฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร<br />\r\nในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 08.30น. ถึงเวลา 16.00น.<br />\r\nสามารถดูรายละเอียดได้ที่เว็บไซต์ www.cmpo.moph.go.th หรือ สอบถามทางโทรศัพท์หมายเลข 077-559116 ในวันและเวลาราชการ</p>\r\n', '2016-09-08', '2016-09-12', '1', '1', '1', '7', '57d0e4d8ea15f');
INSERT INTO news VALUES ('23', 'testtesttest', '<p>จังหวัดชุมพรมีความประสงค์จะสอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560 จำนวน 12 เดือน<br />\r\nตั้งแต่วันที่ 1 ตุลาคม 2559 ถึงวันที่ 30 กันยายน 2560 ตามรายละเอียดไฟล์ที่แนบมาด้วยนี้</p>\r\n\r\n<p>กำหนดยื่นซองสอบราคา ในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 8.30น. ถึงเวลา 16.00น.<br />\r\nณ ฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร และ<br />\r\nกำหนดเปิดซองใบเสนอราคา&nbsp; ในวันที่ 16 กันยายน 2559 ตั้งแต่เวลา 13.00น. เป็นต้นไป</p>\r\n\r\n<p>ผู้สนใจติดต่อขอรับเอกสารสอบราคา ได้ที่ งานพัสดุฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร<br />\r\nในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 08.30น. ถึงเวลา 16.00น.<br />\r\nสามารถดูรายละเอียดได้ที่เว็บไซต์ www.cmpo.moph.go.th หรือ สอบถามทางโทรศัพท์หมายเลข 077-559116 ในวันและเวลาราชการ</p>\r\n', '2016-09-08', '2016-09-12', '1', '1', '1', '15', '57d0e7231f93e');
INSERT INTO news VALUES ('24', 'ทดสอบข่าวจัดซื้อจัดจ้าง 29999999999999999', '<p>จังหวัดชุมพรมีความประสงค์จะสอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560 จำนวน 12 เดือน<br />\r\nตั้งแต่วันที่ 1 ตุลาคม 2559 ถึงวันที่ 30 กันยายน 2560 ตามรายละเอียดไฟล์ที่แนบมาด้วยนี้</p>\r\n\r\n<p>กำหนดยื่นซองสอบราคา ในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 8.30น. ถึงเวลา 16.00น.<br />\r\nณ ฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร และ<br />\r\nกำหนดเปิดซองใบเสนอราคา&nbsp; ในวันที่ 16 กันยายน 2559 ตั้งแต่เวลา 13.00น. เป็นต้นไป</p>\r\n\r\n<p>ผู้สนใจติดต่อขอรับเอกสารสอบราคา ได้ที่ งานพัสดุฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร<br />\r\nในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 08.30น. ถึงเวลา 16.00น.<br />\r\nสามารถดูรายละเอียดได้ที่เว็บไซต์ www.cmpo.moph.go.th หรือ สอบถามทางโทรศัพท์หมายเลข 077-559116 ในวันและเวลาราชการ</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '2', '11', '57d64abb6596f');
INSERT INTO news VALUES ('25', 'testtesttest', '<p>จังหวัดชุมพรมีความประสงค์จะสอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560 จำนวน 12 เดือน<br />\r\nตั้งแต่วันที่ 1 ตุลาคม 2559 ถึงวันที่ 30 กันยายน 2560 ตามรายละเอียดไฟล์ที่แนบมาด้วยนี้</p>\r\n\r\n<p>กำหนดยื่นซองสอบราคา ในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 8.30น. ถึงเวลา 16.00น.<br />\r\nณ ฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร และ<br />\r\nกำหนดเปิดซองใบเสนอราคา&nbsp; ในวันที่ 16 กันยายน 2559 ตั้งแต่เวลา 13.00น. เป็นต้นไป</p>\r\n\r\n<p>ผู้สนใจติดต่อขอรับเอกสารสอบราคา ได้ที่ งานพัสดุฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร<br />\r\nในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 08.30น. ถึงเวลา 16.00น.<br />\r\nสามารถดูรายละเอียดได้ที่เว็บไซต์ www.cmpo.moph.go.th หรือ สอบถามทางโทรศัพท์หมายเลข 077-559116 ในวันและเวลาราชการ</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '1', '4', '57d6693355821');
INSERT INTO news VALUES ('26', 'ทดสอบข่าวประกาศจัดซื้อจัดจ้าง', '<p>จังหวัดชุมพรมีความประสงค์จะสอบราคาจ้าง จ้างเหมาบริการอาหารผู้ป่วยประจำปีงบประมาณ 2560 จำนวน 12 เดือน<br />\r\nตั้งแต่วันที่ 1 ตุลาคม 2559 ถึงวันที่ 30 กันยายน 2560 ตามรายละเอียดไฟล์ที่แนบมาด้วยนี้</p>\r\n\r\n<p>กำหนดยื่นซองสอบราคา ในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 8.30น. ถึงเวลา 16.00น.<br />\r\nณ ฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร และ<br />\r\nกำหนดเปิดซองใบเสนอราคา&nbsp; ในวันที่ 16 กันยายน 2559 ตั้งแต่เวลา 13.00น. เป็นต้นไป</p>\r\n\r\n<p>ผู้สนใจติดต่อขอรับเอกสารสอบราคา ได้ที่ งานพัสดุฝ่ายบริหารงานทั่วไป โรงพยาบาลละแม อำเภอละแม จังหวัดชุมพร<br />\r\nในวันที่ 31 สิงหาคม 2559 ถึงวันที่ 15 กันยายน 2559 ตั้งแต่เวลา 08.30น. ถึงเวลา 16.00น.<br />\r\nสามารถดูรายละเอียดได้ที่เว็บไซต์ www.cmpo.moph.go.th หรือ สอบถามทางโทรศัพท์หมายเลข 077-559116 ในวันและเวลาราชการ</p>\r\n', '2016-09-12', '2016-09-12', '1', '1', '2', '2', '57d66b001ee84');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_categories
-- ----------------------------
INSERT INTO news_categories VALUES ('1', 'ข่าวประชาสัมพันธ์', 'รายละเอียดข่าวประชาสัมพันธ์', 'no-image.gif');
INSERT INTO news_categories VALUES ('2', 'จัดซื้อจัดจ้าง', 'จัดซื้อจัดจ้าง	', 'no-image.gif');

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` text,
  `visible` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO pages VALUES ('1', 'ข้อมูลพื้นฐาน', '<p><strong>อำเภอละแม</strong>&nbsp;<br />\r\nคำว่า &ldquo;ละแม&rdquo; มีผู้สันนิษฐานไว้ว่าอาจจะมาจากคำภาษาฝรั่งเศษว่า&ldquo; Le Mer&rdquo; แปลว่าทะเล แต่เดิม อำเภอละแมเป็นเพียงตำบลหนึ่งในอำเภอหลังสวน จังหวัดชุมพร โดยประกอบด้วย 8 หมู่บ้าน ต่อมาได้มีผู้อพยพจากต่างถิ่นเข้ามาประกอบอาชีพมากขึ้น จึงได้รับการยกฐานะขึ้นเป็น กิ่งอำเภอ เมื่อวันที่ 1 กรกฎาคม 2514 ยกฐานะขึ้นเป็นอำเภอ ๆ หนึ่งของจังหวัดชุมพร เมื่อวันที่ 13 เมษายน 2520 ตามลำดับ อำเภอละแม อยู่ห่างจากตัวจังหวัดชุมพร 95 กม. และห่างจาก ตัวจังหวัดสุราษฎร์ธานี 99 กม. มีสถานที่ท่องเที่ยวที่สำคัญได้แก่ หาดตะวันฉาย บ่อน้ำร้อน ถ้ำเขาพลู น้ำตกจำปูน</p>\r\n', '1');
INSERT INTO pages VALUES ('2', 'ประวัติความเป็นมา', '<p><strong>อำเภอละแม</strong>&nbsp;<br />\r\nคำว่า &ldquo;ละแม&rdquo; มีผู้สันนิษฐานไว้ว่าอาจจะมาจากคำภาษาฝรั่งเศษว่า&ldquo; Le Mer&rdquo; แปลว่าทะเล แต่เดิม อำเภอละแมเป็นเพียงตำบลหนึ่งในอำเภอหลังสวน จังหวัดชุมพร โดยประกอบด้วย 8 หมู่บ้าน ต่อมาได้มีผู้อพยพจากต่างถิ่นเข้ามาประกอบอาชีพมากขึ้น จึงได้รับการยกฐานะขึ้นเป็น กิ่งอำเภอ เมื่อวันที่ 1 กรกฎาคม 2514 ยกฐานะขึ้นเป็นอำเภอ ๆ หนึ่งของจังหวัดชุมพร เมื่อวันที่ 13 เมษายน 2520 ตามลำดับ อำเภอละแม อยู่ห่างจากตัวจังหวัดชุมพร 95 กม. และห่างจาก ตัวจังหวัดสุราษฎร์ธานี 99 กม. มีสถานที่ท่องเที่ยวที่สำคัญได้แก่ หาดตะวันฉาย บ่อน้ำร้อน ถ้ำเขาพลู น้ำตกจำปูน</p>\r\n\r\n<p><strong>ประวัติ โรงพยาบาลละแม</strong>&nbsp;<br />\r\nโรงพยาบาลละแม ตั้งอยู่ที่ 45 หมู่ที่ 7 ถนนเพชรเกษม ตำบลละแม อำเภอละแม จังหวัดชุมพร มีเนื้อทีทั้งสิ้น 27 ไร่ 2 งาน 55.5 ตารางวา ด้วยการบริจาคของนายอมร -นางละออง บรรจงศิริ,นายเซียม - นางจับ เกิดเนตร วันที่ 11 พฤศจิกายน 2526 วางศิลาฤกษ์ ก่อสร้างเป็นโรงพยาบาลชุมชนขนาด 10 เตียง วันที่ 1 ตุลาคม 2527 เปิดให้บริการ ขนาด 10 เตียง วันที่ 14 กรกฎาคม 2535 ขยายบริการเป็นโรงพยาบาลชุมชน ขนาด 30 เตียง ปัจจุบัน (ณ 21 ธันวาคม 2544)โรงพยาบาลละแมมีเตียงจริง จำนวน 46 เตียง(ไม่นับ เตียงเสริม)</p>\r\n\r\n<p><strong>วิสัยทัศน์โรงพยาบาล</strong>&nbsp;<br />\r\n&quot;โรงพยาบาลที่เป็นผู้นำด้านการสร้างเสริมสุขภาพ บริการได้มาตรฐานคุณภาพ ภาคีเครือข่ายร่วมใจ ส่งเสริมการแพทย์ทางเลือก&quot;</p>\r\n\r\n<p><strong>วิสัยทัศน์ด้านการพัฒนาคุณภาพ</strong>&nbsp;<br />\r\n&quot;เราจะเป็นสถานบริการพยาบาลของรัฐที่ได้มาตรฐานสากล ISO 9001 : 2000 ภายในปี 2544 และเป็นแห่งแรกในจังหวัดชุมพร&quot;</p>\r\n', '1');
INSERT INTO pages VALUES ('3', 'วิสัยทัศน์ พันธกิจ', '<p><strong>วิสัยทัศน์ (vision) :</strong>&nbsp;<br />\r\nโรงพยาบาลที่เป็นผู้นำด้านการสร้างเสริมสุขภาพ บริการได้มาตรฐานคุณภาพ ภาคีเครือข่ายร่วมใจ ส่งเสริมการแพทย์ทางเลือก</p>\r\n\r\n<p><strong>ค่านิยม (Values) :</strong>&nbsp;<br />\r\nบริการดี มีจริยธรรม รักสามัคคี มีการพัฒนา</p>\r\n\r\n<p><strong>ค่านิยม (Values) :</strong>&nbsp;<br />\r\nบริการดี มีจริยธรรม รักสามัคคี มีการพัฒนา</p>\r\n\r\n<p><strong>พันธกิจ (Mission) :</strong>&nbsp;<br />\r\n1. พัฒนาระบบการบริการด้านการส่งเสริม ป้องกัน รักษา ฟื้นฟู ให้ได้มาตรฐาน และครอบคลุมทุกกลุ่มเป้าหมายให้สอดคล้องกับวิถีชุมชน&nbsp;<br />\r\n2. เสริมสร้างความเข้มแข็งของชุมชน โดยการสร้างเครือข่ายการมีส่วนร่วมในการดูแลสุขภาพ&nbsp;<br />\r\n3. ส่งเสริมและสนับสนุนการใช้แพทย์ทางเลือกในการดูแลสุขภาพ<br />\r\n4. ส่งเสริมสนับสนุนการพัฒนานวัตกรรมและงานวิจัยในเรื่องสุขภาพ</p>\r\n\r\n<p><strong>ความท้าทาย :</strong>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>ความท้าทายด้านการปฏิบัติการขององค์กร\r\n	<ul>\r\n		<li>พัฒนาระบบ MIS : ข้อมูลมีความถูกต้องครบถ้วนทันเวลาสามารถนำไปประมวลเพื่อนำผลไปใช้ ร้อยละ 90 %</li>\r\n		<li>พัฒนาระบบ EMS : มีหน่วยปฏิบัติการกู้ชีพเบื้องต้นครอบคลุม ทุก อบต.</li>\r\n		<li>พัฒนาระบบดูแลผู้ป่วยโรคเบาหวาน ทั้งระดับเครือข่าย</li>\r\n		<li>การป้องกันและควบคุมการแพร่กระจายของโรคอุจจาระร่วง โรคมาลาเรียและโรคไข้เลือดออก</li>\r\n	</ul>\r\n	</li>\r\n	<li>ความท้าทายด้านบุคลากร\r\n	<ul>\r\n		<li>การป้องกันโรคและอันตรายจากการทำงานของบุคลากร</li>\r\n		<li>การบริหารจัดการกับสุขภาพของบุคลากรกลุ่มเสี่ยง</li>\r\n		<li>พัฒนาการสร้างนวัตกรรมและงานวิจัยในงานประจำ</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>เข็มมุ่งปี 2559 :</strong>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>พัฒนาระบบดูแลผู้ป่วยโรคเบาหวาน ทั้งระดับเครือข่าย</li>\r\n	<li>การป้องกันการแพร่กระจายของโรคระบาด : ลดการแพร่ของโรคระบาด โดยเฉพาะ โรคอุจจาระร่วง โรคมาลาเรียและโรคไข้เลือดออก</li>\r\n	<li>การป้องกันโรคและอันตรายจากการทำงานของบุคลากร</li>\r\n</ul>\r\n', '1');
INSERT INTO pages VALUES ('4', 'ปรัชญา ค่านิยม', 'dd', '1');
INSERT INTO pages VALUES ('5', 'ประเด็นยุทธศาสตร์', 'df', '1');
INSERT INTO pages VALUES ('6', 'เป้าหมาย', 'sdfdsf', '1');
INSERT INTO pages VALUES ('7', 'คณะผู้บริหาร', 'eweewrewrwe', '1');
INSERT INTO pages VALUES ('15', 'test123999', '<p>9999sddsfsdfsdf&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>ชื่อ</td>\r\n			<td>ลำดับ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ผะ</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img alt=\"\" src=\"https://www.google.co.th/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=0ahUKEwj0v6vd4-XOAhVKwI8KHRLBCEIQjRwIBw&amp;url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2F.com&amp;psig=AFQjCNHhK3tpMdgkxF6kTTllks9mtWFRGw&amp;ust=1472531037698397\" style=\"height:250px; width:250px\" /></p>\r\n', '0');

-- ----------------------------
-- Table structure for `slideshow`
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'default.jpg',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NULL DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO slideshow VALUES ('38', 'โรงพยาบาลละแม', '001.jpg', '2016-08-24 10:42:27', null, '1', '1');
INSERT INTO slideshow VALUES ('39', 'ทดสอบภาพ slideshow', '002.jpg', '2016-08-24 10:42:42', null, '1', '2');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_read` bigint(20) NOT NULL DEFAULT '0',
  `permission_write` bigint(20) NOT NULL DEFAULT '0',
  `permission_edit` bigint(20) NOT NULL DEFAULT '0',
  `permission_delete` bigint(20) NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'manmakemoney@gmail.com', 'จีระยุทธ ปิ่นสุวรรณ', '0', '0', '0', '0', '1');
INSERT INTO users VALUES ('7', 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'info@gmail.com', 'สมชาย นาคทอง', '0', '0', '0', '0', '1');
INSERT INTO users VALUES ('8', 'hhh', 'fae0b27c451c728867a567e8c1bb4e53', 'ddf@gmail.com', 'tsss', '0', '0', '0', '0', '0');
INSERT INTO users VALUES ('9', 'dddd', 'ece926d8c0356205276a45266d361161', 'dddsf', 'sss', '0', '0', '0', '0', '1');
