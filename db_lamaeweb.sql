/*
Navicat MySQL Data Transfer

Source Server         : SERVER_MASTER
Source Server Version : 50532
Source Host           : 192.168.1.253:3306
Source Database       : db_lamaeweb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2016-09-07 11:25:46
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
  `website` varchar(255) DEFAULT NULL,
  `google_map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO configs VALUES ('1', 'โรงพยาบาลละแม', '45 ม.7 ถ.เพชรเกษม ต.ละแม อ.ละแม จ.ชุมพร', '077-559116', '077-559115', 'lamaehaha', 'logo11381_thumb.png', 'นพ.กฤตภิษัช  ไม้ทองงาม', 'รักษาการ ผู้อำนวยการโรงพยาบาลละแม', 'leader2_thumb.jpg', 'info@gmail.com', 'www.lmh.moph.go.th/h11381', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15728.644100626883!2d99.08475680000001!3d9.752424499999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8711a3dd55afaef1!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Lil4Liw4LmB4Lih!5e0!3m2!1sth!2sth!4v1472790526811');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO documents VALUES ('16', 'A0001', '2016-09-01 00:00:00', '', 'ทดสอบเอกสารราชการทั่วไป', 'ธุรการ', '57c7e594857fa', 'sdfdsfทดสอบรายละเอียด', '2016-09-01 10:23:48', '2016-09-01 10:33:39', '1', '1', '1', '14');

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
INSERT INTO gallery VALUES ('24', 'ทดสอบกิจกรรมโรงพยาบาล 1', 'test', 'nb001.jpg', 'nb001_thumb.jpg', '2016-08-03 09:51:05', '2016-08-15 11:44:29', '1', '15', '1', null);
INSERT INTO gallery VALUES ('25', 'ทดสอบกิจกรรมโรงพยาบาล 2', 'ts', 'nb002.jpg', 'nb002_thumb.jpg', '2016-08-03 09:52:30', '2016-08-15 11:44:34', '1', '20', '1', null);

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
INSERT INTO news VALUES ('13', 'test ข่าวประชาสัมพันธ์ 188888', 'test ข่าวประชาสัมพันธ์ 1', '2016-08-15 08:19:20', '2016-08-16 04:51:23', '1', '1', '1', '25', '57b15ee8b3b05');
INSERT INTO news VALUES ('14', 'test ข่าวประชาสัมพันธ์ 299999', 'test ข่าวประชาสัมพันธ์ 2', '2016-08-15 08:20:58', '2016-08-16 04:51:17', '1', '1', '1', '34', '57b15f4a0b9d3');
INSERT INTO news VALUES ('15', 'กกกกกหดดหกดหกดหก', 'หกดหกดหก', '2016-08-16 04:54:23', '2016-08-16 04:54:23', '1', '1', '2', '102', '57b2805f4e3af.pdf');
INSERT INTO news VALUES ('16', 'หหหหกดกหด', 'หกดหกดหก', '2016-08-16 04:55:31', '2016-08-16 04:55:31', '1', '1', '2', '14', '57b280a39ec63.rar');
INSERT INTO news VALUES ('17', '999กหกกหกดหกดหข่าว', 'หกกดห', '2016-08-16 04:55:54', '2016-08-17 03:30:29', '1', '1', '1', '5', '');

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
  `visible` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO pages VALUES ('1', 'ข้อมูลพื้นฐาน', '<p><strong>อำเภอละแม</strong>&nbsp;<br />\r\nคำว่า &ldquo;ละแม&rdquo; มีผู้สันนิษฐานไว้ว่าอาจจะมาจากคำภาษาฝรั่งเศษว่า&ldquo; Le Mer&rdquo; แปลว่าทะเล แต่เดิม อำเภอละแมเป็นเพียงตำบลหนึ่งในอำเภอหลังสวน จังหวัดชุมพร โดยประกอบด้วย 8 หมู่บ้าน ต่อมาได้มีผู้อพยพจากต่างถิ่นเข้ามาประกอบอาชีพมากขึ้น จึงได้รับการยกฐานะขึ้นเป็น กิ่งอำเภอ เมื่อวันที่ 1 กรกฎาคม 2514 ยกฐานะขึ้นเป็นอำเภอ ๆ หนึ่งของจังหวัดชุมพร เมื่อวันที่ 13 เมษายน 2520 ตามลำดับ อำเภอละแม อยู่ห่างจากตัวจังหวัดชุมพร 95 กม. และห่างจาก ตัวจังหวัดสุราษฎร์ธานี 99 กม. มีสถานที่ท่องเที่ยวที่สำคัญได้แก่ หาดตะวันฉาย บ่อน้ำร้อน ถ้ำเขาพลู น้ำตกจำปูน</p>\r\n', '1');
INSERT INTO pages VALUES ('2', 'ประวัติความเป็นมา', '<p><strong>อำเภอละแม</strong>&nbsp;<br />\r\nคำว่า &ldquo;ละแม&rdquo; มีผู้สันนิษฐานไว้ว่าอาจจะมาจากคำภาษาฝรั่งเศษว่า&ldquo; Le Mer&rdquo; แปลว่าทะเล แต่เดิม อำเภอละแมเป็นเพียงตำบลหนึ่งในอำเภอหลังสวน จังหวัดชุมพร โดยประกอบด้วย 8 หมู่บ้าน ต่อมาได้มีผู้อพยพจากต่างถิ่นเข้ามาประกอบอาชีพมากขึ้น จึงได้รับการยกฐานะขึ้นเป็น กิ่งอำเภอ เมื่อวันที่ 1 กรกฎาคม 2514 ยกฐานะขึ้นเป็นอำเภอ ๆ หนึ่งของจังหวัดชุมพร เมื่อวันที่ 13 เมษายน 2520 ตามลำดับ อำเภอละแม อยู่ห่างจากตัวจังหวัดชุมพร 95 กม. และห่างจาก ตัวจังหวัดสุราษฎร์ธานี 99 กม. มีสถานที่ท่องเที่ยวที่สำคัญได้แก่ หาดตะวันฉาย บ่อน้ำร้อน ถ้ำเขาพลู น้ำตกจำปูน</p>\r\n\r\n<p><strong>ประวัติ โรงพยาบาลละแม</strong>&nbsp;<br />\r\nโรงพยาบาลละแม ตั้งอยู่ที่ 45 หมู่ที่ 7 ถนนเพชรเกษม ตำบลละแม อำเภอละแม จังหวัดชุมพร มีเนื้อทีทั้งสิ้น 27 ไร่ 2 งาน 55.5 ตารางวา ด้วยการบริจาคของนายอมร -นางละออง บรรจงศิริ,นายเซียม - นางจับ เกิดเนตร วันที่ 11 พฤศจิกายน 2526 วางศิลาฤกษ์ ก่อสร้างเป็นโรงพยาบาลชุมชนขนาด 10 เตียง วันที่ 1 ตุลาคม 2527 เปิดให้บริการ ขนาด 10 เตียง วันที่ 14 กรกฎาคม 2535 ขยายบริการเป็นโรงพยาบาลชุมชน ขนาด 30 เตียง ปัจจุบัน (ณ 21 ธันวาคม 2544)โรงพยาบาลละแมมีเตียงจริง จำนวน 46 เตียง(ไม่นับ เตียงเสริม)</p>\r\n\r\n<p><strong>วิสัยทัศน์โรงพยาบาล</strong>&nbsp;<br />\r\n&quot;โรงพยาบาลที่เป็นผู้นำด้านการสร้างเสริมสุขภาพ บริการได้มาตรฐานคุณภาพ ภาคีเครือข่ายร่วมใจ ส่งเสริมการแพทย์ทางเลือก&quot;</p>\r\n\r\n<p><strong>วิสัยทัศน์ด้านการพัฒนาคุณภาพ</strong>&nbsp;<br />\r\n&quot;เราจะเป็นสถานบริการพยาบาลของรัฐที่ได้มาตรฐานสากล ISO 9001 : 2000 ภายในปี 2544 และเป็นแห่งแรกในจังหวัดชุมพร&quot;</p>\r\n', '1');
INSERT INTO pages VALUES ('3', 'วิสัยทัศน์ พันธกิจ', 'sfd', '1');
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
INSERT INTO slideshow VALUES ('38', 'test1', '10.jpg', '2016-08-24 10:42:27', null, '0', '1');
INSERT INTO slideshow VALUES ('39', 'test 2', '11.jpg', '2016-08-24 10:42:42', null, '1', '2');
INSERT INTO slideshow VALUES ('40', 'test 3', '111.jpg', '2016-08-24 10:52:53', null, '1', '3');
INSERT INTO slideshow VALUES ('45', 'test4', 'default.jpg', '2016-08-29 08:07:44', null, '1', '4');

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
INSERT INTO users VALUES ('1', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'manmakemoney@gmail.com', '', 'จีระยุทธ ปิ่นสุวรรณ', '0', '0', '0', '0');
