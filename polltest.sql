-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2020 at 09:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirant`
--

CREATE TABLE `aspirant` (
  `asp_id` int(11) NOT NULL,
  `asp_name` varchar(64) NOT NULL,
  `phone` varchar(24) NOT NULL,
  `asp_adm` varchar(15) NOT NULL,
  `asp_seat` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aspirant`
--

INSERT INTO `aspirant` (`asp_id`, `asp_name`, `phone`, `asp_adm`, `asp_seat`) VALUES
(1, 'patrick', '56467', 'trgsxjxvbm', 'chairperson'),
(2, 'jkaskjhkf', '3456457', 'ghfjhgjkhjkk', 'SEcretary general');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lan_id` int(100) NOT NULL,
  `fullname` varchar(10) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(54, 'a@b.c', 'f898198629bb686f1dfc3d1ac8b13506', 'voter', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `lastname`, `username`, `status`, `voted`) VALUES
('sdjdjdj', 'djdjddjj', 'helllo', 'VOTED', 'python'),
('Anirban', 'oodoododo', 'jaha', 'NOTVOTED', NULL),
('Anirban', 'Dutta', 'action', 'VOTED', 'php'),
('Anirban', 'Dutta', 'arjun', 'NOTVOTED', NULL),
('janemaan', 'lohiid', 'niku19', 'VOTED', 'c++'),
('asdhk', 'ddddnd', 'ejjhed', 'NOTVOTED', NULL),
('Anirban', 'Dutta', 'Anirban', 'VOTED', 'java'),
('ndndnd', 'dhbhdd', 'dnddd', 'NOTVOTED', NULL),
('suraj', 'ghosh', 'suraj', 'VOTED', 'NIRDLIY'),
('patrick', 'admin@tictac.ro', 'oluochp6@gmail', 'NOTVOTED', NULL),
('pacheko', 'pacheko', 'oluochp6@gmail.com', 'NOTVOTED', NULL),
('hello', 'hello', 'www.pacheko.inc@gmail.com', 'NOTVOTED', NULL),
('doh', 'john', 'john@a.b', 'NOTVOTED', NULL),
('qqww', 'qqwee', 'a@d.c', 'NOTVOTED', NULL),
('doh', 'admin@tictac.ro', 'a@b.c', 'NOTVOTED', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirant`
--
ALTER TABLE `aspirant`
  ADD PRIMARY KEY (`asp_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirant`
--
ALTER TABLE `aspirant`
  MODIFY `asp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
