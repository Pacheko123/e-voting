-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2020 at 04:07 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirant`
--

CREATE TABLE IF NOT EXISTS `aspirant` (
  `asp_id` int(11) NOT NULL AUTO_INCREMENT,
  `asp_name` varchar(64) NOT NULL,
  `phone` varchar(24) NOT NULL,
  `asp_adm` varchar(15) NOT NULL,
  `asp_seat` varchar(64) NOT NULL,
  `year` varchar(50) NOT NULL,
  `party` varchar(50) NOT NULL,
  `vote` int(50) NOT NULL,
  PRIMARY KEY (`asp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `aspirant`
--

INSERT INTO `aspirant` (`asp_id`, `asp_name`, `phone`, `asp_adm`, `asp_seat`, `year`, `party`, `vote`) VALUES
(1, 'patrick', '56467', 'trgsxjxvbm', 'chairperson', '', '', 0),
(2, 'jkaskjhkf', '3456457', 'ghfjhgjkhjkk', 'SEcretary general', '', '', 0),
(3, 'Duncan', '0714757241', 'CIT-223-015/201', 'chairperson', 'Y3S2', 'Jubilee', 5),
(4, 'Duncan', '23456789', '23456789', 'Secretary general', '7', 'Big Fish', 0),
(5, 'Pacheko', '0714757241', 'CIT-223-015/201', 'chairperson', 'Y3S2', 'Jubilee', 2),
(6, 'Pacheko', '0714757241', 'CIT-223-015/201', 'chairperson', 'Y3S2', 'Jubilee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `lan_id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(10) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL,
  PRIMARY KEY (`lan_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lan_id`, `fullname`, `about`, `votecount`) VALUES
(1, 'BJP', 'BJP is', 5),
(2, 'CONGRESS', 'CONGRESS is', 6),
(3, 'AAP', 'AAP is', 21),
(4, 'TMC', 'TMC is', 17),
(5, 'NIRDLIY', 'NIRDLIY is ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE IF NOT EXISTS `loginusers` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`id`, `username`, `password`, `rank`, `status`) VALUES
(47, 'helllo', 'b373c043b854b0ebb97afe9b0ba47059', 'voter', 'ACTIVE'),
(46, 'jaha', 'e3df9353ab12391b79865f25a0d7068e', 'voter', 'ACTIVE'),
(45, 'action', '1ace9555f0aafb4fe1e75309e8f79e4d', 'voter', 'ACTIVE'),
(44, 'arjun', '451d3eb1573c7ebb70c08dfee9766509', 'voter', 'ACTIVE'),
(43, 'niku19', 'ac61ebbe84c06debaa78c0a832330164', 'voter', 'ACTIVE'),
(42, 'ejjhed', 'b3f70c0d1b269668e937741a5d5797ab', 'voter', 'ACTIVE'),
(41, 'Anirban', '9a7108cfaa7f51efb5fcda9e9d4b7a90', 'voter', 'ACTIVE'),
(40, 'dnddd', 'b5d165334b465a7fc42310750430b3f9', 'voter', 'ACTIVE'),
(48, 'suraj', 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE'),
(49, 'oluochp6@gmail', 'e10adc3949ba59abbe56e057f20f883e', 'voter', 'ACTIVE'),
(50, 'oluochp6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'voter', 'ACTIVE'),
(51, 'www.pacheko.inc@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'administrator', 'ACTIVE'),
(52, 'john@a.b', 'hello', 'voter', 'ACTIVE'),
(53, 'a@d.c', '5d41402abc4b2a76b9719d911017c592', 'voter', 'ACTIVE'),
(54, 'a@b.c', 'f898198629bb686f1dfc3d1ac8b13506', 'voter', 'ACTIVE'),
(55, 'mulongodancan25@gmail.com', '7492e2f3053c854d4e8f7e1ca149568c', 'voter', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `lastname`, `username`, `status`) VALUES
('sdjdjdj', 'djdjddjj', 'helllo', 'VOTED'),
('Anirban', 'oodoododo', 'jaha', 'NOTVOTED'),
('Anirban', 'Dutta', 'action', 'VOTED'),
('Anirban', 'Dutta', 'arjun', 'NOTVOTED'),
('janemaan', 'lohiid', 'niku19', 'VOTED'),
('asdhk', 'ddddnd', 'ejjhed', 'NOTVOTED'),
('Anirban', 'Dutta', 'Anirban', 'VOTED'),
('ndndnd', 'dhbhdd', 'dnddd', 'NOTVOTED'),
('suraj', 'ghosh', 'suraj', 'VOTED'),
('patrick', 'admin@tictac.ro', 'oluochp6@gmail', 'NOTVOTED'),
('pacheko', 'pacheko', 'oluochp6@gmail.com', 'NOTVOTED'),
('hello', 'hello', 'www.pacheko.inc@gmail.com', 'NOTVOTED'),
('doh', 'john', 'john@a.b', 'NOTVOTED'),
('qqww', 'qqwee', 'a@d.c', 'NOTVOTED'),
('doh', 'admin@tictac.ro', 'a@b.c', 'NOTVOTED'),
('Duncan', 'Daniel', 'mulongodancan25@gmail.com', 'voted');
