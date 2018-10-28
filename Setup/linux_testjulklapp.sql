-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u3
-- http://www.phpmyadmin.net
--
-- Host: mydb19.surf-town.net
-- Generation Time: Oct 28, 2018 at 05:40 PM
-- Server version: 5.6.42-log
-- PHP Version: 5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `linux_testjulklapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE IF NOT EXISTS `bought` (
  `wishid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `relatives`
--

CREATE TABLE IF NOT EXISTS `relatives` (
  `userid` bigint(20) NOT NULL,
  `keyword` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relatives`
--

INSERT INTO `relatives` (`userid`, `keyword`) VALUES
(36, '0911aed621a145fb7a54b129692bc6e22372a4a3'),
(35, '0911aed621a145fb7a54b129692bc6e22372a4a3'),
(37, '0911aed621a145fb7a54b129692bc6e22372a4a3');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `testid` int(11) NOT NULL,
  `text` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `text`) VALUES
(1, 'Ett första test'),
(0, 'Ã¥Ã¤Ã¶');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userid` bigint(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `familyid` bigint(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `name`, `lastname`, `familyid`) VALUES
(35, 'superman', '9DC36851A2B519006C690FFBDE357F510C42B4C0', 'Clark', 'Kent', 35),
(36, 'batman', 'a1c9d813e9a66ad8ac1dc79650e3a5f18d13f99e', 'Bruce', 'Wayne', 36),
(37, 'spiderman', '7104de9500f491e0416fe6f165fa2c11291bb719', 'Peter', 'Parker', 37);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
`id` bigint(20) NOT NULL,
  `wish` varchar(200) NOT NULL,
  `bought` bigint(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `userid` bigint(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=580 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `wish`, `bought`, `link`, `userid`) VALUES
(573, 'Lex love', NULL, '', 35),
(576, 'a kiss from the Joker', NULL, '', 36),
(575, 'A red suite', 37, '', 35),
(577, 'A spider bike', NULL, '', 37),
(578, 'sunglasses', NULL, 'http://www.amazon.co.uk/PH-3064-Wayfarer-Sunglasses-900387/dp/B00E9OZ0AI/ref=sr_1_3?s=clothing&amp;ie=UTF8&amp;qid=1445882963&amp;sr=1-3', 37),
(579, 'Ã¥Ã¤Ã¶', NULL, 'Ã¥Ã¤Ã¶', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
 ADD PRIMARY KEY (`wishid`), ADD UNIQUE KEY `wishid` (`wishid`);

--
-- Indexes for table `relatives`
--
ALTER TABLE `relatives`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=580;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
