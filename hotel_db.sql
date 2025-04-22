-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2024 at 04:34 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin'),
(3, 'ram', 'ram', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `guest_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`) VALUES
(1, 'vaichi', 'rao', 'a b', 'tth', '9988776655'),
(2, 'ram', 'g', 'c', 'avb', '2233445566'),
(3, 'varsha', 's', 'poojary', 'xxx', '789'),
(9, 'teena', '-', 'a', 'ssd', '1234'),
(10, 'abc', 'fg', 'bf', 'sgs', '1214'),
(12, 'gv', 'f', 'd', 'dsdg', '57342'),
(23, 'suma', 'a', 'g', 'dont', '2233441144'),
(24, 'suma', 'a', 'g', 'dont', '2233441144'),
(25, 'suma', 'a', 'g', 'dont', '2233441144'),
(26, 'suma', 'a', 'g', 'dont', '2233441144'),
(27, 'ram', 'g', 'c', 'avb', '2233445566'),
(28, 'suma', 'a', 'g', 'dont', '1233211231'),
(29, 'suma', 'a', 'g', 'dont', '789'),
(30, 'suma', 'a', 'g', 'dont', '789'),
(31, 'suma', 'a', 'g', 'dont', '789'),
(32, 'suma', 'a', 'g', 'dont', '789'),
(33, 'vv', 'v', 'v', 'df', '1233211232'),
(34, 'suma', 'a', 'g', 'dont', '1233211232'),
(35, 'suma', 'a', 'g', 'dont', '1233211232'),
(36, 'suma', 'a', 'g', 'dont', '1233211232'),
(37, 'suma', 'a', 'g', 'dont', '1233211232'),
(38, 'suma', 'a', 'g', 'dont', '1233211232'),
(39, 'suma', 'a', 'g', 'dont', '1233211232'),
(40, 'suma', 'a', 'g', 'dont', '1233211232'),
(41, 'suma', 'a', 'g', 'dont', '1233211232'),
(42, 'suma', 'a', 'g', 'dont', '1233211232'),
(43, 'suma', 'a', 'g', 'dont', '1233211232'),
(44, 'suma', 'a', 'g', 'dont', '1233211232'),
(45, 'suma', 'a', 'g', 'dont', '1233211232'),
(46, 'suma', 'a', 'g', 'dont', '789'),
(47, 'suma', 'a', 'g', 'dont', '789'),
(48, 'suma', 'a', 'g', 'dont', '789'),
(49, 'suma', 'a', 'g', 'dont', '789'),
(50, 'suma', 'a', 'g', 'dont', '789'),
(51, 'suma', 'a', 'g', 'dont', '789'),
(52, 'suma', 'a', 'g', 'dont', '789'),
(53, 'suma', 'a', 'g', 'dont', '789'),
(54, 'suma', 'a', 'g', 'dont', '789'),
(55, 'suma', 'a', 'g', 'dont', '789'),
(56, 'suma', 'a', 'g', 'dont', '789'),
(57, 'suma', 'a', 'g', 'dont', '789'),
(58, 'suma', 'a', 'g', 'dont', '789'),
(59, 'suma', 'a', 'g', 'dont', '789'),
(60, 'suma', 'a', 'g', 'dont', '789'),
(61, 'suma', 'a', 'g', 'dont', '789'),
(62, 'suma', 'a', 'g', 'dont', '789'),
(63, 'suma', 'a', 'g', 'dont', '789'),
(64, 'suma', 'a', 'g', 'dont', '789'),
(65, 'suma', 'a', 'g', 'dont', '789'),
(66, 'suma', 'a', 'g', 'dont', '789'),
(67, 'suma', 'a', 'g', 'dont', '789'),
(68, 'reena', 'v', 'john', 'america', '1234432112'),
(69, 'w', 'w', 'w', 'www', '1212121212'),
(70, 'w', 'w', 'w', 'www', '1212121212'),
(71, 'w', 'w', 'w', 'www', '1212121212'),
(72, 'suma', 'a', 'g', 'dont', '2233445566'),
(73, 'suma', 'a', 'g', 'dont', '2233445566'),
(74, 'suma', 'a', 'g', 'dont', '2233445566'),
(75, 'suma', 'a', 'g', 'dont', '2233445566'),
(76, 'suma', 'a', 'g', 'dont', '2233445566'),
(77, 'suma', 'a', 'g', 'dont', '2233445566'),
(78, 'suma', 'a', 'g', 'dont', '2233445566'),
(79, 'suma', 'a', 'g', 'dont', '2233445566'),
(80, 'suma', 'a', 'g', 'dont', '2233445566'),
(81, 'v', 'a', 'b', 'mnvhg', '1212121212'),
(82, 'w', 'w', 'w', 'www', '1212121212'),
(83, 'w', 'w', 'w', 'www', '1212121212'),
(84, 'suma', 'a', 'g', 'dont', '2233441144'),
(85, 'suma', 'a', 'g', 'dont', '1233211231');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `hall_id` int NOT NULL AUTO_INCREMENT,
  `hall_type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `photo` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`hall_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_type`, `price`, `photo`) VALUES
(1, 'Wedding', '10000', '12.jpg'),
(2, 'Conference', '3000', '8.jpg'),
(3, 'Conference', '4500', '2.jpg'),
(5, 'Wedding', '6500', '7.jpg'),
(6, 'Party', '2000', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `htransaction`
--

DROP TABLE IF EXISTS `htransaction`;
CREATE TABLE IF NOT EXISTS `htransaction` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `guest_id` int NOT NULL,
  `hall_type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hall_id` int NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `days` int NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `htransaction`
--

INSERT INTO `htransaction` (`transaction_id`, `guest_id`, `hall_type`, `hall_id`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(5, 28, 'Wedding', 1, 'NotAvailable', 1, '2024-06-19', '00:00:00', '2024-06-20', '00:00:00', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`) VALUES
(1, 'Superior', '3000', '1.jpg'),
(2, 'Superior', '2400', '3.jpg'),
(3, 'Super Deluxe', '2800', '4.jpg'),
(4, 'Jr. Suite', '3800', '5.jpg'),
(5, 'Executive Suite', '5500', '6.jpg'),
(9, 'Standard', '5666', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `guest_id` int NOT NULL,
  `room_id` int NOT NULL,
  `room_no` int NOT NULL,
  `extra_bed` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(1, 1, 1, 1, 1, 'Check Out', 1, '2024-05-11', '13:17:12', '2024-05-05', '13:24:41', '2800'),
(2, 2, 6, 1, 0, 'Check Out', 1, '2024-05-16', '09:28:23', '2024-05-17', '09:29:14', '10000'),
(8, 9, 2, 1, 1, 'Check Out', 1, '2024-06-01', '03:17:17', '2024-05-20', '06:51:22', '3200'),
(10, 10, 3, 2, 1, 'Check In', 1, '2024-06-02', '14:04:23', '2024-05-21', '00:00:00', '3600'),
(11, 12, 2, 4, 1, 'Check In', 1, '2024-06-04', '06:31:03', '2024-06-02', '00:00:00', '3200'),
(52, 69, 2, 1, 0, 'NotAvailable', 1, '2024-06-12', '00:00:00', '2024-06-13', '00:00:00', '2400'),
(53, 81, 2, 4, 3, 'NotAvailable', 6, '2024-06-20', '00:00:00', '2024-06-26', '00:00:00', '16800');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
