-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2014 at 08:42 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `platform`
--
CREATE DATABASE IF NOT EXISTS `platform` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `platform`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `ordering` smallint(6) NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `parentId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `name`, `description`, `status`, `ordering`, `dateCreated`, `dateUpdated`, `parentId`) VALUES
(1, 'dssds', 'Root Category', 'Top Level Root Category', 0, 1, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 0),
(2, 'ADSSDS', 'DSSD', 'SDDSDS', 0, 1, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 2),
(3, 'dfdfdf', 'fdfdfdd', 'ererer', 0, 1, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 1),
(4, 'E:\\xampp\\tmp\\phpD57C.tmp', 'cvcvc', 'cvvcv', 0, 1, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 3),
(5, 'E:\\xampp\\tmp\\php28C5.tmp', 'gtggt', 'tggtgtgt', 1, 2, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 4),
(6, 'E:\\xampp\\tmp\\php7FAC.tmp', 'saasasasasasasa', 'assasa', 0, 3, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 2),
(7, 'E:\\xampp\\tmp\\phpD38E.tmp', 'swewe', 'ewwewewe', 0, 1, '2014-02-23 15:36:30', '2014-02-23 15:36:30', 3),
(8, 'E:\\xampp\\tmp\\php2441.tmp', 'sdsdsd', 'sdsdds', 2, 1, '2014-02-23 15:36:50', '2014-02-23 15:36:50', 1),
(9, 'E:\\xampp\\tmp\\phpE75.tmp', 'sddsdssd', 'sddsds', 0, 1, '2014-02-23 15:38:55', '2014-02-23 15:38:55', 3),
(10, 'E:\\xampp\\tmp\\php8CF.tmp', 'dddd', 'sdsdsdds', 1, 1, '2014-02-23 15:40:00', '2014-02-23 15:40:00', 2),
(11, 'E:\\xampp\\tmp\\phpA15C.tmp', 'dddd', 'wewe', 0, 1, '2014-02-23 15:40:39', '2014-02-23 15:40:39', 2),
(12, 'E:\\xampp\\tmp\\phpD0E5.tmp', 'Ahmed', 'sdsdsdsd', 0, 1, '2014-02-23 15:52:52', '2014-02-23 15:52:52', 2),
(13, 'E:\\xampp\\tmp\\phpDC99.tmp', 'ssq', 'qwqwq', 0, 4, '2014-02-23 18:53:08', '2014-02-23 18:53:08', 1),
(14, 'E:\\xampp\\tmp\\php41E1.tmp', 'سيسيس', 'سيسييسي', 0, 4, '2014-02-23 18:53:34', '2014-02-23 18:53:34', 2),
(15, 'E:\\xampp\\tmp\\phpFEAB.tmp', 'سيسسي', 'يسسيسي', 0, 5, '2014-02-23 18:54:22', '2014-02-23 18:54:22', 3),
(16, 'E:\\xampp\\tmp\\phpE2EE.tmp', 'aasas', 'asasas', 0, 5, '2014-02-23 19:07:22', '2014-02-23 19:07:22', 44),
(17, 'E:\\xampp\\tmp\\php23E8.tmp', 'aasas', 'asasas', 0, 5, '2014-02-23 19:07:38', '2014-02-23 19:07:38', 44),
(18, 'E:\\xampp\\tmp\\php436F.tmp', 'aasas', 'asasas', 0, 5, '2014-02-23 19:07:46', '2014-02-23 19:07:46', 33),
(19, 'E:\\xampp\\tmp\\phpA793.tmp', 'asassa', 'asasasdadsad', 0, 3, '2014-02-23 19:12:34', '2014-02-23 19:12:34', 4),
(20, 'E:\\xampp\\tmp\\phpB17.tmp', 'asassa', 'asasasdadsad', 0, 1, '2014-02-23 19:13:00', '2014-02-23 19:13:00', 5),
(21, 'E:\\xampp\\tmp\\php5EC3.tmp', 'dssdsdsd', 'wqwqwqw', 0, 2, '2014-02-23 19:13:21', '2014-02-23 19:13:21', 5),
(22, 'E:\\xampp\\tmp\\phpABAB.tmp', 'wedwewe', '2ewewew', 0, 3, '2014-02-23 19:13:41', '2014-02-23 19:13:41', 5),
(23, 'E:\\xampp\\tmp\\phpB26F.tmp', 'wewewe', 'wewewew', 0, 1, '2014-02-23 19:15:54', '2014-02-23 19:15:54', 6),
(24, 'E:\\xampp\\tmp\\phpF598.tmp', 'weewe', 'wewew', 0, 4, '2014-02-23 19:16:11', '2014-02-23 19:16:11', 5),
(25, 'E:\\xampp\\tmp\\php6C8D.tmp', 'dsdsd', 'dssdsd', 0, 4, '2014-02-23 19:42:54', '2014-02-23 19:42:54', 2),
(26, 'E:\\xampp\\tmp\\php2FBC.tmp', 'sdsdsds', 'sddsds', 0, 5, '2014-02-23 20:12:08', '2014-02-23 20:12:08', 2),
(27, 'E:\\xampp\\tmp\\php6FDC.tmp', 'sdsdsd', 'sdsdsdsd', 0, 6, '2014-02-23 20:12:24', '2014-02-23 20:12:24', 2),
(28, 'E:\\xampp\\tmp\\phpAB28.tmp', 'dssdds', 'sddssdsd', 0, 7, '2014-02-23 20:12:40', '2014-02-23 20:12:40', 2),
(29, 'E:\\xampp\\tmp\\php113F.tmp', 'dssdsd', 'dssdsdsd', 1, 8, '2014-02-23 20:38:13', '2014-02-23 20:38:13', 2),
(30, 'E:\\xampp\\tmp\\php25BA.tmp', 'dsds', 'sdsdds', 1, 5, '2014-02-23 20:41:35', '2014-02-23 20:41:35', 1),
(31, 'E:\\xampp\\tmp\\phpEBA8.tmp', 'dsds', 'sdsdds', 1, 6, '2014-02-23 20:52:15', '2014-02-23 20:52:15', 1),
(32, 'E:\\xampp\\tmp\\phpFC7B.tmp', 'dsds', 'sdsdds', 1, 7, '2014-02-23 20:52:20', '2014-02-23 20:52:20', 1),
(35, 'E:\\xampp\\tmp\\phpACCD.tmp', 'ewwe', 'ewweew', 1, 5, '2014-02-24 18:37:15', '2014-02-24 18:37:15', 0),
(36, 'E:\\xampp\\tmp\\phpFF22.tmp', 'wweewew', 'ewewewwe', 1, 5, '2014-02-24 18:37:36', '2014-02-24 18:37:36', 0),
(37, 'E:\\xampp\\tmp\\phpB769.tmp', 'qwqwwq', 'qwwqqwqwqw', 1, 5, '2014-02-24 18:38:23', '2014-02-24 18:38:23', 0),
(38, 'E:\\xampp\\tmp\\php5DF6.tmp', 'sdsdds', 'sd', 1, 6, '2014-02-24 20:11:57', '2014-02-24 20:11:57', 0),
(39, 'E:\\xampp\\tmp\\phpFFE4.tmp', 'sdsdds', 'sd', 1, 9, '2014-02-24 20:12:38', '2014-02-24 20:12:38', 0),
(40, 'E:\\xampp\\tmp\\php5134.tmp', 'sdsds', 'ddsdsds', 1, 9, '2014-02-24 20:12:59', '2014-02-24 20:12:59', 0),
(41, 'E:\\xampp\\tmp\\php3BE5.tmp', 'qqwqw', 'qwwqwq', 1, 9, '2014-02-24 20:13:59', '2014-02-24 20:13:59', 2),
(42, 'E:\\xampp\\tmp\\php80F5.tmp', 'weewwe', 'wewewe', 1, 1, '2014-02-24 20:14:17', '2014-02-24 20:14:17', 23),
(43, 'E:\\xampp\\tmp\\php5E7F.tmp', 'fdfd', 'wewe', 1, 1, '2014-02-24 20:31:37', '2014-02-24 20:31:37', 12),
(44, 'E:\\xampp\\tmp\\php9B74.tmp', 'sddssdsd', 'sddsds', 1, 8, '2014-02-24 20:31:52', '2014-02-24 20:31:52', 1),
(45, 'E:\\xampp\\tmp\\php6365.tmp', 'qwwqwq', 'qwqwqw', 1, 10, '2014-02-24 20:32:44', '2014-02-24 20:32:44', 2),
(46, 'E:\\xampp\\tmp\\phpEDDD.tmp', 'dsdsds', 'sddsds', 1, 9, '2014-02-24 20:42:03', '2014-02-24 20:42:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courseId` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `ordering` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_31780935C2B73C54` (`courseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `courseId`, `title`, `description`, `type`, `ordering`) VALUES
(1, 2, 'wewewe', 'wewewe', 1, 1),
(2, 1, 'dsfe', 'wewewe', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promoVideo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `visits` bigint(20) NOT NULL,
  `targetAgeFrom` smallint(6) NOT NULL,
  `targetAgeTo` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `description`, `image`, `promoVideo`, `dateCreated`, `dateUpdated`, `visits`, `targetAgeFrom`, `targetAgeTo`) VALUES
