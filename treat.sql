/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : treat

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-15 17:42:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `banks`
-- ----------------------------
DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `account_no` varchar(150) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch` text,
  `ifsc` varchar(150) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banks
-- ----------------------------

-- ----------------------------
-- Table structure for `commitments`
-- ----------------------------
DROP TABLE IF EXISTS `commitments`;
CREATE TABLE `commitments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `commitment_amount` double DEFAULT NULL,
  `commitment_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `deposit_days` int(11) DEFAULT NULL,
  `return_per` double DEFAULT NULL,
  `return_amount` double DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of commitments
-- ----------------------------

-- ----------------------------
-- Table structure for `helps`
-- ----------------------------
DROP TABLE IF EXISTS `helps`;
CREATE TABLE `helps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `commitment_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT '0',
  `paid_amount` double DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_mode` varchar(150) DEFAULT NULL,
  `attachment` text,
  `is_approved` tinyint(1) DEFAULT '0',
  `approve_date` date DEFAULT NULL,
  `help_type` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of helps
-- ----------------------------

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `message_title` text,
  `message_body` text,
  `sent_date` date DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `content` text,
  `publish_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pages
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `mail_id` varchar(150) DEFAULT NULL,
  `login_id` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `mobile1` varchar(150) DEFAULT NULL,
  `mobile2` varchar(150) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `address` text,
  `ref_id` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `reason` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
