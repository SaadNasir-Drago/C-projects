-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 05:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `uname` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`uname`, `pass`) VALUES
('admin', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE `client_data` (
  `name` text NOT NULL,
  `nid` int(100) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `mobile` int(100) NOT NULL,
  `uname` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`name`, `nid`, `address`, `email`, `mobile`, `uname`, `pass`) VALUES
('saad nasir', 1234567890, 'uttara', 'nasir@gmail.com', 1245678392, 'client123', 'saad12345');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `name` varchar(400) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `mobile` int(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `d_address` varchar(1000) NOT NULL,
  `car` varchar(100) NOT NULL,
  `time` varchar(300) NOT NULL,
  `person` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`name`, `uname`, `pass`, `mobile`, `address`, `d_address`, `car`, `time`, `person`) VALUES
('sdg', 'xddhs', 'esd', 1937368222, 'dsgh', 'sdgsdg', 'Yes', 'Morning_Shift(8AM-12PM)', 3),
('sm hjk', 'sm88990', '11sm00995', 1231423411, 'dhaka', 'kishoreganj', 'Yes', 'Morning_Shift(8AM-12PM)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shifter_data`
--

CREATE TABLE `shifter_data` (
  `name` text NOT NULL,
  `nid` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `gender` text NOT NULL,
  `dob` date DEFAULT NULL,
  `availability` text NOT NULL,
  `uname` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shifter_data`
--

INSERT INTO `shifter_data` (`name`, `nid`, `mobile`, `gender`, `dob`, `availability`, `uname`, `pass`) VALUES
('sadir ahmed', 253627728, 1937368222, 'Male', NULL, 'Morning_Shift(7AM-12PM)', 'shifterz11', 'shifterz11'),
('adnan mahin', 2147483647, 1937368222, 'Male', NULL, 'Afternoon_Shift(1PM-6PM)', 'shifterm22', 'shifterm22'),
('adnan mahmud', 1234567897, 1937368222, '', NULL, '', 'shiftr54', 'shiftr54p'),
('mahin ', 123456789, 1231423411, 'Others', '2001-12-01', 'ti75t78it67', 'ahgdshfju', 'ti75t78it67');

-- --------------------------------------------------------

--
-- Table structure for table `transporter_data`
--

CREATE TABLE `transporter_data` (
  `name` varchar(100) NOT NULL,
  `nid` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `model` varchar(100) NOT NULL,
  `tnumber` varchar(100) NOT NULL,
  `lid` date NOT NULL,
  `led` date NOT NULL,
  `experience` varchar(200) NOT NULL,
  `availability` varchar(200) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transporter_data`
--

INSERT INTO `transporter_data` (`name`, `nid`, `mobile`, `model`, `tnumber`, `lid`, `led`, `experience`, `availability`, `uname`, `pass`) VALUES
('sm bnchdk', 123456782, 1937368222, 'bmw', '2043263-1', '2022-04-17', '2022-04-19', '>5years', 'Afternoon_Shift(1PM-6PM)', 'dfyjtdtyd5', 'ghfthfty6'),
('segsg', 235423, 1937368222, 's', '23542', '2022-04-18', '2022-04-06', '2years', 'Morning_Shift(7AM-12PM)', 'dh', '463345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shifter_data`
--
ALTER TABLE `shifter_data`
  ADD UNIQUE KEY `dob` (`name`,`nid`,`mobile`,`gender`,`availability`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
