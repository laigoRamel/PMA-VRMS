-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 02:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pma-vrms`
--
CREATE DATABASE IF NOT EXISTS `pma-vrms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pma-vrms`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `office`, `type`, `rank`, `username`, `password`, `level`, `flag`) VALUES
(7, '', '', '', 'rank1', '', 'password1', 2, 0),
(8, '', '', '', 'rank1', '', 'password2', 2, 0),
(9, 'Go, Darryl M', 'MP', 'army', 'army3', 'darrylgo', 'password3', 2, 0),
(12, 'Laigo, Ramel L', 'MA2', 'army', 'CPT', 'ramellaigo', '000', 1, 1),
(13, 'Lim, Marc Jaztinn G', 'MA2', 'army', '1LT', 'marcjaztinn', 'password5', 1, 1),
(14, 'Mang-osan, Alvy Blaine K', 'MA2', 'navy', '2LT', 'alvymangosan', 'password6', 1, 1),
(15, 'Odcheo, Joris Karl B', 'MA2', 'navy', 'MAJ', 'jorisodcheo', 'password7', 3, 1),
(16, 'Ulat, Kriss Ford J', 'MA2', 'air force', 'MAJ', 'krissulat', 'password8', 3, 1),
(17, ',  ', '', '', '', '', '', 2, 0),
(18, 'Man-osan, Alvy Zuca', 'Deans Office', '', 'Major General', 'alvy', 'alvy', 2, 0),
(19, 'Ugnasi, Boni Bumakil', 'Engineering Dept', '', 'General', 'boni', 'boni', 2, 0),
(20, 'Ugnasi, Boni Bumakil', 'Engineering Dept', 'army', 'General', 'boni', 'boni', 2, 0),
(21, 'asdsad, asdsad asbbbb', 'asd', 'navy', 'navy2', '111123', 'asdasd', 2, 0),
(22, '222, 222 222', '2222', 'air force', 'air3', '111', '222', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE IF NOT EXISTS `admin_logs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `curr_date` date NOT NULL,
  `curr_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_pending_accounts`
--

CREATE TABLE IF NOT EXISTS `admin_pending_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_initial` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'user1', 'password1'),
(2, 'user2', 'password2'),
(3, 'user3', 'password3');

-- --------------------------------------------------------

--
-- Table structure for table `client_log`
--

CREATE TABLE IF NOT EXISTS `client_log` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `plateNum` varchar(7) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `dateIn` date NOT NULL,
  `timein` time NOT NULL,
  `dateOut` date NOT NULL,
  `timeout` time NOT NULL,
  `type` varchar(15) NOT NULL,
  `licenseNo` varchar(11) NOT NULL,
  `details` varchar(300) NOT NULL,
  `flag` int(11) NOT NULL,
  `vid` varchar(10) NOT NULL,
  `pIN` varchar(50) NOT NULL,
  `pOUT` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `client_log`
--

