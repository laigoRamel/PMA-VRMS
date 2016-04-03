-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 05:31 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pma-vrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

DROP TABLE IF EXISTS `admin_logs`;
CREATE TABLE IF NOT EXISTS `admin_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `time_in`, `time_out`, `user_id`) VALUES
(2, '2016-03-13 20:10:45', '0000-00-00 00:00:00', 2),
(4, '2016-03-13 20:11:33', '2016-03-13 20:11:40', 2),
(5, '2016-03-13 20:12:05', '2016-03-13 20:12:12', 2),
(8, '2016-03-13 20:14:01', '2016-03-13 20:14:20', 2),
(10, '2016-03-13 20:52:53', '2016-03-13 20:52:57', 2),
(11, '2016-03-13 20:53:03', '2016-03-13 20:55:02', 2),
(14, '2016-03-13 20:59:36', '2016-03-13 21:00:20', 1),
(16, '2016-03-13 21:13:04', '2016-03-13 21:13:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_pending_accounts`
--

DROP TABLE IF EXISTS `admin_pending_accounts`;
CREATE TABLE IF NOT EXISTS `admin_pending_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_initial` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'user1', 'password1'),
(2, 'user2', 'password2');

-- --------------------------------------------------------

--
-- Table structure for table `form1_applicantpd`
--

DROP TABLE IF EXISTS `form1_applicantpd`;
CREATE TABLE IF NOT EXISTS `form1_applicantpd` (
  `a_applicantId` int(11) NOT NULL AUTO_INCREMENT,
  `a_lastname` varchar(60) NOT NULL,
  `a_firstname` varchar(60) NOT NULL,
  `a_middlename` varchar(60) NOT NULL,
  `a_address` varchar(60) NOT NULL,
  `a_occupation` varchar(60) NOT NULL,
  `a_officeAddress` varchar(60) NOT NULL,
  `a_driversLicense` varchar(60) NOT NULL,
  `a_expirationDate` varchar(60) NOT NULL,
  `a_class` varchar(60) NOT NULL,
  `a_submitted_requirements` varchar(255) NOT NULL,
  `a_status` varchar(255) NOT NULL,
  `a_vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`a_applicantId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1_applicantpd`
--

INSERT INTO `form1_applicantpd` (`a_applicantId`, `a_lastname`, `a_firstname`, `a_middlename`, `a_address`, `a_occupation`, `a_officeAddress`, `a_driversLicense`, `a_expirationDate`, `a_class`, `a_submitted_requirements`, `a_status`, `a_vehicle_id`) VALUES
(1, 'Laigo', 'Ramel', 'L', 'Baguio City', 'Student', 'Baguio City', '234234', 'today', 'Class A', '5,3,1,', 'pending', 1),
(2, 'Mang-osan', 'Alvy', 'B', 'Baguio City', 'Student', 'Baguio City', '43534', 'Today', 'Class B', '5,4,3,2,1,', 'registered', 2),
(3, 'zafra', 'gene', '', '', '', '', '', '', 'Class C', '2,1,', 'pending', 5),
(4, 'catalan', 'marko', '', '', '', '', '', '', 'Class A', '5,4,3,2,1,', 'registered', 6);

-- --------------------------------------------------------

--
-- Table structure for table `form2_militarypd`
--

DROP TABLE IF EXISTS `form2_militarypd`;
CREATE TABLE IF NOT EXISTS `form2_militarypd` (
  `m_militaryId` int(11) NOT NULL AUTO_INCREMENT,
  `m_lastname` varchar(60) NOT NULL,
  `m_firstname` varchar(60) NOT NULL,
  `m_middlename` varchar(60) NOT NULL,
  `m_rank` varchar(60) NOT NULL,
  `m_brSvc` varchar(60) NOT NULL,
  `m_afpsn` varchar(60) NOT NULL,
  `m_residenceAddress` varchar(60) NOT NULL,
  `m_residenceTelNo` varchar(60) NOT NULL,
  `m_emailAddress` varchar(60) NOT NULL,
  `m_mobileNo` varchar(60) NOT NULL,
  `m_designatedOffice` varchar(60) NOT NULL,
  `m_officeTelNo` varchar(60) NOT NULL,
  `m_officeAddress` varchar(60) NOT NULL,
  `m_retirementDate` varchar(60) NOT NULL,
  `m_class` varchar(10) NOT NULL,
  `m_submitted_requirements` varchar(255) NOT NULL,
  `m_status` varchar(255) NOT NULL,
  `m_vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`m_militaryId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2_militarypd`
--

INSERT INTO `form2_militarypd` (`m_militaryId`, `m_lastname`, `m_firstname`, `m_middlename`, `m_rank`, `m_brSvc`, `m_afpsn`, `m_residenceAddress`, `m_residenceTelNo`, `m_emailAddress`, `m_mobileNo`, `m_designatedOffice`, `m_officeTelNo`, `m_officeAddress`, `m_retirementDate`, `m_class`, `m_submitted_requirements`, `m_status`, `m_vehicle_id`) VALUES
(1, 'Ulat', 'Kris', 'U', 'General', 'asdsad', '3423', 'Baguio City', '32423', 'Ulat@email.com', '433', 'Ofice 1', '223432', 'Baguio City', 'Today', 'Class C', '4,3,1,', 'pending', 3),
(2, 'Odcheo', 'Joris', 'O', 'General', '342', '23423', 'Cebu', '342', 'Joris@email.com', '32423', 'Ofice2', '23423', 'Cebu', 'Tomorrow', 'Class A', '5,4,3,2,1,', 'registered', 4);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `plateNum` varchar(7) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `dateIn` date NOT NULL,
  `timein` time NOT NULL,
  `dateOut` date NOT NULL,
  `timeout` time NOT NULL,
  `type` varchar(15) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`tid`, `plateNum`, `owner`, `dateIn`, `timein`, `dateOut`, `timeout`, `type`, `flag`) VALUES
