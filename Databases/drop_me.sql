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
-- Database: `drop_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `massage` text,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`user_id`, `name`, `massage`, `email`, `status`) VALUES
(1, 'John Doe', 'Hello, I have a question.', 'johndoe@example.com', 'Resolved');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

DROP TABLE IF EXISTS `customer_payments`;
CREATE TABLE IF NOT EXISTS `customer_payments` (
  `transaction_id` int(11) NOT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `reservation_id` (`reservation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payments`
--

INSERT INTO `customer_payments` (`transaction_id`, `reservation_id`, `amount`, `type`) VALUES
(1, 1, '600.00', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `driver_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `lison_num` varchar(20) NOT NULL,
  `insurance_num` varchar(20) NOT NULL,
  `contactnum` int(12) NOT NULL,
  `email` varchar(34) NOT NULL,
  `bank_name` varchar(25) NOT NULL,
  `bank_branch` varchar(25) NOT NULL,
  `account_number` varchar(25) NOT NULL,
  `account_name` varchar(25) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `f_name`, `l_name`, `dob`, `address`, `gender`, `lison_num`, `insurance_num`, `contactnum`, `email`, `bank_name`, `bank_branch`, `account_number`, `account_name`) VALUES
(1, 'John', 'Doe', '1990-05-15', '456 New Street', 'Male', 'ABC123', 'XYZ456', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver_email`
--

DROP TABLE IF EXISTS `driver_email`;
CREATE TABLE IF NOT EXISTS `driver_email` (
  `driver_id` int(11) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_email`
--

INSERT INTO `driver_email` (`driver_id`, `email`) VALUES
(1, 'updatedemail@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver_pay_sheet`
--

DROP TABLE IF EXISTS `driver_pay_sheet`;
CREATE TABLE IF NOT EXISTS `driver_pay_sheet` (
  `driver_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `hours` int(28) NOT NULL,
  `ot_hours` int(29) NOT NULL,
  PRIMARY KEY (`driver_id`,`year`,`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_pay_sheet`
--

INSERT INTO `driver_pay_sheet` (`driver_id`, `year`, `month`, `amount`, `hours`, `ot_hours`) VALUES
(1, 2023, 'May', '1500.00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver_phone_number`
--

DROP TABLE IF EXISTS `driver_phone_number`;
CREATE TABLE IF NOT EXISTS `driver_phone_number` (
  `driver_id` int(11) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_phone_number`
--

INSERT INTO `driver_phone_number` (`driver_id`, `phone_number`) VALUES
(1, '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `user_id` int(11) DEFAULT NULL,
  `Parent_ID` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `Parent_ID`, `email`, `name`, `status`) VALUES
(1, 1, 'johndoe@example.com', 'John Doe', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `income_report`
--

DROP TABLE IF EXISTS `income_report`;
CREATE TABLE IF NOT EXISTS `income_report` (
  `month` varchar(20) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `profits` decimal(10,2) DEFAULT NULL,
  KEY `driver_id` (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_report`
--

INSERT INTO `income_report` (`month`, `driver_id`, `amount`, `profits`) VALUES
('May', 1, '1200.00', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `live_support`
--

DROP TABLE IF EXISTS `live_support`;
CREATE TABLE IF NOT EXISTS `live_support` (
  `user_id` int(11) DEFAULT NULL,
  `system_user_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `message` text,
  `status` varchar(20) DEFAULT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_support`
--

INSERT INTO `live_support` (`user_id`, `system_user_id`, `parent_id`, `message`, `status`) VALUES
(1, 1, 1, 'Need assistance with my reservation.', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(11) NOT NULL,
  `month` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `month`, `user_id`, `date`, `type`) VALUES
(1, 'May', 1, '2023-05-31', 'Quarterly Report');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` varchar(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pickup_time` time DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `return_time` time DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `pickup_location` varchar(100) DEFAULT NULL,
  `return_location` varchar(100) DEFAULT NULL,
  `drivertype` varchar(100) DEFAULT NULL,
  `vehicle_type` int(11) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `vehicle_id` (`vehicle_id`),
  KEY `driver_id` (`driver_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `vehicle_id`, `driver_id`, `status`, `user_id`, `pickup_time`, `pickup_date`, `return_time`, `return_date`, `pickup_location`, `return_location`, `drivertype`, `vehicle_type`, `payment`, `payment_status`) VALUES
('BVEIIG', 21, 456, 'Booked', 789, '09:11:00', '2023-06-11', '05:16:00', '2023-06-21', 'Malabe', 'Matara', 'withdriver', 1, 100, 1),
('0AQKRM', 21, 1, NULL, NULL, '05:34:00', '2023-06-20', '09:30:00', '2023-06-11', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('VCS03W', 21, 1, NULL, NULL, '07:33:00', '2023-06-21', '05:35:00', '2023-06-29', 'ksdask', 'Matara', 'withdriver', NULL, NULL, NULL),
('1NGVQM', 21, 1, NULL, NULL, '06:20:00', '2023-06-28', '06:20:00', '2023-06-20', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('F7H9EK', 21, 1, NULL, NULL, '06:22:00', '2023-06-21', '08:20:00', '2023-06-13', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('PIXMZJ', 21, 1, NULL, NULL, '06:25:00', '2023-06-14', '06:25:00', '2023-06-21', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('IPOCQG', 21, 1, NULL, NULL, '08:24:00', '2023-06-28', '08:24:00', '2023-06-12', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('7UAKJM', 21, 1, NULL, NULL, '06:33:00', '2023-06-13', '06:36:00', '2023-06-19', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('9GIH3G', 21, 1, NULL, NULL, '09:40:00', '2023-06-19', '06:45:00', '2023-06-13', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL),
('S9NDU9', 21, 1, NULL, NULL, '06:44:00', '2023-06-28', '10:41:00', '2023-06-30', 'Malabe', 'Matara', 'withdriver', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

DROP TABLE IF EXISTS `system_user`;
CREATE TABLE IF NOT EXISTS `system_user` (
  `system_user_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`system_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`system_user_id`, `f_name`, `l_name`, `dob`, `address`, `gender`, `type`, `password`, `email`) VALUES
(1, 'Updated', 'User', '1995-02-15', '456 New Street', 'Female', 'User', 'newpassword', ''),
(204526, 'Kushan', 'Abeysekara', '2000-10-18', 'Sliit Malabe', 'Male', 'admin', '12345', 'kushan@gmail.com'),
(1234, 'Saduthari', 'Abeysekara', '2023-06-19', '', 'female', 'user', '12345', 'saduthari@gmail.com'),
(12345, 'Sanjuka', '', '2023-06-01', 'wfef', 'male', 'accountant', '12345', 'sanjuka@gmail.com'),
(32456, 'saduthari', '', '2023-06-01', 'dasd', '', 'driver', '12345', 'sanduthati@gmail.com'),
(31234, 'Supuni', '', '2023-06-12', 'da', 'female', 'maneger', '12345', 'supuni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `system_user_email`
--

DROP TABLE IF EXISTS `system_user_email`;
CREATE TABLE IF NOT EXISTS `system_user_email` (
  `user_id` int(11) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user_email`
--

INSERT INTO `system_user_email` (`user_id`, `email`) VALUES
(1, 'updated@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `system_user_pay_sheet`
--

DROP TABLE IF EXISTS `system_user_pay_sheet`;
CREATE TABLE IF NOT EXISTS `system_user_pay_sheet` (
  `system_user_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`system_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user_pay_sheet`
--

INSERT INTO `system_user_pay_sheet` (`system_user_id`, `year`, `month`, `amount`) VALUES
(1, 2023, 'May', '700.00');

-- --------------------------------------------------------

--
-- Table structure for table `system_user_phone_number`
--

DROP TABLE IF EXISTS `system_user_phone_number`;
CREATE TABLE IF NOT EXISTS `system_user_phone_number` (
  `user_id` int(11) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user_phone_number`
--

INSERT INTO `system_user_phone_number` (`user_id`, `phone_no`) VALUES
(1, '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
CREATE TABLE IF NOT EXISTS `user_accounts` (
  `user_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_id`, `email`, `f_name`, `l_name`, `dob`, `address`, `gender`) VALUES
(1, 'john@example.com', 'John', 'Doe', '1990-01-01', '123 Main Street', 'Male'),
(2, 'jane@example.com', 'Jane', 'Smith', '1988-12-02', '456 Elm Avenue', 'Female'),
(3, 'alex@example.com', 'Alex', 'Johnson', '1995-09-10', '789 Oak Road', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_email`
--

DROP TABLE IF EXISTS `user_accounts_email`;
CREATE TABLE IF NOT EXISTS `user_accounts_email` (
  `user_id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts_email`
--

INSERT INTO `user_accounts_email` (`user_id`, `email`) VALUES
(1, 'updated@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_phone_number`
--

DROP TABLE IF EXISTS `user_accounts_phone_number`;
CREATE TABLE IF NOT EXISTS `user_accounts_phone_number` (
  `user_id` int(11) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts_phone_number`
--

INSERT INTO `user_accounts_phone_number` (`user_id`, `phone_no`) VALUES
(1, '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_number` varchar(20) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `manufacture_year` int(11) DEFAULT NULL,
  `chassis_number` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `license_number` varchar(50) DEFAULT NULL,
  `origin_country` varchar(50) DEFAULT NULL,
  `insurance_number` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_number`, `model`, `brand`, `manufacture_year`, `chassis_number`, `type`, `license_number`, `origin_country`, `insurance_number`, `price`, `status`) VALUES
(7, '', 'Model 7', 'Brand 7', 2019, 'CHAS901', 'Type 7', 'LICENSE901', 'Country 7', 'INS901', '11000.00', 'available'),
(6, 'PQR678', 'Model 6', 'Brand 6', 2021, 'CHAS678', 'Type 6', 'LICENSE678', 'Country 6', 'INS678', '16000.00', 'available'),
(5, 'MNO345', 'Model 5', 'Brand 5', 2020, 'CHAS345', 'Type 5', 'LICENSE345', 'Country 5', 'INS345', '13000.00', 'available'),
(4, 'JKL012', 'Model 4', 'Brand 4', 2022, 'CHAS012', 'Type 4', 'LICENSE012', 'Country 4', 'INS012', '18000.00', 'available'),
(2, 'DEF456', 'Model 2', 'Brand 2', 2021, 'CHAS456', 'Type 2', 'LICENSE456', 'Country 2', 'INS456', '15000.00', 'available'),
(3, 'GHI789', 'Model 3', 'Brand 3', 2019, 'CHAS789', 'Type 3', 'LICENSE789', 'Country 3', 'INS789', '12000.00', 'available'),
(1, 'ABC1234', 'Model 1', 'Brand 1', 2020, 'CHAS123', 'Type 1', 'LICENSE123', 'Country 1', 'INS123', '10000.00', 'available'),
(10, 'BCD890', 'Model10', 'Brand10', 2012, '951357246', 'Type10', 'License10', 'Country10', 'Insurance10', '19000.00', 'Unavailable'),
(22, 'LMN456', 'Model 22', 'Brand 22', 2022, 'CHAS456', 'Type 22', 'LICENSE456', 'Country 22', 'INS456', '19000.00', 'available'),
(23, 'OPQ789', 'Model 23', 'Brand 23', 2019, 'CHAS789', 'Type 23', 'LICENSE789', 'Country 23', 'INS789', '15000.00', 'available'),
(24, 'RST012', 'Model 24', 'Brand 24', 2020, 'CHAS012', 'Type 24', 'LICENSE012', 'Country 24', 'INS012', '16000.00', 'available'),
(25, 'UVW345', 'Model 25', 'Brand 25', 2022, 'CHAS345', 'Type 25', 'LICENSE345', 'Country 25', 'INS345', '17000.00', 'available'),
(26, 'XYZ678', 'Model 26', 'Brand 26', 2021, 'CHAS678', 'Type 26', 'LICENSE678', 'Country 26', 'INS678', '18000.00', 'available'),
(27, 'ABC901', 'Model 27', 'Brand 27', 2020, 'CHAS901', 'Type 27', 'LICENSE901', 'Country 27', 'INS901', '19000.00', 'available'),
(28, 'DEF234', 'Model 28', 'Brand 28', 2019, 'CHAS234', 'Type 28', 'LICENSE234', 'Country 28', 'INS234', '20000.00', 'available'),
(29, 'GHI567', 'Model 29', 'Brand 29', 2022, 'CHAS567', 'Type 29', 'LICENSE567', 'Country 29', 'INS567', '16000.00', 'available'),
(30, 'JKL890', 'Model 30', 'Brand 30', 2021, 'CHAS890', 'Type 30', 'LICENSE890', 'Country 30', 'INS890', '17000.00', 'available'),
(31, 'MNO123', 'Model 31', 'Brand 31', 2019, 'CHAS123', 'Type 31', 'LICENSE123', 'Country 31', 'INS123', '18000.00', 'available'),
(32, 'PQR456', 'Model 32', 'Brand 32', 2022, 'CHAS456', 'Type 32', 'LICENSE456', 'Country 32', 'INS456', '19000.00', 'available'),
(33, 'STU789', 'Model 33', 'Brand 33', 2020, 'CHAS789', 'Type 33', 'LICENSE789', 'Country 33', 'INS789', '15000.00', 'available'),
(34, 'VWX012', 'Model 34', 'Brand 34', 2021, 'CHAS012', 'Type 34', 'LICENSE012', 'Country 34', 'INS012', '16000.00', 'available'),
(35, 'YZA345', 'Model 35', 'Brand 35', 2019, 'CHAS345', 'Type 35', 'LICENSE345', 'Country 35', 'INS345', '17000.00', 'available');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
