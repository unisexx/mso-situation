/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50045
Source Host           : localhost:3306
Source Database       : mso-situation

Target Server Type    : MYSQL
Target Server Version : 50045
File Encoding         : 65001

Date: 2014-11-27 10:03:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) unsigned zerofill NOT NULL auto_increment,
  `category_id` int(11) default NULL,
  `slug` varchar(255) default NULL,
  `title` text,
  `url` varchar(255) default NULL,
  `image` varchar(25) default NULL,
  `user_id` int(11) default NULL,
  `status` varchar(10) default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  `orderlist` int(11) default NULL,
  `counter` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('00000000001', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-27 09:39:20', null, '2');
INSERT INTO `books` VALUES ('00000000002', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-26 13:12:25', null, '0');
INSERT INTO `books` VALUES ('00000000003', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-26 11:05:16', '10', '0');
INSERT INTO `books` VALUES ('00000000004', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000005', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000006', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-26 11:05:16', '20', '0');
INSERT INTO `books` VALUES ('00000000007', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-26 13:13:22', null, '0');
INSERT INTO `books` VALUES ('00000000008', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000009', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-26 11:05:16', '30', '0');
INSERT INTO `books` VALUES ('00000000010', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000011', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-26 13:21:54', null, '1');
INSERT INTO `books` VALUES ('00000000012', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-26 11:05:16', '40', '0');
INSERT INTO `books` VALUES ('00000000013', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-26 13:21:55', null, '1');
INSERT INTO `books` VALUES ('00000000014', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-26 13:21:56', null, '1');
INSERT INTO `books` VALUES ('00000000015', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-26 13:21:56', null, '1');
INSERT INTO `books` VALUES ('00000000016', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000017', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000018', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');
INSERT INTO `books` VALUES ('00000000019', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000020', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000021', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');
INSERT INTO `books` VALUES ('00000000022', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000023', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000024', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');
INSERT INTO `books` VALUES ('00000000025', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000026', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000027', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');
INSERT INTO `books` VALUES ('00000000028', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000029', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000030', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');
INSERT INTO `books` VALUES ('00000000031', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000032', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000033', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');
INSERT INTO `books` VALUES ('00000000034', '1', 'aaa', 'aaa', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '547292285ba3b.png', '49', 'approve', '2014-11-20 16:03:36', '2014-11-24 09:04:24', null, '0');
INSERT INTO `books` VALUES ('00000000035', '3', 'เด็กเอ๋ยเด็กดี', 'เด็กเอ๋ยเด็กดี...', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472921c987fb.png', '49', 'approve', '2014-11-21 09:21:42', '2014-11-24 09:04:12', null, '0');
INSERT INTO `books` VALUES ('00000000036', '2', 'title', 'title', 'http://localhost:70/mso-situation/uploads/doc/childbirth55/index.html', '5472920f8ddb7.png', '49', 'approve', '2014-11-21 09:31:01', '2014-11-24 09:03:59', null, '0');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'ทั่วไป');
INSERT INTO `categories` VALUES ('2', 'วิชาการ');
INSERT INTO `categories` VALUES ('3', 'วรรณกรรม');

-- ----------------------------
-- Table structure for levels
-- ----------------------------
DROP TABLE IF EXISTS `levels`;
CREATE TABLE `levels` (
  `id` int(11) NOT NULL auto_increment,
  `level` varchar(50) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of levels
-- ----------------------------
INSERT INTO `levels` VALUES ('1', 'Administrator');
INSERT INTO `levels` VALUES ('2', 'Member');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `level_id` int(11) default '2',
  `user_type_id` int(11) default NULL,
  `display` varchar(50) character set utf8 default NULL,
  `username` varchar(30) character set utf8 default NULL,
  `password` varchar(50) character set utf8 default NULL,
  `email` varchar(50) collate utf8_unicode_ci default NULL,
  `image` varchar(255) character set utf8 default NULL,
  `signature` varchar(255) collate utf8_unicode_ci default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  `modified` datetime default NULL,
  `name` varchar(255) character set utf8 default NULL,
  `last_login` datetime default NULL,
  `m_status` varchar(30) collate utf8_unicode_ci default 'active',
  `auth_key` varchar(50) collate utf8_unicode_ci default NULL,
  `facebook_id` varchar(50) collate utf8_unicode_ci default NULL,
  `facebook_name` varchar(255) collate utf8_unicode_ci default NULL,
  `facebook_link` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3484 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('49', '1', '1', 'Administrator', 'admin', 'fd1234', 'example@gmail.com', 'http://25.media.tumblr.com/tumblr_lsjtfo8dZx1qcyq8xo7_250.png', '<p><img src=\"http://upic.me/i/t7/5158475720110318144258086.jpg\" alt=\"\" /><br /><br /></p>', '2012-10-12 00:11:31', '2013-11-25 10:59:17', null, 'Administrator', null, 'active', null, null, null, null);

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES ('1', 'ผู้ดูแลระบบ');
