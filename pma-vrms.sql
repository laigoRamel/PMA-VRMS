-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2016 at 04:53 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `office`, `type`, `rank`, `username`, `password`, `level`, `flag`) VALUES
(1, 'Laigo, Ramel L.', 'MA2', 'Army', 'CPT', 'ramellaigo', 'password1', 1, 1),
(2, 'Mang-osan, Alvy Blaine K.', 'MA2', 'Navy', 'CPT', 'alvymangosan', 'password2', 2, 1),
(3, 'Odcheo, Joris Karl B.', 'MA2', 'Air Force', 'General', 'jorisodcheo', 'password3', 3, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `username`, `activity`, `curr_date`, `curr_time`) VALUES
(1, 'ramellaigo', 'Registered: Go, Darryl Lim', '2016-06-10', '10:34:10'),
(2, 'ramellaigo', 'Registered: Macadaeg, Marc Go', '2016-06-10', '10:36:02'),
(3, 'ramellaigo', 'Registered: Macadaeg, Marc Go (from pending)', '2016-06-10', '10:36:18'),
(4, 'ramellaigo', 'Registered: Go, Darryl Lim (from pending)', '2016-06-10', '10:36:18'),
(5, 'ramellaigo', 'Registered: Macadaeg, Marc Go (from pending)', '2016-06-10', '10:36:29'),
(6, 'ramellaigo', 'Registered: Go, Darryl Lim (from pending)', '2016-06-10', '10:36:29'),
(7, 'ramellaigo', 'Registered: Mang Inasal, Juan Miguel (AFP)', '2016-06-10', '10:39:38'),
(8, 'ramellaigo', 'Registered: Aquino, Lebron James (AFP)', '2016-06-10', '10:42:50'),
(9, 'ramellaigo', 'Registered: Macadaeg, Marc Go (from pending)', '2016-06-10', '10:43:00'),
(10, 'ramellaigo', 'Registered: Go, Darryl Lim (from pending)', '2016-06-10', '10:43:00'),
(11, 'ramellaigo', 'Registered: Javillonar, Chris Paul (AFP)', '2016-06-10', '10:45:52'),
(12, 'ramellaigo', 'Registered: Javillonar, Chris Paul (from pending AFP)', '2016-06-10', '10:45:54'),
(13, 'ramellaigo', 'Registered: Macadaeg, Marc Go (from pending)', '2016-06-10', '10:45:55'),
(14, 'ramellaigo', 'Registered: Go, Darryl Lim (from pending)', '2016-06-10', '10:45:55'),
(15, 'ramellaigo', 'Registered: Javillonar, Chris Paul (from pending AFP)', '2016-06-10', '10:45:56'),
(16, 'ramellaigo', 'Registered: Laygo, Rommel Kho (AFP)', '2016-06-10', '10:47:52'),
(17, 'ramellaigo', 'Registered: Laygo, Rommel Kho (from pending AFP)', '2016-06-10', '10:48:01'),
(18, 'ramellaigo', 'Registered: Javillonar, Chris Paul (from pending AFP)', '2016-06-10', '10:48:01'),
(19, 'ramellaigo', 'Registered: Macadaeg, Marc Go (from pending)', '2016-06-10', '10:48:02'),
(20, 'ramellaigo', 'Registered: Go, Darryl Lim (from pending)', '2016-06-10', '10:48:02'),
(21, 'ramellaigo', 'Registered: Odcheo, Steph Curry', '2016-06-10', '10:49:52'),
(22, 'ramellaigo', 'Registered: Diaz, Lovely May', '2016-06-10', '10:51:32'),
(23, 'ramellaigo', 'Registered: Macadaeg, Marc Go (from pending)', '2016-06-10', '10:51:36'),
(24, 'ramellaigo', 'Registered: Go, Darryl Lim (from pending)', '2016-06-10', '10:51:36'),
(25, 'ramellaigo', 'Registered: Laygo, Rommel Kho (from pending AFP)', '2016-06-10', '10:51:37'),
(26, 'ramellaigo', 'Registered: Javillonar, Chris Paul (from pending AFP)', '2016-06-10', '10:51:37');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `amount` int(11) NOT NULL DEFAULT '250',
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`a_applicantId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `form1_applicantpd`
--

INSERT INTO `form1_applicantpd` (`a_applicantId`, `a_profile`, `a_lastname`, `a_firstname`, `a_middlename`, `a_address`, `a_occupation`, `a_officeAddress`, `a_driversLicense`, `a_expirationDate`, `a_class`, `a_submitted_requirements`, `a_status`, `a_dateRegistered`, `a_placeRegistered`, `a_renew_status`, `amount`, `flag`) VALUES
(1, 'Darryl-Go.png', 'Go', 'Darryl', 'Lim', 'Quezon Hill', 'Businessman ', 'Loakan', 'A123456789', '2017-03-03', 'Class B', '3,2,1,', 'pending', '2016-06-10 10:34:10', 'Fort del Pilar', 0, 0, 1),
(2, 'Marc-Macadaeg.png', 'Macadaeg', 'Marc', 'Go', 'Kias', 'Driver', 'Loakan', 'B321654789', '2018-04-02', 'Class C', '5,4,', 'pending', '2016-06-10 10:36:02', 'Navy Base', 0, 0, 1),
(3, 'Steph-Odcheo.png', 'Odcheo', 'Steph', 'Curry', 'camp 7', 'Businessman ', 'Camp Allen', 'K7845136982', '2020-02-25', 'Class C', '5,4,3,2,1,', 'registered', '2016-06-10 10:49:52', 'Fort del Pilar', 1, 250, 1),
(4, 'Lovely-Diaz.png', 'Diaz', 'Lovely', 'May', 'Mines View', 'Businesswoman ', 'Navy base', 'L1547213020', '2017-02-06', 'Class B', '5,4,3,2,1,', 'registered', '2016-06-10 10:51:32', 'Camp Allen', 1, 250, 1);

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
  `amount` int(11) NOT NULL DEFAULT '350',
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`m_militaryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `form2_militarypd`
--

