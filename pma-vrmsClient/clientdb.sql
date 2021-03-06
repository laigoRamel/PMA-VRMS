-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 05:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clientdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`tid`, `plateNum`, `owner`, `dateIn`, `timein`, `dateOut`, `timeout`, `type`, `licenseNo`, `details`, `flag`, `vid`, `pIN`, `pOUT`) VALUES
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
(24, 'CRN701', 'Gene Zafra', '2016-04-13', '11:19:20', '0000-00-00', '00:00:00', 'Registered', '', '', 1, '', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

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
-- Table structure for table `report`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `plateNum`, `owner`, `datein`, `timein`, `violation`, `type`, `flag`) VALUES
(1, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:06:11', 'overspeeding', 'Visitor', 0),
(2, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:16:58', 'overspeeding', 'Visitor', 0),
(3, 'AEV850', 'Gene Raphael Zafra', '2016-03-13', '15:17:11', 'no parking', 'Visitor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `dateout` date NOT NULL,
  `timeout` time NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`logid`, `username`, `datein`, `timein`, `dateout`, `timeout`, `flag`) VALUES
(1, 'admin', '2016-03-13', '15:57:51', '0000-00-00', '00:00:00', 0),
(2, 'admin', '2016-03-13', '15:59:50', '0000-00-00', '00:00:00', 0),
(3, 'admin', '2016-03-13', '16:01:33', '2016-03-13', '16:02:05', 0),
(4, 'admin', '2016-03-13', '16:20:45', '2016-03-13', '17:45:44', 0),
(5, 'admin', '2016-03-13', '17:45:56', '2016-03-13', '16:47:26', 0),
(6, 'admin', '2016-03-13', '19:04:23', '2016-03-13', '20:30:41', 0),
(7, 'admin', '2016-03-13', '20:34:14', '0000-00-00', '00:00:00', 1),
(8, 'admin', '2016-04-10', '09:38:42', '0000-00-00', '00:00:00', 1),
(9, 'admin', '2016-04-10', '16:29:50', '0000-00-00', '00:00:00', 1),
(10, 'admin', '2016-04-10', '20:08:20', '0000-00-00', '00:00:00', 1),
(11, 'admin', '2016-04-11', '11:26:01', '0000-00-00', '00:00:00', 1),
(12, 'admin', '2016-04-11', '11:29:44', '0000-00-00', '00:00:00', 1),
(13, 'admin', '2016-04-11', '12:31:18', '0000-00-00', '00:00:00', 1),
(14, 'admin', '2016-04-11', '23:35:17', '0000-00-00', '00:00:00', 1),
(15, 'admin', '2016-04-12', '20:28:44', '0000-00-00', '00:00:00', 1),
(16, 'admin', '2016-04-12', '20:29:06', '0000-00-00', '00:00:00', 1),
(17, 'admin', '2016-04-12', '22:44:14', '0000-00-00', '00:00:00', 1),
(18, 'admin', '2016-04-13', '08:44:20', '0000-00-00', '00:00:00', 1),
(19, 'admin', '2016-04-13', '10:37:34', '0000-00-00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userNo` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`userNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userNo`, `username`, `password`, `flag`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitorpass`
--

CREATE TABLE IF NOT EXISTS `visitorpass` (
  `vid` varchar(10) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorpass`
--

INSERT INTO `visitorpass` (`vid`, `flag`) VALUES
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