(3, 'crn701', 'Gene Zafra', '2016-03-12', '14:25:33', '0000-00-00', '14:53:41', 'Registered', 0),
(4, 'aev850', 'Gene', '2016-03-12', '14:25:57', '0000-00-00', '14:56:07', 'Visitor', 0),
(5, 'crn701', 'Gene Zafra', '2016-03-12', '15:11:39', '0000-00-00', '15:15:13', 'Registered', 0),
(6, 'crn701', 'Gene Zafra', '2016-03-12', '21:41:35', '0000-00-00', '00:11:41', 'Registered', 0),
(8, 'AEV850', 'Gene', '2016-03-12', '23:43:20', '0000-00-00', '00:09:19', 'Visitor', 0),
(9, 'CRN701', 'Gene Zafra', '2016-03-13', '00:29:31', '2016-03-13', '01:21:23', 'Registered', 0),
(10, 'AEV850', 'Raphael', '2016-03-13', '00:31:42', '0000-00-00', '00:34:21', 'Visitor', 0),
(11, 'AEV850', 'Raphael', '2016-03-13', '00:50:53', '0000-00-00', '00:00:00', 'Visitor', 0),
(12, 'AEV850', '', '2016-03-13', '01:24:06', '2016-03-13', '01:27:33', 'Visitor', 0),
(13, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '13:08:05', '2016-03-13', '15:41:16', 'Visitor', 0),
(14, 'CRN701', 'Gene Zafra', '2016-03-13', '17:39:33', '0000-00-00', '00:00:00', 'Registered', 1),
(15, 'ACS511', 'pendong', '2016-03-13', '17:42:23', '0000-00-00', '00:00:00', 'Visitor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `plateNo` varchar(7) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`plateNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`plateNo`, `owner`, `remarks`) VALUES
('CRN701', 'Gene Zafra', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration_type`
--

DROP TABLE IF EXISTS `registration_type`;
CREATE TABLE IF NOT EXISTS `registration_type` (
  `registration_typeId` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`registration_typeId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_type`
--

INSERT INTO `registration_type` (`registration_typeId`, `type`, `amount`) VALUES
(1, 'A', 200),
(2, 'B', 300),
(3, 'C', 400);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `plateNum` varchar(7) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `violation` text NOT NULL,
  `type` varchar(15) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `plateNum`, `owner`, `datein`, `timein`, `violation`, `type`, `flag`) VALUES
(1, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:06:11', 'overspeeding', 'Visitor', 0),
(2, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:16:58', 'overspeeding', 'Visitor', 0),
(3, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:17:11', 'no parking', 'Visitor', 0),
(5, 'CRN701', 'Gene Zafra', '2016-03-13', '20:17:47', 'over speeding', 'Registered', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
CREATE TABLE IF NOT EXISTS `requirements` (
  `requirements_Id` int(11) NOT NULL AUTO_INCREMENT,
  `requirements_list` varchar(130) NOT NULL,
  PRIMARY KEY (`requirements_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`requirements_Id`, `requirements_list`) VALUES
(1, 'Photocopy of current military ID, Office ID, or driver''s license'),
(2, 'Photocopy of retirement/separation/discharged order for former military personnel'),
(3, 'Photocopy of order for Commissionship/Enlistment for AFP Reservists'),
(4, 'Photocopy of latest appointment order for AFP civilian employees and DND organic personnel'),
(5, 'Photocopy of marriage contract, in case the vehicle is registered in the name of the non-military spouse');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `dateout` date NOT NULL,
  `timeout` time NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`logid`, `username`, `datein`, `timein`, `dateout`, `timeout`, `flag`) VALUES
(1, 'admin', '2016-03-13', '15:57:51', '0000-00-00', '00:00:00', 0),
(2, 'admin', '2016-03-13', '15:59:50', '0000-00-00', '00:00:00', 0),
(3, 'admin', '2016-03-13', '16:01:33', '2016-03-13', '16:02:05', 0),
(4, 'admin', '2016-03-13', '16:20:45', '2016-03-13', '17:45:44', 0),
(5, 'admin', '2016-03-13', '17:45:56', '2016-03-13', '16:47:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userNo` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`userNo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userNo`, `username`, `password`, `flag`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_information`
--

DROP TABLE IF EXISTS `vehicle_information`;
CREATE TABLE IF NOT EXISTS `vehicle_information` (
  `vehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleMake` varchar(60) NOT NULL,
  `plateNo` varchar(60) NOT NULL,
  `yearModel` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `motorNo` varchar(60) NOT NULL,
  `chassisNo` varchar(60) NOT NULL,
  `stickerNo` varchar(60) NOT NULL,
  PRIMARY KEY (`vehicleId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`vehicleId`, `vehicleMake`, `plateNo`, `yearModel`, `color`, `motorNo`, `chassisNo`, `stickerNo`) VALUES
(1, 'Honda', '3434543', '2016', 'red', 'Honda', '3423', '23432'),
(2, 'Toyota', '234234', '2015', 'Blue', '3423', '23432', '23432'),
(3, 'Honda', '43534', '2013', 'Black', '23432', '342342', '234324'),
(4, 'Mitsu', '32423', '2010', 'red', 'Mitsu', '23432', '3434'),
(5, '000000000000', '', '', '', '', '', ''),
(6, 'qwerty', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