INSERT INTO `client_log` (`tid`, `plateNum`, `owner`, `dateIn`, `timein`, `dateOut`, `timeout`, `type`, `licenseNo`, `details`, `flag`, `vid`, `pIN`, `pOUT`) VALUES
(9, 'CRN701', 'Gene Zafra', '2016-03-13', '00:29:31', '2016-03-13', '01:21:23', 'Registered', '', '', 0, '', '', ''),
(12, 'AEV850', '', '2016-03-13', '01:24:06', '2016-03-13', '01:27:33', 'Visitor', '', '', 0, '', '', ''),
(13, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '13:08:05', '2016-03-13', '15:41:16', 'Visitor', '', '', 0, '', '', ''),
(14, 'CRN701', 'Gene Zafra', '2016-03-13', '17:39:33', '2016-03-13', '19:19:57', 'Registered', '', '', 0, '', '', ''),
(15, 'ACS511', 'pendong', '2016-03-13', '17:42:23', '2016-03-13', '20:38:00', 'Visitor', '', '', 0, '', '', ''),
(16, 'AAA0000', 'gene', '2016-03-13', '19:05:04', '2016-04-22', '17:53:21', 'Visitor', '', '', 0, '', '', 'admin'),
(17, 'CRN701', 'Gene Zafra', '2016-03-13', '19:20:20', '2016-04-10', '21:00:02', 'Registered', '', '', 0, '', '', 'admin'),
(18, 'CT1890', 'Raphael Zafra', '2016-04-10', '17:54:23', '2016-04-10', '17:57:10', 'Registered', '', '', 0, '', '', ''),
(19, 'CT1890', 'R', '2016-04-10', '17:58:20', '2016-04-10', '18:13:19', 'Registered', '', '', 0, '', '', ''),
(20, 'ABC121', 'R', '2016-04-10', '18:09:38', '0000-00-00', '00:00:00', 'Registered', '', '', 1, '', '', ''),
(22, 'ABC1234', 'gene', '2016-04-10', '19:56:21', '2016-04-21', '22:39:32', 'Visitor', 'a2345678901', 'black, lancer, 4 people, mitsubishi', 0, '', 'admin', 'admin'),
(23, 'AAA1111', 'gene', '2016-04-13', '09:28:06', '2016-04-13', '09:35:26', 'Visitor', 'a1111111111', 'black lancer', 0, 'V001', 'admin', 'admin'),
(24, 'CRN701', 'Gene Zafra', '2016-04-13', '11:19:20', '2016-04-21', '22:37:18', 'Registered', '', '', 0, '', 'admin', 'admin'),
(25, 'AAA1111', 'RAMEL', '2016-04-18', '11:06:18', '2016-04-18', '11:08:23', 'Visitor', 'A4654564561', 'ASDASDASD', 0, 'V001', 'admin', 'admin'),
(26, 'QWE321', 'alvy', '2016-04-18', '11:11:38', '2016-04-18', '11:19:19', 'Visitor', 'b0000000000', 'sedan', 0, 'V001', 'admin', 'admin'),
(27, 'AAA111', 'Gene Zafra', '2016-04-21', '22:42:17', '2016-04-21', '22:53:02', 'Visitor', 'A0111456616', 'Black Toyota Vios', 0, 'V001', 'admin', 'admin'),
(29, 'XYZ123', 'Marc Lim', '2016-04-21', '22:55:47', '2016-04-21', '23:29:03', 'Visitor', 'A0177777777', 'Red Honda', 0, 'V002', 'admin', 'admin'),
(30, 'AAA111', 'Gene Zafra', '2016-04-21', '22:56:48', '2016-04-22', '01:28:21', 'Visitor', 'A0188888888', 'Black Toyota Vios', 0, 'V003', 'admin', 'admin'),
(31, 'CRN701', 'Gene Zafra', '2016-04-21', '23:04:19', '0000-00-00', '00:00:00', 'Registered', '', '', 1, '', 'admin', ''),
(32, 'AAA777', 'Gene Raphael Zafra', '2016-04-21', '23:31:29', '2016-04-21', '23:32:35', 'Visitor', 'A0111111111', 'Black Mitsubishi\r\n', 0, 'V002', 'admin', 'admin'),
(33, 'ABC555', 'Drew Barry', '2016-04-22', '00:44:34', '2016-04-22', '17:54:54', 'Visitor', 'A1234567890', 'Black Fortuner', 0, 'V002', 'admin', 'admin'),
(34, 'AAA111', 'Gene Zafra', '2016-04-22', '01:32:43', '0000-00-00', '00:00:00', 'Visitor', 'A0188888888', 'Hello', 1, 'V003', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `client_records`
--

CREATE TABLE IF NOT EXISTS `client_records` (
  `plateNo` varchar(7) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`plateNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_records`
--

INSERT INTO `client_records` (`plateNo`, `owner`, `remarks`) VALUES
('CRN701', 'Gene Zafra', '');

-- --------------------------------------------------------

--
-- Table structure for table `client_report`
--

CREATE TABLE IF NOT EXISTS `client_report` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `plateNum` varchar(7) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `lic` varchar(15) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `violation` text NOT NULL,
  `type` varchar(15) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `client_report`
--

INSERT INTO `client_report` (`rid`, `plateNum`, `owner`, `lic`, `datein`, `timein`, `violation`, `type`, `flag`) VALUES
(1, 'AEV850', 'Gene Raphael Zafra', 'A0111111111', '2016-03-13', '15:06:11', 'overspeeding', 'Visitor', 0),
(2, 'AEV850', 'Gene Raphael Zafra', 'A0111111111', '2016-03-13', '15:16:58', 'overspeeding', 'Visitor', 0),
(3, 'AEV850', 'Gene Raphael Zafra', 'A0111111111', '2016-03-13', '15:17:11', 'no parking', 'Visitor', 0),
(4, 'QWE321', 'alvy', '', '2016-04-18', '11:12:24', 'overspeeding', 'Visitor', 0),
(5, 'AAA111', 'Gene Zafra', '', '2016-04-21', '22:42:58', 'no parking', 'Visitor', 0),
(6, 'AAA111', 'Gene Zafra', '', '2016-04-21', '22:44:34', 'overspeeding', 'Visitor', 0),
(8, 'CRN701', 'Gene Zafra', '', '2016-04-21', '23:04:42', 'no parking', 'Registered', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_userlog`
--

CREATE TABLE IF NOT EXISTS `client_userlog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `dateout` date NOT NULL,
  `timeout` time NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `client_userlog`
--

INSERT INTO `client_userlog` (`logid`, `username`, `datein`, `timein`, `dateout`, `timeout`, `flag`) VALUES
(1, 'admin', '2016-03-13', '15:57:51', '0000-00-00', '00:00:00', 0),
(2, 'admin', '2016-03-13', '15:59:50', '0000-00-00', '00:00:00', 0),
(3, 'admin', '2016-03-13', '16:01:33', '2016-03-13', '16:02:05', 0),
(4, 'admin', '2016-03-13', '16:20:45', '2016-03-13', '17:45:44', 0),
(5, 'admin', '2016-03-13', '17:45:56', '2016-03-13', '16:47:26', 0),
(6, 'admin', '2016-03-13', '19:04:23', '2016-03-13', '20:30:41', 0),
(7, 'admin', '2016-03-13', '20:34:14', '2016-04-18', '10:40:31', 0),
(8, 'admin', '2016-04-10', '09:38:42', '2016-04-18', '10:40:31', 0),
(9, 'admin', '2016-04-10', '16:29:50', '2016-04-18', '10:40:31', 0),
(10, 'admin', '2016-04-10', '20:08:20', '2016-04-18', '10:40:31', 0),
(11, 'admin', '2016-04-11', '11:26:01', '2016-04-18', '10:40:31', 0),
(12, 'admin', '2016-04-11', '11:29:44', '2016-04-18', '10:40:31', 0),
(13, 'admin', '2016-04-11', '12:31:18', '2016-04-18', '10:40:31', 0),
(14, 'admin', '2016-04-11', '23:35:17', '2016-04-18', '10:40:31', 0),
(15, 'admin', '2016-04-12', '20:28:44', '2016-04-18', '10:40:31', 0),
(16, 'admin', '2016-04-12', '20:29:06', '2016-04-18', '10:40:31', 0),
(17, 'admin', '2016-04-12', '22:44:14', '2016-04-18', '10:40:31', 0),
(18, 'admin', '2016-04-13', '08:44:20', '2016-04-18', '10:40:31', 0),
(19, 'admin', '2016-04-13', '10:37:34', '2016-04-18', '10:40:31', 0),
(20, 'admin', '2016-04-18', '10:39:15', '2016-04-18', '10:40:31', 0),
(21, 'admin', '2016-04-18', '10:40:38', '2016-04-18', '10:40:41', 0),
(22, 'admin', '2016-04-18', '10:40:48', '2016-04-18', '11:19:33', 0),
(23, 'admin', '2016-04-21', '19:48:54', '2016-04-22', '00:08:29', 0),
(24, 'admin', '2016-04-22', '00:08:34', '2016-04-22', '00:08:38', 0),
(25, 'admin', '2016-04-22', '00:17:57', '2016-04-22', '00:18:19', 0),
(26, 'admin', '2016-04-22', '00:19:07', '2016-04-22', '00:19:12', 0),
(27, 'admin', '2016-04-22', '00:19:46', '2016-04-22', '00:19:50', 0),
(28, 'admin', '2016-04-22', '00:40:20', '2016-04-22', '05:12:18', 0),
(29, 'admin', '2016-04-22', '05:11:54', '2016-04-22', '05:12:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_users`
--

CREATE TABLE IF NOT EXISTS `client_users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_users`
--

INSERT INTO `client_users` (`username`, `password`, `flag`) VALUES
('admin', '5f4dcc3b5aa765d61d8327deb882cf99', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_visitorpass`
--

CREATE TABLE IF NOT EXISTS `client_visitorpass` (
  `vid` varchar(10) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_visitorpass`
--

INSERT INTO `client_visitorpass` (`vid`, `flag`) VALUES
('V001', 1),
('V002', 0),
('V003', 1),
('V004', 0),
('V005', 0),
('V006', 0),
('V007', 0),
('V008', 0),
('V009', 0),
('V010', 0),
('V011', 0),
('V012', 0),
('V013', 0),
('V014', 0),
('V015', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form1_applicantpd`
--

CREATE TABLE IF NOT EXISTS `form1_applicantpd` (
  `a_applicantId` int(11) NOT NULL AUTO_INCREMENT,
  `a_profile` varchar(255) NOT NULL,
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
  `a_dateRegistered` datetime NOT NULL,
  `a_placeRegistered` varchar(65) NOT NULL,
  `a_renew_status` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`a_applicantId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `form2_militarypd`
--

CREATE TABLE IF NOT EXISTS `form2_militarypd` (
  `m_militaryId` int(11) NOT NULL AUTO_INCREMENT,
  `m_profile` varchar(255) NOT NULL,
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
  `m_dateRegistered` datetime NOT NULL,
  `m_placeRegistered` varchar(65) NOT NULL,
  `m_renew_status` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`m_militaryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_information`
--

CREATE TABLE IF NOT EXISTS `vehicle_information` (
  `vehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `wheels` varchar(15) NOT NULL,
  `vehicleMake` varchar(60) NOT NULL,
  `plateNo` varchar(60) NOT NULL,
  `yearModel` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `motorNo` varchar(60) NOT NULL,
  `chassisNo` varchar(60) NOT NULL,
  `stickerNo` varchar(60) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `driver_type` varchar(255) NOT NULL,
  `status` enum('active','inactive','transferred','destroyed') NOT NULL DEFAULT 'active',
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`vehicleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
