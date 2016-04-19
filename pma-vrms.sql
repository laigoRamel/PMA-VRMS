-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 05:20 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE IF NOT EXISTS `admin_logs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `curr_date` date NOT NULL,
  `curr_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `user`, `activity`, `curr_date`, `curr_time`) VALUES
(1, '', 'Registered Go, Daryll Chan.', '2016-04-17', '04:58:56'),
(3, '', 'Registered Pedro, Juanito Pitoy (AFP)', '2016-04-17', '05:31:32'),
(4, '', 'Renewed: ,  ', '2016-04-17', '05:40:44'),
(5, '', 'Renewed: Go, Daryll Chan', '2016-04-17', '05:44:14'),
(6, '', 'Renewed: Pedro, Juanito Pitoy (AFP)', '2016-04-17', '05:48:36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'user1', 'password1'),
(2, 'user2', 'password2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `client_log`
--

INSERT INTO `client_log` (`tid`, `plateNum`, `owner`, `dateIn`, `timein`, `dateOut`, `timeout`, `type`, `licenseNo`, `details`, `flag`, `vid`, `pIN`, `pOUT`) VALUES
(9, 'CRN701', 'Gene Zafra', '2016-03-13', '00:29:31', '2016-03-13', '01:21:23', 'Registered', '', '', 0, '', '', ''),
(12, 'AEV850', '', '2016-03-13', '01:24:06', '2016-03-13', '01:27:33', 'Visitor', '', '', 0, '', '', ''),
(13, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '13:08:05', '2016-03-13', '15:41:16', 'Visitor', '', '', 0, '', '', ''),
(14, 'CRN701', 'Gene Zafra', '2016-03-13', '17:39:33', '2016-03-13', '19:19:57', 'Registered', '', '', 0, '', '', ''),
(15, 'ACS511', 'pendong', '2016-03-13', '17:42:23', '2016-03-13', '20:38:00', 'Visitor', '', '', 0, '', '', ''),
(16, 'AAA0000', 'gene', '2016-03-13', '19:05:04', '0000-00-00', '00:00:00', 'Visitor', '', '', 1, '', '', ''),
(17, 'CRN701', 'Gene Zafra', '2016-03-13', '19:20:20', '2016-04-10', '21:00:02', 'Registered', '', '', 0, '', '', 'admin'),
(18, 'CT1890', 'Raphael Zafra', '2016-04-10', '17:54:23', '2016-04-10', '17:57:10', 'Registered', '', '', 0, '', '', ''),
(19, 'CT1890', 'R', '2016-04-10', '17:58:20', '2016-04-10', '18:13:19', 'Registered', '', '', 0, '', '', ''),
(20, 'ABC121', 'R', '2016-04-10', '18:09:38', '0000-00-00', '00:00:00', 'Registered', '', '', 1, '', '', ''),
(22, 'ABC1234', 'gene', '2016-04-10', '19:56:21', '0000-00-00', '00:00:00', 'Visitor', 'a2345678901', 'black, lancer, 4 people, mitsubishi', 1, '', 'admin', ''),
(23, 'AAA1111', 'gene', '2016-04-13', '09:28:06', '2016-04-13', '09:35:26', 'Visitor', 'a1111111111', 'black lancer', 0, 'V001', 'admin', 'admin'),
(24, 'CRN701', 'Gene Zafra', '2016-04-13', '11:19:20', '0000-00-00', '00:00:00', 'Registered', '', '', 1, '', 'admin', ''),
(25, 'AAA1111', 'RAMEL', '2016-04-18', '11:06:18', '2016-04-18', '11:08:23', 'Visitor', 'A4654564561', 'ASDASDASD', 0, 'V001', 'admin', 'admin'),
(26, 'QWE321', 'alvy', '2016-04-18', '11:11:38', '2016-04-18', '11:19:19', 'Visitor', 'b0000000000', 'sedan', 0, 'V001', 'admin', 'admin');

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
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `violation` text NOT NULL,
  `type` varchar(15) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `client_report`
--

INSERT INTO `client_report` (`rid`, `plateNum`, `owner`, `datein`, `timein`, `violation`, `type`, `flag`) VALUES
(1, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:06:11', 'overspeeding', 'Visitor', 0),
(2, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:16:58', 'overspeeding', 'Visitor', 0),
(3, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:17:11', 'no parking', 'Visitor', 0),
(4, 'QWE321', 'alvy', '2016-04-18', '11:12:24', 'overspeeding', 'Visitor', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
(22, 'admin', '2016-04-18', '10:40:48', '2016-04-18', '11:19:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_users`
--

CREATE TABLE IF NOT EXISTS `client_users` (
  `userNo` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`userNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client_users`
--

INSERT INTO `client_users` (`userNo`, `username`, `password`, `flag`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 0);

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
('V001', 0),
('V002', 0),
('V003', 0),
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
  `a_vehicle_id` int(11) NOT NULL,
  `a_renew_status` int(11) NOT NULL,
  PRIMARY KEY (`a_applicantId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `form1_applicantpd`
--

INSERT INTO `form1_applicantpd` (`a_applicantId`, `a_profile`, `a_lastname`, `a_firstname`, `a_middlename`, `a_address`, `a_occupation`, `a_officeAddress`, `a_driversLicense`, `a_expirationDate`, `a_class`, `a_submitted_requirements`, `a_status`, `a_dateRegistered`, `a_placeRegistered`, `a_vehicle_id`, `a_renew_status`) VALUES
(1, 'Galen-Dudas.png', 'Dudas', 'Galen', 'Nelag', 'Baguio City', 'Driver', 'Fort del Pillar', '1111111111', '2017-01-16', 'Class C', '5,4,3,2,1,', 'registered', '2016-04-12 09:10:11', 'Fort del Pilar', 1, 1),
(2, 'Marcelino-Dubuque.png', 'Dubuque', 'Marcelino', 'Stansbury', 'Baguio City', 'Driver', 'Fort del Pillar', '2222222222', '2018-01-01', 'Class C', '5,4,3,2,1,', 'registered', '2016-04-12 09:12:40', 'Camp Allen', 2, 1),
(3, 'Bradley-Whisler.png', 'Whisler', 'Bradley', 'Dudas', 'Baguio City', 'Employee', 'Fort del Pillar', '3333333333', '2019-12-12', 'Class B', '5,4,3,2,1,', 'registered', '2016-04-12 09:17:04', 'Navy Base', 3, 1),
(4, 'Saran-Madere.png', 'Madere', 'Saran', 'Heist', 'La Trinidad', 'Secretary', 'Fort del Pillar', '4444444444', '2016-12-3', 'Class B', '5,4,3,2,1,', 'registered', '2016-04-12 09:22:45', 'Fort del Pillar', 4, 1),
(5, 'Sheena-Saliba.png', 'Saliba', 'Sheena', 'Alamo', 'Baguio City', 'IT', 'Fort del Pillar', '5555555555', '2017-03-12', 'Class B', '5,4,3,2,1,', 'registered', '2016-04-12 09:26:20', 'Camp Allen', 5, 1),
(6, 'Jonas-Starkweather.png', 'Starkweather', 'Jonas', 'Cole', 'Baguio City', 'Database Administrator', 'Fort del Pillar', '6666666666', '2016-12-25', 'Class B', '3,2,1,', 'pending', '2016-04-12 09:31:51', 'Navy Base', 6, 1),
(7, 'Eugenia-Alamo.png', 'Alamo', 'Eugenia', 'Dowdle', 'La Trinidad', 'Janitor', 'Fort del Pillar', '7777777777', '2017-04-06', 'Class B', '5,4,1,', 'pending', '2016-04-12 09:34:32', 'Fort del Pillar', 7, 1);

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
  `m_vehicle_id` int(11) NOT NULL,
  `m_renew_status` int(11) NOT NULL,
  PRIMARY KEY (`m_militaryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `form2_militarypd`
--

INSERT INTO `form2_militarypd` (`m_militaryId`, `m_profile`, `m_lastname`, `m_firstname`, `m_middlename`, `m_rank`, `m_brSvc`, `m_afpsn`, `m_residenceAddress`, `m_residenceTelNo`, `m_emailAddress`, `m_mobileNo`, `m_designatedOffice`, `m_officeTelNo`, `m_officeAddress`, `m_retirementDate`, `m_class`, `m_submitted_requirements`, `m_status`, `m_dateRegistered`, `m_placeRegistered`, `m_vehicle_id`, `m_renew_status`) VALUES
(1, 'Bernardo-Stansberry.png', 'Stansberry', 'Bernardo', 'Tomson', 'Sergeant', 'xxxxxx', 'xxxxxx', 'Baguio City', 'xxx-xxx-xxx', 'tomson@gmail.com', '09305285214', 'MA2', 'xxx-xxx-xxx', 'Fort del Pillar', '2030-12-04', 'Class A', '5,4,3,2,1,', 'registered', '2016-04-12 09:48:21', 'Fort del Pilar', 8, 1),
(2, 'Davis-Olmo.png', 'Olmo', 'Davis', 'Labar', 'Sergeant', 'xxxxxx', 'xxxxxx', 'Baguio City', 'xxx-xxx-xxx', 'labar@gmail.com', '09125485241', 'ACAD1', 'xxx-xxx-xxx', 'Fort del Pillar', '2016-12-30', 'Class A', '5,4,3,2,1,', 'registered', '2016-04-12 09:54:13', 'Camp Allen', 9, 1),
(3, 'Rico-Ogle.png', 'Ogle', 'Rico', 'Cannaday', 'Lieutenant', 'xxxxxx', 'xxxxxx', 'La Trinidad', 'xxx-xxx-xxx', 'ogle@gmail.com', '09126548654', 'ACAD2', 'xxx-xxx-xxx', 'Fort del Pillar', '2016-04-12', 'Class B', '5,4,3,2,1,', 'registered', '2016-04-12 10:02:48', 'Navy Base', 10, 1),
(4, 'Berry-Sanabria.png', 'Sanabria', 'Berry', 'Tomson', 'Lieutenant', 'xxxxxx', 'xxxxxx', 'Baguio City', 'xxx-xxx-xxx', 'tomson1@gmail.com', '09124565784', 'ACAD6', 'xxx-xxx-xxx', 'Fort del Pillar', '2025-08-9-09', 'Class A', '5,4,3,2,1,', 'registered', '2016-04-12 10:08:09', 'Fort del Pilar', 11, 1),
(5, 'Roderick-Pursel.png', 'Pursel', 'Roderick', 'Stansberry', 'General', 'xxxxxx', 'xxxxxx', 'La Trinidad', 'xxx-xxx-xxx', 'pursel@gmail.com', '09304562154', 'ACAD6', 'xxx-xxx-xxx', 'Fort del Pillar', '2019-04-04', 'Class A', '5,4,3,2,1,', 'registered', '2016-04-12 10:10:43', 'Camp Allen', 12, 1),
(6, 'Marc Jazztin-Lim.png', 'Lim', 'Marc Jazztin', 'Gawe', 'Sergeant', 'xxxxxx', 'xxxxxx', 'Baguio City', 'xxx-xxx-xxx', 'lim@gmail.com', '09451254652', 'Computer Office', 'xxx-xxx-xxx', 'Fort del Pillar', '2016-12-01', 'Class A', '5,4,3,2,1,', 'registered', '2016-04-12 10:13:35', 'Navy Base', 13, 1),
(7, 'Horacio-Desousa.png', 'Desousa', 'Horacio', 'Cannaday', 'Lieutenant', 'xxxxxx', 'xxxxxx', 'Baguio City', 'xxx-xxx-xxx', 'horacio@gmail.com', '09304565871', 'MA2', 'xxx-xxx-xxx', 'Fort del Pillar', '2015-06-09', 'Class B', '2,1,', 'pending', '2016-04-12 10:16:59', 'Fort del Pilar', 14, 1);

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
  PRIMARY KEY (`vehicleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`vehicleId`, `wheels`, `vehicleMake`, `plateNo`, `yearModel`, `color`, `motorNo`, `chassisNo`, `stickerNo`) VALUES
(1, '4-wheeled', 'Jeep', 'abc123', '2007', 'red', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(2, '4-wheeled', 'Jeep', 'def456', '2007', 'blue', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(3, '2-wheeled', 'scooter', 'ghi789', '2006', 'green', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(4, '4-wheeled', 'Ford', 'klm123', '2008', 'pink', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(5, '4-wheeled', 'Ferrari', 'nop456', '2007', 'red', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(6, '4-wheeled', 'Ford', 'qrs789', '2015', 'red', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(7, '2-wheeled', 'scooter', 'tuv123', '2007', 'blue', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(8, '4-wheeled', 'Ford', 'qwe123', '2008', 'brown', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(9, '4-wheeled', 'Honda', 'asd321', '2007', 'navyblue', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(10, '4-wheeled', 'Honda', 'zxc456', '2014', 'blue', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(11, '4-wheeled', 'Ford', 'poi567', '2017', 'yellow', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(12, '4-wheeled', 'Honda', 'fgh523', '2005', 'red', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(13, '4-wheeled', 'Ferrari', 'dfg123', '2016', 'red', 'xxxxxx', 'xxxxxx', 'xxxxxx'),
(14, '4-wheeled', 'Honda', 'ghr234', '2007', 'blue', 'xxxxxx', 'xxxxxx', 'xxxxxx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
