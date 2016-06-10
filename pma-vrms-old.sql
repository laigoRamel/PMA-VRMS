-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 05:33 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `username`, `activity`, `curr_date`, `curr_time`) VALUES
(1, 'ramellaigo', 'Registered: Ferraren, Aristeo Albert', '2016-06-01', '09:31:27'),
(2, 'ramellaigo', 'Registered: Aboc, Janice Aboy', '2016-06-01', '09:35:27'),
(3, 'ramellaigo', 'Registered: Cabrera, Hana Carullo', '2016-06-01', '09:50:40'),
(4, 'ramellaigo', 'Registered: Cabacungan, Kalser Nacos', '2016-06-01', '09:52:37'),
(5, 'ramellaigo', 'Registered: Cansejo, Elly Dilona', '2016-06-01', '09:54:15'),
(6, 'ramellaigo', 'Registered: Dinopol, Roberto Edjec', '2016-06-01', '09:55:36'),
(7, 'ramellaigo', 'Registered: Dinopol, Roberto Edjec (from pending)', '2016-06-01', '09:55:39'),
(8, 'ramellaigo', 'Registered: Dotado, Manuel Sobrevill', '2016-06-01', '09:57:39'),
(9, 'ramellaigo', 'Registered: Duco, Rene Joseph', '2016-06-01', '09:58:56'),
(10, 'ramellaigo', 'Registered: Duco, Rene Joseph (from pending)', '2016-06-01', '09:58:59'),
(11, 'ramellaigo', 'Registered: Dotado, Manuel Sobrevill (from pending)', '2016-06-01', '09:58:59'),
(12, 'ramellaigo', 'Registered: Dinopol, Roberto Edjec (from pending)', '2016-06-01', '09:58:59'),
(13, 'ramellaigo', 'Registered: Dulin, John Clifford', '2016-06-01', '10:00:17'),
(14, 'ramellaigo', 'Registered: Dulin, John Clifford (from pending)', '2016-06-01', '10:00:27'),
(15, 'ramellaigo', 'Registered: Duco, Rene Joseph (from pending)', '2016-06-01', '10:00:27'),
(16, 'ramellaigo', 'Registered: Dotado, Manuel Sobrevill (from pending)', '2016-06-01', '10:00:27'),
(17, 'ramellaigo', 'Registered: Dinopol, Roberto Edjec (from pending)', '2016-06-01', '10:00:27'),
(18, 'ramellaigo', 'Registered: Liamos, Paul Vincent Gonzales (AFP)', '2016-06-01', '10:04:36'),
(19, 'ramellaigo', 'Registered: Maglinao, Jerome Pendon (AFP)', '2016-06-01', '10:06:45'),
(20, 'ramellaigo', 'Registered: Dulin, John Clifford (from pending)', '2016-06-01', '10:47:54'),
(21, 'ramellaigo', 'Registered: Duco, Rene Joseph (from pending)', '2016-06-01', '10:47:54'),
(22, 'ramellaigo', 'Registered: Dotado, Manuel Sobrevill (from pending)', '2016-06-01', '10:47:54'),
(23, 'ramellaigo', 'Registered: Dinopol, Roberto Edjec (from pending)', '2016-06-01', '10:47:54'),
(24, 'ramellaigo', 'Registered: Martinez, Coog Lex (AFP)', '2016-06-01', '10:51:06');

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
  `amount` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`a_applicantId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `form1_applicantpd`
--

INSERT INTO `form1_applicantpd` (`a_applicantId`, `a_profile`, `a_lastname`, `a_firstname`, `a_middlename`, `a_address`, `a_occupation`, `a_officeAddress`, `a_driversLicense`, `a_expirationDate`, `a_class`, `a_submitted_requirements`, `a_status`, `a_dateRegistered`, `a_placeRegistered`, `a_renew_status`, `amount`, `flag`) VALUES
(1, 'Aristeo-Ferraren.png', 'Ferraren', 'Aristeo', 'Albert', '#3 Purok 2 Balsigan Rd. Baguio City', 'Business Man', '#3 Purok 2 Balsigan Rd. Baguio City', 'D0611099385', '2018-03-25', 'Class B', '5,4,3,2,1,', 'registered', '2016-06-01 21:31:27', 'Fort del Pilar', 1, 250, 1),
(2, 'Janice-Aboc.png', 'Aboc', 'Janice', 'Aboy', '23 Asin Road Baguio City', 'Merchant', '23 Fort Del Pilar', 'A4657891598', '2018-05-15', 'Class B', '5,4,3,2,1,', 'registered', '2016-06-01 21:35:27', 'Fort del Pilar', 1, 250, 1),
(3, 'Hana-Cabrera.png', 'Cabrera', 'Hana', 'Carullo', 'Purok 1 Bulanoa, Tabuk City, Kalinga', 'Manager', 'Purok 1 Bulanoa, Tabuk City, Kalinga', 'L1598568753', '2017-01-12', 'Class B', '5,4,3,2,1,', 'registered', '2016-06-01 21:50:40', 'Camp Allen', 1, 250, 1),
(4, 'Kalser-Cabacungan.png', 'Cabacungan', 'Kalser', 'Nacos', 'B. Recto Street, Villamor Air Base, Pasay City', 'Engineer', 'B. Recto Street, Villamor Air Base, Pasay City', 'M5861598743', '2018-06-25', 'Class B', '5,4,3,2,1,', 'registered', '2016-06-01 21:52:37', 'Navy Base', 1, 250, 1),
(5, 'Elly-Cansejo.png', 'Cansejo', 'Elly', 'Dilona', 'Blvd. Ext. Dupax Del Sur, Nueva Vizcaya', 'Accountant', 'Blvd. Ext. Dupax Del Sur, Nueva Vizcaya', 'C5796242861', '2018-05-05', 'Class C', '5,4,3,2,1,', 'registered', '2016-06-01 21:54:15', 'Camp Allen', 1, 250, 1),
(6, 'Roberto-Dinopol.png', 'Dinopol', 'Roberto', 'Edjec', 'Poblacion, Tinglayan Kalinga', 'Architect', 'Poblacion, Tinglayan Kalinga', 'O5289746219', '2019-06-05', 'Class C', '5,4,3,', 'pending', '2016-06-01 21:55:36', 'Navy Base', 0, 0, 1),
(7, 'Manuel-Dotado.png', 'Dotado', 'Manuel', 'Sobrevill', 'Samoki Bontoc, Mountain Province', 'Surveyor', 'Samoki Bontoc, Mountain Province', 'A4892687589', '2019-02-15', 'Class B', '5,4,', 'pending', '2016-06-01 21:57:39', 'Camp Allen', 0, 0, 1),
(8, 'Rene-Duco.png', 'Duco', 'Rene', 'Joseph', 'Zone 2 Sanchez, Asingan, Pangasinan', 'Paediatrician', 'Zone 2 Sanchez, Asingan, Pangasinan', 'M4862895425', '2018-05-09', 'Class C', '5,4,', 'pending', '2016-06-01 21:58:56', 'Navy Base', 0, 0, 1),
(9, 'John-Dulin.png', 'Dulin', 'John', 'Clifford', '46 Purok 10 Upper Pinget, Baguio City', 'Social Worker', '46 Purok 10 Upper Pinget, Baguio City', 'J6548793215', '2018-08-25', 'Class B', '4,3,2,', 'pending', '2016-06-01 22:00:17', 'Camp Allen', 0, 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `form2_militarypd`
--

INSERT INTO `form2_militarypd` (`m_militaryId`, `m_profile`, `m_lastname`, `m_firstname`, `m_middlename`, `m_rank`, `m_brSvc`, `m_afpsn`, `m_residenceAddress`, `m_residenceTelNo`, `m_emailAddress`, `m_mobileNo`, `m_designatedOffice`, `m_officeTelNo`, `m_officeAddress`, `m_retirementDate`, `m_class`, `m_submitted_requirements`, `m_status`, `m_dateRegistered`, `m_placeRegistered`, `m_renew_status`, `amount`, `flag`) VALUES
(1, 'Paul Vincent-Liamos.png', 'Liamos', 'Paul', 'Vincent', 'MSG', 'PA', '216578321', 'Purok 3 Lodlod, Cipa City', '4473210', 'pualvincent@gmail.com', '639985648922', 'Academic', '4483590', 'Fort Del Pilar', '2020-05-25', 'Class B', '5,4,3,2,1,', 'registered', '2016-06-01 22:04:36', 'Fort del Pilar', 1, 350, 1),
(3, 'Coog-Martinez.png', 'Martinez', 'Coog', 'Lex', 'PO2', 'PN', '6549871', 'Fort Del Pilar', '442595', 'lexcoog@gmail.com', '639978964533', 'Fort Del Pilar', '442595', 'Fort Del Pilar', '2018-02-12', 'Class A', '5,4,3,2,1,', 'registered', '2016-06-01 22:51:06', 'Fort del Pilar', 1, 350, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`vehicleId`, `wheels`, `vehicleMake`, `plateNo`, `yearModel`, `color`, `motorNo`, `chassisNo`, `stickerNo`, `decalNo`, `driver_id`, `driver_type`, `status`, `flag`) VALUES
(4, '4-wheeled', 'Isuzu', 'AYN129', '2007', 'Violet', '102932', '123122', '456789', '', 2, 'applicant', 'active', 1),
(5, '4-wheeled', 'Toyota', 'AYT981', '2013', 'Red', '10812501', '102931', '556987', '', 1, 'applicant', 'active', 1),
(6, '4-wheeled', 'Mitsubishi', 'AYT924', '2015', 'Black', '10923412', '234901', '981938', '', 1, 'applicant', 'active', 1),
(7, '4-wheeled', 'Honda', 'AYP586', '2007', 'Red', '45682', '078956', '123856', '', 3, 'applicant', 'active', 1),
(8, '4-wheeled', 'Isuzu', 'AYC924', '2007', 'Red', '284129', '091239', '587369', '', 4, 'applicant', 'active', 1),
(9, '4-wheeled', 'Toyota', 'AYP923', '2007', 'Black', '23894', '021382', '759268', '', 5, 'applicant', 'active', 1),
(10, '4-wheeled', 'Mitsubishi', 'AYZ023', '2006', 'Black', '102382', '092491', '', '', 6, 'applicant', 'active', 1),
(11, '4-wheeled', 'Suzuki', 'AYK923', '2007', 'Red', '092342', '213413', '', '', 7, 'applicant', 'active', 1),
(12, '4-wheeled', 'AH293', 'AYK925', '2006', 'Red', '102384', '128569', '', '', 8, 'applicant', 'active', 1),
(13, '4-wheeled', 'Suzuki', 'AYC293', '2007', 'Black', '234687', '123589', '', '', 9, 'applicant', 'active', 1),
(15, '4-wheeled', 'Toyota', 'AYT291', '1998', 'Black', '541235', '15237', '', '132537', 2, 'military', 'active', 1),
(16, '4-wheeled', 'Mitsubishi', 'AYC292', '2003', 'Red', '129038', '109238', '', '', 1, 'military', 'active', 0),
(17, '4-wheeled', 'Isuzu', 'AYP204', '2003', 'Red', '109238', '1029348', '', '123', 3, 'military', 'active', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
