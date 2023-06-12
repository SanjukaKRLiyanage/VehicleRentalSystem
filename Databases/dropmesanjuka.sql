-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2023 at 03:28 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropmesanjuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

DROP TABLE IF EXISTS `accountant`;
CREATE TABLE IF NOT EXISTS `accountant` (
  `accountantID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`accountantID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`accountantID`, `name`, `username`, `email`) VALUES
(0, 'SKRLiyanage', 'Sanjuka1', 'sanjuka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

DROP TABLE IF EXISTS `budget`;
CREATE TABLE IF NOT EXISTS `budget` (
  `driverID` int(11) NOT NULL,
  `driverName` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`driverID`, `driverName`, `month`, `income`, `payment`) VALUES
(1, 'John', 'january', 1000, 1000000),
(2, 'wick', 'februery', 1300, 122466),
(3, 'John', 'march', 1000, 56000),
(4, 'John', 'april', 1000, 67000),
(5, 'John', 'may', 1000, 3500000),
(5, 'John', 'june', 1000, 3900000);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `driverID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`driverID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverID`, `name`, `username`, `email`) VALUES
(0, 'pramod', 'lakshan', 'lakshan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `driverID` int(11) NOT NULL,
  `driverName` varchar(50) NOT NULL,
  `vehicleID` int(11) NOT NULL,
  `dailyIncome` int(11) NOT NULL,
  `monthlyIncome` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`driverID`, `driverName`, `vehicleID`, `dailyIncome`, `monthlyIncome`) VALUES
(1, 'John', 1, 1000, 1000000),
(2, 'wick', 5, 1300, 122466),
(3, 'John', 1, 1000, 56000),
(4, 'John', 1, 1000, 67000),
(5, 'John', 1, 1000, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `monthlypayment`
--

DROP TABLE IF EXISTS `monthlypayment`;
CREATE TABLE IF NOT EXISTS `monthlypayment` (
  `driverID` int(11) NOT NULL,
  `driverName` varchar(50) NOT NULL,
  `vehicleID` int(11) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthlypayment`
--

INSERT INTO `monthlypayment` (`driverID`, `driverName`, `vehicleID`, `payment`) VALUES
(2, 'wick', 5, 13000),
(3, 'John', 1, 1000),
(4, 'John', 1, 1000),
(5, 'John', 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `userID` int(11) NOT NULL,
  `reservationID` int(11) NOT NULL,
  `driverID` int(11) NOT NULL,
  `reservationdate` date NOT NULL,
  `reservationtime` time NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`userID`, `reservationID`, `driverID`, `reservationdate`, `reservationtime`, `location`) VALUES
(1, 1, 1, '2023-01-01', '10:56:10', 'negambo'),
(2, 2, 5, '2023-02-05', '11:00:14', 'colombo'),
(3, 5, 1, '2023-03-10', '12:00:18', 'matara'),
(4, 6, 1, '2023-04-15', '13:15:45', 'anuradhapura'),
(5, 8, 1, '2023-05-25', '14:10:59', 'kegalle'),
(5, 8, 1, '2023-06-01', '23:15:38', 'anuradhapura');

-- --------------------------------------------------------

--
-- Table structure for table `workschedule`
--

DROP TABLE IF EXISTS `workschedule`;
CREATE TABLE IF NOT EXISTS `workschedule` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `workdate` date NOT NULL,
  `worktime` time NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workschedule`
--

INSERT INTO `workschedule` (`userID`, `userName`, `workdate`, `worktime`, `location`) VALUES
(1, 'Johny', '2023-07-01', '10:45:30', 'negambo'),
(2, 'bruno', '2023-08-01', '15:56:32', 'negambo'),
(3, 'kamal', '2023-04-13', '16:56:40', 'negambo'),
(4, 'sachin', '2023-02-01', '17:14:56', 'negambo'),
(5, 'malik', '2023-11-14', '21:10:56', 'negambo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
