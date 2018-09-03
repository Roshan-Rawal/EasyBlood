-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 03:36 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `name` varchar(20) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `blood_group` varchar(2) NOT NULL,
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donors`
--

INSERT INTO `blood_donors` (`name`, `contact`, `email`, `blood_group`, `city`) VALUES
('Roshan', '8780038297', 'roshanrawal43@gmail.com', 'B+', 'Surat'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'A+', 'Surat'),
('Suni chahuan ', '7623072273', 'sunilchauhan742@gmail.com', 'A+', 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`f_name`, `l_name`, `contact`, `email`, `message`) VALUES
('Roshan', 'l_name', '7623072273', 'roshanrawal43@gmail.com', 'erfvfv'),
('Roshan', 'Rawal', '7623072273', 'roshanrawal43@gmail.com', 'erfvfv'),
('Roshan', 'Rawal', '7623072273', 'roshanrawal43@gmail.com', 'mkjhgf'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('Roshan', 'Rawal', '7623072273', 'roshanrawal43@gmail.com', 'fdsjka'),
('Roshan', 'Rawal', '7623072273', 'roshanrawal43@gmail.com', 'trtd');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `name` varchar(15) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`name`, `contact`, `email`, `comment`) VALUES
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Hey I need your help'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Hey I need your help'),
('Rawal', '7623072273', 'roshanrawal143@gmail.com', 'Hey I need your help'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Hey I need your help'),
('Innovator', '7623072273', 'innovatorclubldce@gmail.com', 'Hey I need your help'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'HEllo'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'HEllo'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Hello, I need your help'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Hello, I need your help'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Hello, I need your help'),
('Roshan', '7623072273', 'roshanrawal143@gmail.com', 'this is roshan'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Its testing of redirection'),
('Roshan', '7623072273', 'roshanrawal143@gmail.com', 'Redirecting'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'hdkdfjkj'),
('Roshan', '7623072273', 'roshanrawal143@gmail.com', 'This is new email id configuration'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Testing'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'Testing'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'helllllllloooooooo'),
('Roshan', '7623072273', 'roshanrawal43@gmail.com', 'heeekekkekke');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
