drop database if exist instar;

create database instar;

use instar;

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) NOT NULL DEFAULT '',
  `password` char(15) NOT NULL,
  `role` char(20) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `admins`
--

INSERT INTO `admin` (`id`, `admin`, `password`, `role`, `status`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2', 1),
(7, 'developer', '81dc9bdb52d04dc20036dbd8313ed055', '1', 1),
(8, 'operator', '81dc9bdb52d04dc20036dbd8313ed055', '3', 1),
(9, 'user', '81dc9bdb52d04dc20036dbd8313ed055', '4', 1),
(12, 'aa', 'ed908de5f9627241a61e44996dc2dcbf', '1', 1);

-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50)NOT NULL,
  `content` text NOT NULL,
  `createDate` datetime NOT NULL ,
  `updateDate` datetime NOT NULL ,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=32 ;



CREATE TABLE IF NOT EXISTS news_type (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primary',
  `type` varchar(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS `public_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(500) NOT NULL DEFAULT '',
  `city` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL,
  `dateCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS `public_relation_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publicRelationId` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;






CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(500) NOT NULL DEFAULT '',
  `city` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL,
  `dateCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS `event_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` tinyint(1) NOT NULL COMMENT '1.male; 2.female',
  `name` varchar(50) NOT NULL DEFAULT '',
  `name_cn` varchar(50) NOT NULL DEFAULT '',
  `height` varchar(20) NOT NULL DEFAULT '',
  `shoes` varchar(20) NOT NULL DEFAULT '',
  `hair` varchar(20) NOT NULL DEFAULT '',
  `waist` varchar(20) NOT NULL DEFAULT '',
  `eyes` varchar(20) NOT NULL DEFAULT '',
  `hips` varchar(20) NOT NULL DEFAULT '',
  `modelCard` varchar(100) NOT NULL DEFAULT '',
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `model_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `typeId` tinyint(1) NOT NULL COMMENT '1.protfolio; 2.polaroids; 3.press',
  `picture` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
