-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2015 at 07:28 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glenn_shamenator`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `sent_email` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `type_2` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `type`, `message`, `date_created`, `user_id`, `ip_address`, `sent_email`) VALUES
(1, '1', 'iamanerror', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(2, '1', 'testetstetestestestestes', '0000-00-00 00:00:00', 2, '202.89.47.7', 0),
(3, '1', 'testautest', '0000-00-00 00:00:00', 2, '202.89.47.7', 0),
(4, '1', 'emailsesntieostnsoeitnoietn', '0000-00-00 00:00:00', 2, '202.89.47.7', 1),
(5, '1', 'eoajdoiedjoiaejdoieajdioeaj', '0000-00-00 00:00:00', 2, '202.89.47.7', 1),
(6, '0', 'as', '0000-00-00 00:00:00', 123, 'asda', 0),
(7, '0', 'as', '0000-00-00 00:00:00', 123, 'asda', 0),
(8, '0', 'as', '0000-00-00 00:00:00', 123, 'asda', 0),
(9, '0', 'asdeadead', '0000-00-00 00:00:00', 123131133, 'deadeadea', 0),
(10, '0', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '', 0),
(11, '0', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(12, 'error', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(13, 'error', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(14, 'error', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(15, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(16, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(17, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '202.89.47.7', 0),
(18, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(19, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(20, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(21, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(22, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(23, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0),
(24, 'access', 'This is the message detailing the error', '0000-00-00 00:00:00', 0, '101.98.192.140', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shames`
--

DROP TABLE IF EXISTS `shames`;
CREATE TABLE IF NOT EXISTS `shames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shame` mediumtext NOT NULL,
  `notes` mediumtext NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `shames`
--

INSERT INTO `shames` (`id`, `website_id`, `user_id`, `shame`, `notes`, `date_updated`, `date_created`) VALUES
(1, 0, 0, 'asd', '', '2015-05-14 01:05:23', '0000-00-00 00:00:00'),
(2, 123123, 0, 'plah', '', '2015-05-14 01:08:05', '0000-00-00 00:00:00'),
(3, 14, 0, 'Dangit', '', '2015-05-14 01:26:05', '0000-00-00 00:00:00'),
(4, 1230, 0, 'TEST', '', '2015-05-14 02:55:13', '0000-00-00 00:00:00'),
(5, 123042, 0, 'so much shame', '', '2015-05-14 03:05:12', '0000-00-00 00:00:00'),
(6, 12308, 0, 'haoidw', '', '2015-05-15 00:20:53', '0000-00-00 00:00:00'),
(7, 99, 9, 'So shameful', '', '2015-05-15 00:21:07', '0000-00-00 00:00:00'),
(8, 31, 13, '13', '', '2015-05-15 00:29:49', '0000-00-00 00:00:00'),
(9, 14, 52, 'etstingeistnseigntiesnti', '', '2015-05-19 02:00:15', '0000-00-00 00:00:00'),
(10, 123908, 0, 'awgjoi', 'I''m a note', '2015-05-19 03:28:08', '0000-00-00 00:00:00'),
(11, 103809, 0, 'jioasjd', 'oijwad', '2015-05-20 01:34:22', '0000-00-00 00:00:00'),
(12, 234098, 0, 'efjoiewfj', 'oijesfoijsef', '2015-05-20 01:34:37', '0000-00-00 00:00:00'),
(13, 293480, 0, 'TESTINOESOIGNESOIGN', 'TESTOINEGOISNG', '2015-05-20 01:34:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date_updated`, `date_created`) VALUES
(1, 'glenn', 'Ch4ng3m3#', '2015-05-08 02:50:07', '2015-05-08 21:50:00'),
(2, 'Bob', 'jones', '2015-05-11 00:35:14', '2015-05-11 19:37:00'),
(3, 'Paul', 'Ryder', '2015-05-11 00:46:05', '2015-05-11 19:42:00'),
(4, 'bobby', 'jones', '2015-05-12 03:14:26', '0000-00-00 00:00:00'),
(5, 'bobby', 'jones', '2015-05-12 03:17:36', '0000-00-00 00:00:00'),
(6, 'asdoij', 'oijasd', '2015-05-13 01:41:04', '0000-00-00 00:00:00'),
(9, 'pow', 'powpow', '2015-05-14 00:33:44', '0000-00-00 00:00:00'),
(8, 'john', 'john', '2015-05-13 02:54:03', '0000-00-00 00:00:00'),
(10, 'bam po', 'powpow', '2015-05-14 00:33:54', '0000-00-00 00:00:00'),
(11, 'SUP', 'sup', '2015-05-14 03:08:01', '0000-00-00 00:00:00'),
(12, 'POW POW', 'win', '2015-05-14 03:11:01', '0000-00-00 00:00:00'),
(13, 'it is wedndesday', 'iwoadjoaiwdjowiajd', '2015-05-20 01:54:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

DROP TABLE IF EXISTS `websites`;
CREATE TABLE IF NOT EXISTS `websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `website` varchar(255) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `user_id`, `website`, `date_updated`, `date_created`) VALUES
(1, 0, 'www.blah.com', '2015-05-13 02:26:13', '0000-00-00 00:00:00'),
(2, 0, 'www.asdoijasdoij.com', '2015-05-13 02:34:26', '0000-00-00 00:00:00'),
(5, 0, 'oawedawdawd', '2015-05-14 01:40:18', '0000-00-00 00:00:00'),
(6, 0, 'www.TEJAPIOTJAEOIPJT.com', '2015-05-14 03:06:41', '0000-00-00 00:00:00'),
(7, 0, 'www.itiswednesday.com', '2015-05-20 02:03:15', '0000-00-00 00:00:00'),
(8, 0, 'etstetstestestest', '2015-05-20 02:05:14', '0000-00-00 00:00:00'),
(9, 0, '', '2015-05-20 02:06:29', '0000-00-00 00:00:00'),
(10, 139, 'pokapoka', '2015-05-20 02:08:42', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
