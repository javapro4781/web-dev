-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 09:30 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE IF NOT EXISTS `donors` (
  `Donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`Donor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`Donor_id`, `Name`, `sex`, `Age`, `address`, `city`, `phone`, `status`) VALUES
(30, 'Simon', 'male', 24, '978', 'Nakuru', '02120520', 'processed'),
(31, 'Joel', 'male', 36, '368', 'Kinamba', '0124588501', 'processed'),
(32, 'James', 'male', 45, '23', 'Meru', '2451452', 'processed'),
(33, 'Jane', 'female', 36, '352', 'Elgon', '132542562', 'processed'),
(34, 'Vickie', 'female', 30, '325', 'NHR', '12452363', 'processed'),
(35, 'Julian', 'female', 19, '2012', 'NHR', '125205212', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `donor_features`
--

CREATE TABLE IF NOT EXISTS `donor_features` (
  `Donor_feature_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Blood_type` text NOT NULL,
  `Temp` float NOT NULL,
  `Weight` float NOT NULL,
  `Haemoglobin` varchar(10) NOT NULL,
  `Donor_ID` int(10) NOT NULL,
  `Employee_ID` int(10) NOT NULL,
  PRIMARY KEY (`Donor_feature_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `donor_features`
--

INSERT INTO `donor_features` (`Donor_feature_ID`, `Blood_type`, `Temp`, `Weight`, `Haemoglobin`, `Donor_ID`, `Employee_ID`) VALUES
(6, 'A', 37.2, 56.9, 'Green', 31, 1),
(5, 'O', 36.9, 65.2, 'Red', 30, 1),
(7, 'A', 36.8, 65.2, 'Blue', 32, 1),
(8, 'AB', 36.9, 65.2, 'Red', 34, 1),
(9, 'B', 36.9, 48, 'Red', 35, 1),
(10, 'A', 37, 45, 'Red', 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(35) NOT NULL,
  `m_name` varchar(15) NOT NULL,
  `l_name` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `f_name`, `m_name`, `l_name`, `username`, `password`, `email`) VALUES
(1, 'System', 'Admin', 'Root', 'admin', 'pass123', 'sysadmin@app.com'),
(15, 'User', 'Two', 'Here', 'usertwo', 'pass123', 'user@two.com'),
(14, 'User', 'One', 'Here', 'user', 'pass123', 'user@one.com'),
(16, 'User', 'Three', 'Yes', 'userthree', 'pass123', 'user@three.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
