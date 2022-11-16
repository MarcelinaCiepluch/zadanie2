-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 08:39 PM
-- Server version: 5.5.30
-- PHP Version: 5.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baza1`
--

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownik`
--

CREATE TABLE IF NOT EXISTS `uzytkownik` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ulogin` varchar(30) NOT NULL,
  `uhaslo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `ulogin`, `uhaslo`) VALUES
(1, 'Adolf McOven', 'GlassOfGas'),
(2, 'test', 'test'),
(3, 'Damn', 'Damn'),
(4, 'JohnnyBoi', 'No'),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `yn`
--

CREATE TABLE IF NOT EXISTS `yn` (
  `ynid` int(5) NOT NULL AUTO_INCREMENT,
  `id` int(5) NOT NULL,
  `yn` varchar(1) NOT NULL,
  PRIMARY KEY (`ynid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `yn`
--

INSERT INTO `yn` (`ynid`, `id`, `yn`) VALUES
(1, 1, 'y'),
(2, 1, 'y'),
(3, 1, 'y'),
(4, 1, 'n'),
(5, 1, 'n'),
(6, 2, 'n'),
(7, 2, 'n'),
(8, 2, 'n'),
(9, 2, 'y'),
(10, 2, 'n'),
(11, 2, 'n'),
(12, 2, 'n'),
(13, 2, 'n'),
(14, 2, 'n'),
(15, 2, 'n'),
(16, 2, 'n'),
(17, 2, 'n'),
(18, 2, 'n'),
(19, 2, 'n'),
(20, 2, 'n'),
(21, 2, 'n'),
(22, 2, 'n'),
(23, 2, 'n'),
(24, 0, 'n'),
(25, 0, 'y'),
(26, 0, 'y'),
(27, 0, 'y'),
(28, 0, 'n'),
(29, 4, 'y'),
(30, 5, 'n'),
(31, 5, 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
