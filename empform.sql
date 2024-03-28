-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 02:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut`
--

-- --------------------------------------------------------

--
-- Table structure for table `empform`
-- 

CREATE TABLE `empform` (
  `Name` varchar(11) NOT NULL,
  `IPAddress` varchar(900) NOT NULL,
  `Foundationnumber` int(30) NOT NULL,
  `Date` date(10) NOT NULL,
  `Phonenumber` varchar(10) NOT NULL,
  `Timein` time NOT NULL,
  `Timeout` time NOT NULL

) 

--
-- Dumping data for table `empform`
--

INSERT INTO `empform` (`Username`, `IPAdress`, `Foundationnumber`, `Date`,`Phonenumber`,`Timein`,`Timeout` ) VALUES
('Vanitha', '127.0.0.0', 12, 12.12.12, '9385263627' , 1.11, 12.12 );
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