INSERT INTO `form2_militarypd` (`m_militaryId`, `m_profile`, `m_lastname`, `m_firstname`, `m_middlename`, `m_rank`, `m_brSvc`, `m_afpsn`, `m_residenceAddress`, `m_residenceTelNo`, `m_emailAddress`, `m_mobileNo`, `m_designatedOffice`, `m_officeTelNo`, `m_officeAddress`, `m_retirementDate`, `m_class`, `m_submitted_requirements`, `m_status`, `m_dateRegistered`, `m_placeRegistered`, `m_renew_status`, `amount`, `flag`) VALUES
(1, 'Juan-Mang Inasal.png', 'Mang Inasal', 'Juan', 'Miguel', '1LT', 'PA', '9874561231', 'Batak, Ilocos', '4456215', 'miguel@gmail.com', '0321456987', 'MA1', '4458794', 'Loakan', '2020-03-05', 'Class A', '5,4,3,2,1,', 'registered', '2016-06-10 10:39:38', 'Fort del Pilar', 1, 350, 1),
(2, 'Lebron-Aquino.png', 'Aquino', 'Lebron', 'James', 'MSG', 'PAF', '69', 'Km2 La Trinidad', '4226598', 'lebron@gmail.com', '09265471856', '`Commel', '4112652', 'Navy Base', '2019-01-20', 'Class A', '5,4,3,2,1,', 'registered', '2016-06-10 10:42:50', 'Camp Allen', 1, 350, 1),
(3, 'Chris-Javillonar.png', 'Javillonar', 'Chris', 'Paul', 'COL/CAPT', 'AFP', '21', 'New lucban', '4887951', 'Chris@gmail.com', '092116547854', 'MA4', '4236598', 'Camp Allen', '2016-08-15', 'Class A', '3,2,1,', 'pending', '2016-06-10 10:45:52', 'Camp Allen', 0, 0, 1),
(4, 'Rommel-Laygo.png', 'Laygo', 'Rommel', 'Kho', 'SN', 'PN', '80', 'Trancoville', '4279865', 'kho@gmail.com', '09551648753', 'ma3', '4546321', 'Loakan', '2017-07-14', 'Class A', '4,3,', 'pending', '2016-06-10 10:47:52', 'Navy Base', 0, 0, 1);

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
  `decalNo` varchar(255) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `driver_type` varchar(255) NOT NULL,
  `status` enum('active','inactive','transferred','destroyed') NOT NULL DEFAULT 'active',
  `flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vehicleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`vehicleId`, `wheels`, `vehicleMake`, `plateNo`, `yearModel`, `color`, `motorNo`, `chassisNo`, `stickerNo`, `decalNo`, `driver_id`, `driver_type`, `status`, `flag`) VALUES
(1, '4-wheeled', 'Nissan', 'RJU777', '2005', 'Silver', '123456', '654321', '', '', 1, 'applicant', 'active', 1),
(2, '4-wheeled', 'Toyota', 'MNS897', '1994', 'Black', '654785', '852147', '', '', 2, 'applicant', 'active', 1),
(3, '2-wheeled', 'Honda', 'KJH879', '2008', 'Red', '321554', '444533', '', '987456', 1, 'military', 'active', 1),
(4, '4-wheeled', 'Mitsubishi', 'MRK555', '2003', 'Blue', '654111', '111225', '', '788441', 2, 'military', 'active', 1),
(5, '4-wheeled', 'Nissan', 'TYR456', '1997', 'Red', '222155', '888566', '', '', 3, 'military', 'active', 1),
(6, '4-wheeled', 'Honda ', 'REW478', '1991', 'Yellow', '787444', '855000', '', '', 4, 'military', 'active', 1),
(7, '4-wheeled', 'Volvo', 'JRS212', '1999', 'Black', '333211', '111000', '54', '', 3, 'applicant', 'active', 1),
(8, '4-wheeled', 'Scion', 'UUY888', '2006', 'Silver', '654444', '444400', '87', '', 4, 'applicant', 'active', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
