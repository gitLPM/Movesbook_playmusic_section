-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2022 at 10:08 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moves`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE IF NOT EXISTS `usertypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=59 ;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `role_id`, `title`, `created`, `modified`) VALUES
(1, 5, 'Coach', '2014-04-09 08:25:32', '2017-05-30 15:10:19'),
(2, 8, 'Club admin', '2014-04-09 08:25:41', '2015-06-08 06:50:36'),
(4, 5, 'Professional athlete', '2014-04-09 08:26:06', '2014-04-09 08:26:06'),
(5, 5, 'Personal trainer', '2014-04-09 08:26:21', '2014-04-09 08:26:21'),
(6, 8, 'Club owner', '2014-04-09 08:26:32', '2014-12-09 13:10:26'),
(7, 5, 'Generic member', '2014-04-09 08:26:46', '2015-10-06 06:12:40'),
(8, 6, 'Personal trainer', '2014-04-09 09:12:18', '2015-06-09 10:56:02'),
(9, 6, 'Instructor', '2014-04-09 09:12:46', '2015-06-08 06:48:50'),
(11, 8, 'CEO', '2014-04-09 09:13:22', '2015-06-16 05:53:14'),
(12, 5, 'Amatorial team', '2014-05-23 21:41:56', '2015-04-24 10:50:59'),
(13, 8, 'President', '2014-05-23 21:42:18', '2016-10-12 11:01:45'),
(14, 8, 'Director', '2014-05-23 21:43:02', '2015-10-06 07:47:51'),
(18, 7, 'Football Coach', '2014-11-11 08:23:39', '2015-10-07 10:54:48'),
(23, 6, 'Coachanti', '2015-01-06 11:22:17', '2015-01-06 11:22:17'),
(24, 6, 'Old Coachanti ', '2015-01-06 11:22:59', '2015-01-06 11:22:59'),
(25, 6, 'Coach', '2015-01-06 12:15:07', '2015-10-08 05:45:07'),
(30, 5, 'Coach cc', '2015-02-18 13:46:04', '2015-10-03 15:01:19'),
(31, 8, 'General Manager', '2015-03-10 05:55:28', '2016-01-28 05:20:28'),
(38, 5, 'Coach AS', '2015-06-09 11:59:20', '2015-06-09 11:59:20'),
(57, 5, 'new athelete', '2018-05-07 08:02:57', '2018-05-07 08:02:57'),
(58, 8, 'Manager', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
