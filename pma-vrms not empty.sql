-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 06:53 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pma-vrms`
--
CREATE DATABASE IF NOT EXISTS `pma-vrms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pma-vrms`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(100) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `admin_logs` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `curr_date` date NOT NULL,
  `curr_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `username`, `activity`, `curr_date`, `curr_time`) VALUES
(1, 'ramellaigo', 'Registered: a, a a', '2016-05-31', '09:16:14'),
(2, 'ramellaigo', 'Registered: 1, 1 1', '2016-05-31', '09:18:02'),
(3, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:19:57'),
(4, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:26:39'),
(5, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:27:14'),
(6, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:27:38'),
(7, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:28:08'),
(8, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:29:21'),
(9, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:29:40'),
(10, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:30:42'),
(11, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:32:37'),
(12, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:33:03'),
(13, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:33:36'),
(14, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:34:34'),
(15, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:34:56'),
(16, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:36:40'),
(17, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:37:25'),
(18, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:37:48'),
(19, 'ramellaigo', 'Registered: 55, 555 55', '2016-05-31', '09:38:43'),
(20, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:39:36'),
(21, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:43:52'),
(22, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:52:04'),
(23, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:52:24'),
(24, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:53:04'),
(25, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:55:38'),
(26, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:57:07'),
(27, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:57:19'),
(28, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:57:29'),
(29, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:57:56'),
(30, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '09:59:13'),
(31, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:00:11'),
(32, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:02:09'),
(33, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:03:45'),
(34, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:06:44'),
(35, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:08:31'),
(36, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:08:59'),
(37, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:09:29'),
(38, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:10:08'),
(39, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:10:24'),
(40, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:10:38'),
(41, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:17:15'),
(42, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:18:23'),
(43, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:19:21'),
(44, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:20:13'),
(45, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:21:16'),
(46, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:22:51'),
(47, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:26:13'),
(48, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:26:58'),
(49, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:29:25'),
(50, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:30:19'),
(51, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:30:43'),
(52, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:32:05'),
(53, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:34:06'),
(54, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:34:45'),
(55, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:37:08'),
(56, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:38:22'),
(57, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:38:59'),
(58, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:39:28'),
(59, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:42:17'),
(60, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '10:53:47'),
(61, 'ramellaigo', 'Registered: m, m m (AFP)', '2016-05-31', '10:54:48'),
(62, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '10:54:50'),
(63, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '10:56:34'),
(64, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '10:58:57'),
(65, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '10:59:36'),
(66, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:00:36'),
(67, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:01:03'),
(68, 'ramellaigo', 'Registered: 1, 1 1 (from pending)', '2016-05-31', '11:01:10'),
(69, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:01:18'),
(70, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:01:30'),
(71, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:01:53'),
(72, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:02:17'),
(73, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:02:47'),
(74, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:07:07'),
(75, 'ramellaigo', 'Registered: m, m m (from pending AFP)', '2016-05-31', '11:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pending_accounts`
--

CREATE TABLE `admin_pending_accounts` (
  `id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_initial` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `client_log` (
  `tid` int(11) NOT NULL,
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
  `pOUT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `client_records` (
  `plateNo` varchar(7) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `remarks` varchar(500) NOT NULL
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

CREATE TABLE `client_report` (
  `rid` int(11) NOT NULL,
  `plateNum` varchar(7) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `lic` varchar(15) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `violation` text NOT NULL,
  `type` varchar(15) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `client_userlog` (
  `logid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `datein` date NOT NULL,
  `timein` time NOT NULL,
  `dateout` date NOT NULL,
  `timeout` time NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `client_users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL
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

CREATE TABLE `client_visitorpass` (
  `vid` varchar(10) NOT NULL,
  `flag` int(11) NOT NULL
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

CREATE TABLE `form1_applicantpd` (
  `a_applicantId` int(11) NOT NULL,
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
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1_applicantpd`
--

INSERT INTO `form1_applicantpd` (`a_applicantId`, `a_profile`, `a_lastname`, `a_firstname`, `a_middlename`, `a_address`, `a_occupation`, `a_officeAddress`, `a_driversLicense`, `a_expirationDate`, `a_class`, `a_submitted_requirements`, `a_status`, `a_dateRegistered`, `a_placeRegistered`, `a_renew_status`, `amount`, `flag`) VALUES
(1, '1-1.png', '1', '1', '1', '1', '1', '1', '1', '2016-05-27', 'Class B', '5,4,3,', 'pending', '2015-05-31 21:18:02', 'Camp Allen', 0, 250, 1),
(2, '555-555.png', '55555', '555', '55', '5', '5', '5', '5', '2016-05-20', 'Class B', '5,4,3,2,1,', 'registered', '2009-05-31 21:38:43', 'Camp Allen', 1, 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form2_militarypd`
--

CREATE TABLE `form2_militarypd` (
  `m_militaryId` int(11) NOT NULL,
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
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2_militarypd`
--

INSERT INTO `form2_militarypd` (`m_militaryId`, `m_profile`, `m_lastname`, `m_firstname`, `m_middlename`, `m_rank`, `m_brSvc`, `m_afpsn`, `m_residenceAddress`, `m_residenceTelNo`, `m_emailAddress`, `m_mobileNo`, `m_designatedOffice`, `m_officeTelNo`, `m_officeAddress`, `m_retirementDate`, `m_class`, `m_submitted_requirements`, `m_status`, `m_dateRegistered`, `m_placeRegistered`, `m_renew_status`, `amount`, `flag`) VALUES
(1, 'm-m.png', 'm', 'm', 'm', 'Magat', 'choice 1', 'm', 'm', '23432', 'mm@gasdasd', '23423', 'm', '234234', 'm', '2016-05-26', 'Class A', '6,5,4,3,2,1,', 'registered', '2016-05-31 22:54:48', 'Camp Allen', 1, 350, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_information`
--

CREATE TABLE `vehicle_information` (
  `vehicleId` int(11) NOT NULL,
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
  `flag` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`vehicleId`, `wheels`, `vehicleMake`, `plateNo`, `yearModel`, `color`, `motorNo`, `chassisNo`, `stickerNo`, `decalNo`, `driver_id`, `driver_type`, `status`, `flag`) VALUES
(1, '4-wheeled', '1', '1', '2003', '1', '1', '1', '5555', '', 1, 'applicant', 'inactive', 1),
(3, '2-wheeled', 'm', 'h', '1990', 'befs', '2342', '234234', '', '101010101', 1, 'military', 'active', 1),
(32, '4-wheeled', 'r', 'r', '2008', 'r', 'r', 'r', 'r', '', 2, 'applicant', 'inactive', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_pending_accounts`
--
ALTER TABLE `admin_pending_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_log`
--
ALTER TABLE `client_log`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `client_records`
--
ALTER TABLE `client_records`
  ADD PRIMARY KEY (`plateNo`);

--
-- Indexes for table `client_report`
--
ALTER TABLE `client_report`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `client_userlog`
--
ALTER TABLE `client_userlog`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `client_users`
--
ALTER TABLE `client_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `client_visitorpass`
--
ALTER TABLE `client_visitorpass`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `form1_applicantpd`
--
ALTER TABLE `form1_applicantpd`
  ADD PRIMARY KEY (`a_applicantId`);

--
-- Indexes for table `form2_militarypd`
--
ALTER TABLE `form2_militarypd`
  ADD PRIMARY KEY (`m_militaryId`);

--
-- Indexes for table `vehicle_information`
--
ALTER TABLE `vehicle_information`
  ADD PRIMARY KEY (`vehicleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `admin_pending_accounts`
--
ALTER TABLE `admin_pending_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client_log`
--
ALTER TABLE `client_log`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `client_report`
--
ALTER TABLE `client_report`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client_userlog`
--
ALTER TABLE `client_userlog`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `form1_applicantpd`
--
ALTER TABLE `form1_applicantpd`
  MODIFY `a_applicantId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form2_militarypd`
--
ALTER TABLE `form2_militarypd`
  MODIFY `m_militaryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle_information`
--
ALTER TABLE `vehicle_information`
  MODIFY `vehicleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