(1, 'Math', 'very good course in math', NULL, NULL, '2010-04-01 00:00:00', '2009-01-01 00:00:00', 2, 2, 5),
(2, 'boi', 'guuyuy', NULL, NULL, '2009-01-01 00:00:00', '2009-01-01 00:00:00', 4, 6, 7),
(3, 'sdsdds', 'guuyuy', 'sdsd', 'sd', '2009-01-01 00:00:00', '2009-01-01 00:00:00', 3, 4, 4),
(4, 'yyjy', 'uyyuy', 'yuyuuy', 'uyuyuy', '2009-01-01 00:00:00', '2009-01-01 00:00:00', 3, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `course_to_category`
--

CREATE TABLE IF NOT EXISTS `course_to_category` (
  `courseId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `ordering` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`courseId`,`categoryId`),
  KEY `IDX_BF7BB7BBC2B73C54` (`courseId`),
  KEY `IDX_BF7BB7BB9C370B71` (`categoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `name`) VALUES
(1, 'ahmedgroup', 'ahmedgroup', 'ahmedgroup@ahmedgroup.org', 'ahmedgroup@ahmedgroup.org', 1, 'cf4r8ouu0dcgkwok4o4c0cwsoccwosw', '0x4G2YFjYGBk6uqo8px+DfXbWVUkg2Ne8DQG/x3P8JOCWS1Xyz6y2NUt/rsyzet1Swkqvi5DuDbb0vsxriVi2A==', '2014-02-12 16:06:55', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, ''),
(2, 'ahmedgroup2', 'ahmedgroup2', 'me@ahmedgroup.org', 'me@ahmedgroup.org', 1, 'r0uqcj9g1msggwo8k8o4gocko8k0s4k', 'nqTAkyE/eN6rFygFepyPxFNYMljCiMKoAWu/YlIhR91N4zCsZsUjG+28juegYZF97gRqFNbSOALnVerQHNx/FA==', '2014-02-09 16:57:29', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, ''),
(3, 'ahmedgroup3', 'ahmedgroup3', 'ahmedgroup@sahmedgroup.org', 'ahmedgroup@sahmedgroup.org', 1, 'potwy5fwvqs80408s4ss8ww48wo88oo', 'mRbK9weOxt8DnWArB/MGekuCFleOt0WofPJJncUmpf9RH2ErrRGZJYhBCpfUYlMKEzbmzqtMiGXvrQeZY3jBCw==', '2014-02-11 10:36:20', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentId` int(11) NOT NULL,
  `youtubeId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BD06F52873A18A3B` (`contentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `FK_31780935C2B73C54` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);

--
-- Constraints for table `course_to_category`
--
ALTER TABLE `course_to_category`
  ADD CONSTRAINT `FK_BF7BB7BB9C370B71` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_BF7BB7BBC2B73C54` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_BD06F52873A18A3B` FOREIGN KEY (`contentId`) REFERENCES `content` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
