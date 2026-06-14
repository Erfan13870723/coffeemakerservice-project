-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2026 at 10:29 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeemakerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentstbl`
--

DROP TABLE IF EXISTS `commentstbl`;
CREATE TABLE IF NOT EXISTS `commentstbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `message` text COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `commentstbl`
--

INSERT INTO `commentstbl` (`id`, `name`, `message`) VALUES
(15, 'erfan', 'vvvcccc'),
(14, 'erfan', 'عالی');

-- --------------------------------------------------------

--
-- Table structure for table `requeststbl`
--

DROP TABLE IF EXISTS `requeststbl`;
CREATE TABLE IF NOT EXISTS `requeststbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `file` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `answer` text COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `requeststbl`
--

INSERT INTO `requeststbl` (`id`, `fullname`, `email`, `title`, `description`, `file`, `answer`) VALUES
(15, 'mmd', 'mmd@gmail.com', 'jsdsjnbbs', 'sbxhhxbshx', '1779486319aورزش-هوازی-با-دوچرخه-ثابت.jpg', 'sjnsjnn x bncbbhbcbsh'),
(13, 'mmd', 'mmd@gmail.com', 'fcdcdcdcdcccccc', '', '1771871863Bent-Over-Lateral-Raise34.gif', '');

-- --------------------------------------------------------

--
-- Table structure for table `userstbl`
--

DROP TABLE IF EXISTS `userstbl`;
CREATE TABLE IF NOT EXISTS `userstbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `userstbl`
--

INSERT INTO `userstbl` (`id`, `fullname`, `email`, `password`, `is_admin`) VALUES
(24, 'حسین احمدی', 'ahmadi@gmail.com', '1405', 0),
(23, 'علی حسینی', 'ali@gmail.com', '4444', 0),
(22, 'mmd', 'mmd@gmail.com', '123', 0),
(18, 'erfan', 'erfan@gmail.com', '12345', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
