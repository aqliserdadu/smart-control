-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2022 at 09:34 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` tinyint NOT NULL,
  `img` char(20) NOT NULL,
  `content` text NOT NULL,
  `vision` varchar(500) NOT NULL,
  `mision` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `content`, `vision`, `mision`) VALUES
(1, 'about1650550465.png', '<p>Hardy Industries is engaged in Robotics, IoT, AI, and instrumentation. We design and manufacture technological solutions to solve your problems. Hardy Industries evolved from a hardware business with the aim of becoming an overall provider of Robotics, IoT, AI and Instrumentation solutions.</p>\r\n', '<p>To become a company that can provide Robotics, IoT, AI, and Instrumentation solutions.</p>\r\n', '<p>Provides easy-to-use robotic learning kit and robotic Providing services for making IoT and AI-based instruments to solve problems for customers. Innovate to build the country.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `idbanner` tinyint NOT NULL,
  `imgbanner` char(50) NOT NULL,
  `status` char(5) NOT NULL,
  `text1` char(50) NOT NULL,
  `text2` char(50) NOT NULL,
  `text3` char(50) NOT NULL,
  `halaman` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`idbanner`, `imgbanner`, `status`, `text1`, `text2`, `text3`, `halaman`) VALUES
(2, 'img_1650296812.jpg', 'On', '', '', '', ''),
(3, 'img_1655802815.png', 'Off', '', '', '', ''),
(4, 'banner_1639010100.jpg', 'Off', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `boardkey`
--

CREATE TABLE `boardkey` (
  `id` int NOT NULL,
  `boardkey` char(100) NOT NULL,
  `status` tinyint NOT NULL,
  `tool` char(50) NOT NULL,
  `label` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alias` char(50) NOT NULL,
  `iduser` int NOT NULL,
  `dashboard` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `boardkey`
--

INSERT INTO `boardkey` (`id`, `boardkey`, `status`, `tool`, `label`, `alias`, `iduser`, `dashboard`) VALUES
(2, '4455', 1, 'Temperature,Humidity,Powermeter', 'mult', 'Sensor ruangan', 6, 1),
(3, '1223', 1, 'Temperature', 'single', 'Sesnsor rumah', 6, 0),
(4, '2123ee343', 1, 'Temperature,Humidity,Powermeter', 'mult', '', 3, 0),
(5, 'SE003', 1, 'Temperature,Humidity,Powermeter', 'mult', '', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idcontact` tinyint NOT NULL,
  `label` varchar(300) NOT NULL,
  `telpon` char(20) NOT NULL,
  `email` char(30) NOT NULL,
  `youtube` char(50) NOT NULL,
  `instagram` char(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `maps` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idcontact`, `label`, `telpon`, `email`, `youtube`, `instagram`, `alamat`, `maps`) VALUES
(1, 'You Can See In My Website', '+62 857 1436 9716', 'office@hardyindustries.tech', 'https://youtube.com', 'https://instagram.com', 'Jl. Situsela No.01, Kaumpandak, Karadenan, Cibinong, Kabupaten Bogor 16913', 'https://www.google.com/maps/place/Hardy+Industries+Workshop/@-6.5229429,106.8172985,21z/data=!4m5!3m4!1s0x2e69c3c71a4d1a3b:0xe73455f58060e2ca!8m2!3d-6.522887!4d106.8172521');

-- --------------------------------------------------------

--
-- Table structure for table `daftarsensor`
--

CREATE TABLE `daftarsensor` (
  `id` int NOT NULL,
  `nama` char(30) NOT NULL,
  `img` char(30) NOT NULL,
  `waktu` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `daftarsensor`
--

INSERT INTO `daftarsensor` (`id`, `nama`, `img`, `waktu`) VALUES
(1, 'Temperature', 'suhu.png', 60000),
(2, 'Humidity', 'kelembaban.jpg', 60000),
(3, 'Air_Pressure', '', 240000),
(4, 'CO2', '', 60000),
(5, 'PM_1', '', 60000),
(6, 'PM_2.5', '', 60000),
(7, 'PM_10', '', 60000),
(8, 'Light_Intensity', '', 60000),
(9, 'UV_Light_Intensity', '', 60000),
(10, 'Solar_Radiation', '', 60000),
(11, 'Rain_Gauge', '', 60000),
(12, 'Wind_Speed', '', 60000),
(13, 'Wind_Direction', '', 60000),
(14, 'Soil_Moisture', '', 60000),
(15, 'Water_Level', '', 60000),
(16, 'Voltmeter', '', 60000),
(17, 'Ammeter', '', 60000),
(18, 'Powermeter', 'tekanan.png', 60000),
(43, 'Twelve', 'img_1658037846.png', 30000),
(39, 'Kelembaban', 'img_1658038292.jpg', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `idlog` int NOT NULL,
  `iduser` int NOT NULL,
  `aktifasi` date NOT NULL,
  `endaktifasi` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`idlog`, `iduser`, `aktifasi`, `endaktifasi`) VALUES
(1, 1, '2022-06-18', '2022-06-18'),
(2, 3, '2022-06-03', '2022-06-03'),
(3, 6, '2022-07-01', '2022-07-31'),
(4, 6, '2022-07-01', '2022-07-15'),
(5, 3, '2022-06-30', '0000-00-00'),
(6, 3, '2022-06-30', '2022-08-31'),
(7, 3, '0000-00-00', '0000-00-00'),
(8, 6, '2022-07-01', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_board`
--

CREATE TABLE `mqtt_board` (
  `idboard` char(100) NOT NULL,
  `tool` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `macaddress` char(100) NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mqtt_board`
--

INSERT INTO `mqtt_board` (`idboard`, `tool`, `macaddress`, `status`) VALUES
('547272', 'Temperature', 'E55:RHY1:', 'On'),
('546767', 'Suhu,Tekanan', 'E55:RHY1:weakkkk', 'On'),
('Dev01', 'switch', 'EWy:GGs', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_category_img`
--

CREATE TABLE `mqtt_category_img` (
  `id` int NOT NULL,
  `iduser` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idboard` char(10) NOT NULL,
  `category` char(50) NOT NULL,
  `img` char(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mqtt_category_img`
--

INSERT INTO `mqtt_category_img` (`id`, `iduser`, `idboard`, `category`, `img`) VALUES
(9, '6', 'Dev01', 'kamar-mandi', ''),
(4, '6', '546767', 'taman', 'img_1666277948.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_history`
--

CREATE TABLE `mqtt_history` (
  `idhistory` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idboard` char(100) NOT NULL,
  `data` char(20) NOT NULL,
  `ket` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mqtt_history`
--

INSERT INTO `mqtt_history` (`idhistory`, `date`, `idboard`, `data`, `ket`) VALUES
(1, '2022-08-24 13:46:32', '546767', 'on', 'Member'),
(2, '2022-08-24 13:46:42', '546767', 'off', 'Member'),
(3, '2022-08-24 13:47:30', '546767', 'on', 'Member'),
(4, '2022-08-24 14:18:42', '546767', 'off', 'Member'),
(5, '2022-08-24 14:19:33', '546767', 'on', 'Member'),
(6, '2022-08-24 14:19:48', '546767', 'off', 'Member'),
(7, '2022-08-24 14:20:09', '546767', 'on', 'Member'),
(8, '2022-08-24 14:20:18', '546767', 'off', 'Member'),
(9, '2022-08-24 14:20:24', '546767', 'on', 'Member'),
(10, '2022-08-24 14:20:26', '546767', 'off', 'Member'),
(11, '2022-08-24 14:20:28', '546767', 'on', 'Member'),
(12, '2022-08-24 14:20:30', '546767', 'off', 'Member'),
(13, '2022-08-24 14:20:32', '546767', 'on', 'Member'),
(14, '2022-08-24 14:20:34', '546767', 'off', 'Member'),
(15, '2022-08-24 14:20:36', '546767', 'on', 'Member'),
(16, '2022-08-24 14:20:38', '546767', 'off', 'Member'),
(17, '2022-08-24 14:20:40', '546767', 'on', 'Member'),
(18, '2022-08-24 14:20:41', '546767', 'off', 'Member'),
(19, '2022-08-24 14:20:43', '546767', 'on', 'Member'),
(20, '2022-08-24 14:20:45', '546767', 'off', 'Member'),
(21, '2022-08-24 14:20:47', '546767', 'on', 'Member'),
(22, '2022-08-24 14:20:48', '546767', 'off', 'Member'),
(23, '2022-08-24 14:23:29', '546767', 'on', 'Member'),
(24, '2022-08-24 14:26:02', '546767', 'off', 'Member'),
(25, '2022-08-24 14:26:11', '546767', 'on', 'Member'),
(26, '2022-08-24 14:26:12', '546767', 'off', 'Member'),
(27, '2022-08-24 14:26:13', '546767', 'on', 'Member'),
(28, '2022-08-24 14:26:14', '546767', 'off', 'Member'),
(29, '2022-08-24 14:26:15', '546767', 'on', 'Member'),
(30, '2022-08-24 14:29:05', '546767', 'on', 'Member'),
(31, '2022-08-24 14:31:41', '546767', 'on', 'Member'),
(32, '2022-08-24 14:31:51', '546767', 'off', 'Member'),
(33, '2022-08-24 14:31:56', '546767', 'on', 'Member'),
(34, '2022-08-24 14:32:09', '546767', 'off', 'Member'),
(35, '2022-08-24 14:32:16', '546767', 'on', 'Member'),
(36, '2022-08-24 14:33:47', '546767', 'off', 'Member'),
(37, '2022-08-24 14:33:53', '546767', 'on', 'Member'),
(38, '2022-08-24 14:33:57', '546767', 'off', 'Member'),
(39, '2022-08-24 14:34:01', '546767', 'on', 'Member'),
(40, '2022-08-24 14:35:33', '546767', 'on', 'Member'),
(41, '2022-08-24 14:35:37', '546767', 'off', 'Member'),
(42, '2022-08-25 13:05:11', '546767', 'off', 'Member'),
(43, '2022-08-25 13:05:14', '546767', 'on', 'Member'),
(44, '2022-08-25 13:22:33', '546767', 'on', 'Member'),
(45, '2022-08-25 13:22:35', '546767', 'off', 'Member'),
(46, '2022-08-25 13:22:36', '546767', 'on', 'Member'),
(47, '2022-08-25 13:22:37', '546767', 'off', 'Member'),
(48, '2022-08-25 13:22:39', '546767', 'on', 'Member'),
(49, '2022-08-25 13:22:40', '546767', 'off', 'Member'),
(50, '2022-10-11 15:18:46', '546767', 'on', 'Member'),
(51, '2022-10-11 15:18:58', '546767', 'off', 'Member'),
(52, '2022-10-11 15:18:59', '546767', 'on', 'Member'),
(53, '2022-10-11 15:19:01', '546767', 'off', 'Member'),
(54, '2022-10-11 15:19:02', '546767', 'on', 'Member'),
(55, '2022-10-11 15:19:03', '546767', 'off', 'Member'),
(56, '2022-10-11 15:19:05', '546767', 'on', 'Member'),
(57, '2022-10-11 15:19:06', '546767', 'off', 'Member'),
(58, '2022-10-11 15:19:08', '546767', 'on', 'Member'),
(59, '2022-10-11 15:19:09', '546767', 'off', 'Member'),
(60, '2022-10-11 15:19:09', '546767', 'on', 'Member'),
(61, '2022-10-11 15:19:10', '546767', 'off', 'Member'),
(62, '2022-10-11 15:19:11', '546767', 'on', 'Member'),
(63, '2022-10-11 15:19:12', '546767', 'off', 'Member'),
(64, '2022-10-11 15:19:12', '546767', 'on', 'Member'),
(65, '2022-10-11 15:19:13', '546767', 'off', 'Member'),
(66, '2022-10-11 15:19:14', '546767', 'on', 'Member'),
(67, '2022-10-11 15:19:15', '546767', 'off', 'Member'),
(68, '2022-10-11 15:19:16', '546767', 'on', 'Member'),
(69, '2022-10-11 15:19:17', '546767', 'off', 'Member'),
(70, '2022-10-11 15:23:36', '546767', 'off', 'Member'),
(71, '2022-10-11 15:23:40', '546767', 'on', 'Member'),
(72, '2022-10-11 15:23:42', '546767', 'off', 'Member'),
(73, '2022-10-11 15:23:44', '546767', 'on', 'Member'),
(74, '2022-10-11 15:23:45', '546767', 'off', 'Member'),
(75, '2022-10-11 15:23:46', '546767', 'on', 'Member'),
(76, '2022-10-11 15:23:47', '546767', 'off', 'Member'),
(77, '2022-10-11 15:23:48', '546767', 'on', 'Member'),
(78, '2022-10-11 15:23:48', '546767', 'off', 'Member'),
(79, '2022-10-11 15:23:51', '546767', 'on', 'Member'),
(80, '2022-10-11 15:23:52', '546767', 'off', 'Member'),
(81, '2022-10-11 15:23:53', '546767', 'on', 'Member'),
(82, '2022-10-11 15:23:54', '546767', 'off', 'Member'),
(83, '2022-10-11 15:23:55', '546767', 'on', 'Member'),
(84, '2022-10-11 15:23:57', '546767', 'off', 'Member'),
(85, '2022-10-11 15:23:58', '546767', 'on', 'Member'),
(86, '2022-10-11 15:24:03', '546767', 'off', 'Member'),
(87, '2022-10-11 15:24:04', '546767', 'on', 'Member'),
(88, '2022-10-11 15:24:28', '546767', 'off', 'Member'),
(89, '2022-10-11 15:24:56', '546767', 'on', 'Member'),
(90, '2022-10-11 15:24:58', '546767', 'off', 'Member'),
(91, '2022-10-11 15:26:16', '546767', 'on', 'Member'),
(92, '2022-10-11 15:30:39', '546767', 'off', 'Member'),
(93, '2022-10-11 15:33:15', '546767', 'on', 'Member'),
(94, '2022-10-11 15:34:27', '546767', 'off', 'Member'),
(95, '2022-10-11 15:34:30', '546767', 'on', 'Member'),
(96, '2022-10-11 15:34:35', '546767', 'off', 'Member'),
(97, '2022-10-11 15:34:37', '546767', 'on', 'Member'),
(98, '2022-10-11 15:34:38', '546767', 'off', 'Member'),
(99, '2022-10-11 15:34:38', '546767', 'on', 'Member'),
(100, '2022-10-11 15:34:39', '546767', 'off', 'Member'),
(101, '2022-10-11 15:34:40', '546767', 'on', 'Member'),
(102, '2022-10-11 15:34:41', '546767', 'off', 'Member'),
(103, '2022-10-11 15:34:41', '546767', 'on', 'Member'),
(104, '2022-10-11 15:34:42', '546767', 'off', 'Member'),
(105, '2022-10-11 15:34:43', '546767', 'on', 'Member'),
(106, '2022-10-11 15:34:44', '546767', 'off', 'Member'),
(107, '2022-10-11 15:34:44', '546767', 'on', 'Member'),
(108, '2022-10-12 16:37:54', 'Dev01', 'off', 'Member'),
(109, '2022-10-12 16:38:57', 'Dev01', 'on', 'Member'),
(110, '2022-10-12 16:39:03', 'Dev01', 'off', 'Member'),
(111, '2022-10-12 16:39:07', 'Dev01', 'on', 'Member'),
(112, '2022-10-12 16:39:11', 'Dev01', 'off', 'Member'),
(113, '2022-10-12 16:39:15', 'Dev01', 'on', 'Member'),
(114, '2022-10-12 16:39:18', 'Dev01', 'off', 'Member'),
(115, '2022-10-12 16:39:22', 'Dev01', 'on', 'Member'),
(116, '2022-10-12 22:50:53', 'Dev01', 'off', 'Member'),
(117, '2022-10-12 22:51:00', 'Dev01', 'off', 'Member'),
(118, '2022-10-12 22:51:06', 'Dev01', 'off', 'Member'),
(119, '2022-10-12 22:51:09', 'Dev01', 'off', 'Member'),
(120, '2022-10-12 22:51:12', 'Dev01', 'off', 'Member'),
(121, '2022-10-12 22:51:25', 'Dev01', 'on', 'Member'),
(122, '2022-10-12 22:52:03', 'Dev01', 'off', 'Member'),
(123, '2022-10-12 22:52:08', 'Dev01', 'off', 'Member'),
(124, '2022-10-12 22:52:14', 'Dev01', 'on', 'Member'),
(125, '2022-10-12 22:52:25', 'Dev01', 'off', 'Member'),
(126, '2022-10-12 22:54:57', 'Dev01', 'on', 'Member'),
(127, '2022-10-12 22:55:02', 'Dev01', 'off', 'Member'),
(128, '2022-10-12 22:55:08', 'Dev01', 'on', 'Member'),
(129, '2022-10-12 22:55:12', 'Dev01', 'off', 'Member'),
(130, '2022-10-12 22:55:19', 'Dev01', 'on', 'Member'),
(131, '2022-10-12 22:55:26', 'Dev01', 'off', 'Member'),
(132, '2022-10-12 22:55:30', 'Dev01', 'on', 'Member'),
(133, '2022-10-12 22:55:35', 'Dev01', 'off', 'Member'),
(134, '2022-10-12 22:55:45', 'Dev01', 'on', 'Member'),
(135, '2022-10-12 22:55:57', 'Dev01', 'off', 'Member'),
(136, '2022-10-12 22:56:02', 'Dev01', 'on', 'Member'),
(137, '2022-10-12 23:20:58', 'Dev01', 'off', 'Member'),
(138, '2022-10-12 23:21:11', 'Dev01', 'on', 'Member'),
(139, '2022-10-12 23:21:15', 'Dev01', 'off', 'Member'),
(140, '2022-10-12 23:29:59', 'Dev01', 'on', 'Member'),
(141, '2022-10-12 23:30:07', 'Dev01', 'off', 'Member'),
(142, '2022-10-12 23:30:11', 'Dev01', 'on', 'Member'),
(143, '2022-10-12 23:31:04', 'Dev01', 'off', 'Member'),
(144, '2022-10-12 23:31:09', 'Dev01', 'on', 'Member'),
(145, '2022-10-12 23:31:14', 'Dev01', 'off', 'Member'),
(146, '2022-10-12 23:31:17', 'Dev01', 'on', 'Member'),
(147, '2022-10-12 23:31:21', 'Dev01', 'off', 'Member'),
(148, '2022-10-12 23:31:48', 'Dev01', 'on', 'Member'),
(149, '2022-10-12 23:31:52', 'Dev01', 'off', 'Member'),
(150, '2022-10-12 23:36:45', 'Dev01', 'on', 'Member'),
(151, '2022-10-12 23:36:49', 'Dev01', 'off', 'Member'),
(152, '2022-10-12 23:36:54', 'Dev01', 'on', 'Member'),
(153, '2022-10-12 23:44:47', 'Dev01', 'off', 'Member'),
(154, '2022-10-12 23:49:31', 'Dev01', 'on', 'Member'),
(155, '2022-10-12 23:49:44', 'Dev01', 'off', 'Member'),
(156, '2022-10-12 23:57:38', 'Dev01', 'on', 'Member'),
(157, '2022-10-12 23:57:43', 'Dev01', 'off', 'Member'),
(158, '2022-10-12 23:57:49', 'Dev01', 'on', 'Member'),
(159, '2022-10-12 23:58:36', 'Dev01', 'off', 'Member'),
(160, '2022-10-12 23:58:42', 'Dev01', 'on', 'Member'),
(161, '2022-10-13 00:08:04', 'Dev01', 'off', 'Member'),
(162, '2022-10-13 00:08:06', 'Dev01', 'off', 'Member'),
(163, '2022-10-13 00:08:09', 'Dev01', 'on', 'Member'),
(164, '2022-10-13 13:53:27', 'Dev01', 'off', 'Member'),
(165, '2022-10-13 13:53:33', 'Dev01', 'on', 'Member'),
(166, '2022-10-13 13:53:38', 'Dev01', 'off', 'Member'),
(167, '2022-10-13 13:53:43', 'Dev01', 'on', 'Member'),
(168, '2022-10-13 13:53:48', 'Dev01', 'off', 'Member'),
(169, '2022-10-13 13:53:57', 'Dev01', 'on', 'Member'),
(170, '2022-10-13 13:54:05', 'Dev01', 'off', 'Member'),
(171, '2022-10-13 13:54:13', 'Dev01', 'on', 'Member'),
(172, '2022-10-13 13:54:16', 'Dev01', 'off', 'Member'),
(173, '2022-11-07 13:31:21', 'Dev01', 'on', 'Member'),
(174, '2022-11-07 13:31:26', 'Dev01', 'off', 'Member'),
(175, '2022-11-07 13:31:31', 'Dev01', 'on', 'Member'),
(176, '2022-11-07 13:31:42', 'Dev01', 'off', 'Member'),
(177, '2022-11-07 13:31:46', 'Dev01', 'on', 'Member'),
(178, '2022-11-07 13:32:08', 'Dev01', 'off', 'Member'),
(179, '2022-11-07 13:33:22', 'Dev01', 'on', 'Member'),
(180, '2022-11-07 13:33:26', 'Dev01', 'off', 'Member'),
(181, '2022-11-07 13:33:32', 'Dev01', 'on', 'Member'),
(182, '2022-11-07 13:33:38', 'Dev01', 'off', 'Member'),
(183, '2022-11-07 13:34:24', 'Dev01', 'on', 'Member'),
(184, '2022-11-07 13:34:28', 'Dev01', 'off', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_icon`
--

CREATE TABLE `mqtt_icon` (
  `idicon` int NOT NULL,
  `nameicon` char(20) NOT NULL,
  `iconbefore` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `iconafter` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mqtt_icon`
--

INSERT INTO `mqtt_icon` (`idicon`, `nameicon`, `iconbefore`, `iconafter`) VALUES
(1, 'lamp', 'imgB_1665617362.jpg', 'imgF_1665617379.jpg'),
(2, 'kelembaban', 'imgB_1666098795.jpg', 'imgF_1666098682.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_pub_sub`
--

CREATE TABLE `mqtt_pub_sub` (
  `id` int NOT NULL,
  `idboard` char(20) NOT NULL,
  `category` char(20) NOT NULL,
  `topic_pub` char(100) NOT NULL,
  `topic_sub` char(100) NOT NULL,
  `idicon` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mqtt_pub_sub`
--

INSERT INTO `mqtt_pub_sub` (`id`, `idboard`, `category`, `topic_pub`, `topic_sub`, `idicon`) VALUES
(6, '547272', 'Temperature', 'hardy/publamp', 'hardy/sublamp', 1),
(11, 'Dev01', 'Switch', 'harDy/sublam', 'h4rDy/publam', 1),
(8, '546767', 'Tekanan', 'hardy/publamp3', 'hardy/sublamp3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_user`
--

CREATE TABLE `mqtt_user` (
  `idboard` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `iduser` int NOT NULL,
  `nameboard` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` char(5) NOT NULL,
  `category` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mqtt_user`
--

INSERT INTO `mqtt_user` (`idboard`, `iduser`, `nameboard`, `status`, `category`) VALUES
('546767', 6, '', 'On', 'taman'),
('Dev01', 6, 'lampu tes', 'On', 'kamar-mandi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `judul` char(50) NOT NULL,
  `img` char(30) NOT NULL,
  `slug` char(200) NOT NULL,
  `date` char(20) NOT NULL,
  `kategori` char(30) NOT NULL,
  `content` text NOT NULL,
  `tags` char(100) NOT NULL,
  `halaman` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `img`, `slug`, `date`, `kategori`, `content`, `tags`, `halaman`, `status`) VALUES
(16, 'Mini Power Suplay', 'news_1650381236.png', 'mini-power-suplay.html', '2022-04-19', 'Product', '<p>Sebuah pencatu daya adalah alat listrik yang menyuplai tenaga listrik ke suatu beban listrik. Fungsi utama catu daya adalah untuk mengubah arus listrik dari sumber menjadi tegangan, arus, dan frekuensi yang benar untuk memberi daya pada beban. Akibatnya, catu daya terkadang disebut sebagai konverter daya listrik</p>\r\n', 'Product, custom', 'https://www.youtube.com/embed/g2AzXRbyuDM', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` tinyint NOT NULL,
  `nama` char(100) NOT NULL,
  `slug` char(100) NOT NULL,
  `kategori` char(20) NOT NULL,
  `imgs` char(50) NOT NULL,
  `imgd` char(50) NOT NULL,
  `imgt` char(50) NOT NULL,
  `harga` int NOT NULL,
  `deskripsi` text NOT NULL,
  `tags` char(50) NOT NULL,
  `whatsapp` char(200) NOT NULL,
  `tokped` char(200) NOT NULL,
  `shopie` char(200) NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `nama`, `slug`, `kategori`, `imgs`, `imgd`, `imgt`, `harga`, `deskripsi`, `tags`, `whatsapp`, `tokped`, `shopie`, `status`) VALUES
(8, 'Hujan', 'hujan', 'Robotic', 'imgP_1650373619.png', 'imgP_1650380597.png', 'imgP_1650380611.png', 100000, '<p>asd</p>\r\n', 'Cxv', '085771875264', 'https://tokopedia.com', 'https://shoppe.com', 'Off'),
(9, 'Hujan Lebat', 'hujan-lebat', 'IoT', 'imgP_1650373658.png', 'imgP_1650380623.png', 'imgP_1650380636.png', 10000, '<p>sa</p>\r\n', 'A', 'a', 'a', 'a', 'Off');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `idsensor` int NOT NULL,
  `tgl` date DEFAULT NULL,
  `boardkey` char(20) NOT NULL,
  `sensor` char(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`idsensor`, `tgl`, `boardkey`, `sensor`, `date`, `data`) VALUES
(1, '2022-06-26', '4455', 'temperature', '2022-06-25 08:42:35', 44),
(2, '2022-06-26', '4455', 'temperature', '2022-06-25 08:42:37', 45),
(3, '2022-06-26', '4455', 'temperature', '2022-06-25 08:43:23', 46),
(4, '2022-06-26', '4455', 'temperature', '2022-06-25 08:43:52', 40),
(5, '2022-06-26', '4455', 'temperature', '2022-06-25 08:43:52', 43),
(6, '2022-06-26', '4455', 'temperature', '2022-06-25 08:43:55', 45),
(7, '2022-06-25', '4455', 'humidity', '2022-06-25 08:42:35', 44),
(8, '2022-06-25', '4455', 'humidity', '2022-06-25 08:42:37', 45),
(9, '2022-06-25', '4455', 'humidity', '2022-06-25 08:43:23', 46),
(10, '2022-06-25', '4455', 'humidity', '2022-06-25 08:43:52', 40),
(11, '2022-06-25', '4455', 'humidity', '2022-06-25 08:43:52', 43),
(12, '2022-06-25', '4455', 'humidity', '2022-06-25 08:43:55', 45),
(13, '2022-06-25', '4455', 'powermeter', '2022-06-25 08:42:35', 44),
(14, '2022-06-25', '4455', 'powermeter', '2022-06-25 08:42:37', 45),
(15, '2022-06-25', '4455', 'powermeter', '2022-06-25 08:43:23', 46),
(16, '2022-06-25', '4455', 'powermeter', '2022-06-25 08:43:52', 40),
(17, '2022-06-25', '4455', 'powermeter', '2022-06-25 08:43:52', 43),
(18, '2022-06-25', '4455', 'powermeter', '2022-06-25 08:43:55', 45),
(21, '2022-07-03', '4455', 'temperature', '2022-07-03 03:18:09', 54),
(22, '2022-07-03', '4455', 'temperature', '2022-07-03 03:21:24', 54),
(23, '2022-07-03', '4455', 'temperature', '2022-07-03 03:26:59', 54),
(24, '2022-07-03', '4455', 'temperature', '2022-07-03 07:28:35', 45),
(25, '2022-07-03', '4455', 'temperature', '2022-07-03 07:28:43', 46),
(26, '2022-07-03', '4455', 'temperature', '2022-07-03 07:28:52', 49),
(27, '2022-07-03', '4455', 'temperature', '2022-07-03 07:29:02', 60),
(28, '2022-07-03', '4455', 'temperature', '2022-07-03 07:29:36', 60),
(29, '2022-07-03', '4455', 'temperature', '2022-07-03 07:29:42', 70),
(30, '2022-07-03', '4455', 'temperature', '2022-07-03 07:30:09', 60),
(31, '2022-07-03', '4455', 'temperature', '2022-07-03 07:52:53', 60),
(32, '2022-07-03', '4455', 'temperature', '2022-07-03 07:53:01', 61),
(33, '2022-07-03', '4455', 'temperature', '2022-07-03 07:53:12', 62),
(34, '2022-07-03', '4455', 'temperature', '2022-07-03 07:53:28', 63),
(35, '2022-07-03', '4455', 'temperature', '2022-07-03 07:53:31', 64),
(36, '2022-07-03', '4455', 'temperature', '2022-07-03 07:53:34', 65),
(37, '2022-07-03', '4455', 'temperature', '2022-07-03 07:53:38', 66),
(38, '2022-07-03', '4455', 'temperature', '2022-07-03 07:54:20', 65),
(39, '2022-07-03', '4455', 'temperature', '2022-07-03 07:54:27', 67),
(40, '2022-07-03', '4455', 'temperature', '2022-07-03 07:55:18', 69),
(41, '2022-07-03', '4455', 'temperature', '2022-07-03 07:55:26', 70),
(42, '2022-07-03', '4455', 'temperature', '2022-07-03 07:55:30', 75),
(43, '2022-07-03', '4455', 'temperature', '2022-07-03 07:55:57', 105),
(44, '2022-07-03', '4455', 'temperature', '2022-07-03 07:56:25', 106),
(45, '2022-07-03', '4455', 'temperature', '2022-07-03 07:56:36', 200),
(46, '2022-07-03', '4455', 'temperature', '2022-07-03 08:18:22', 60),
(47, '2022-07-03', '4455', 'temperature', '2022-07-03 08:19:22', 60),
(440, '2022-07-12', '4455', 'temperature', '2022-07-12 15:28:12', 45),
(49, '2022-07-03', '4455', 'powermeter', '2022-07-03 08:19:22', 61),
(50, '2022-07-03', '4455', 'temperature', '2022-07-03 08:19:44', 60),
(51, '2022-07-03', '4455', 'humidity', '2022-07-03 08:19:44', 62),
(52, '2022-07-03', '4455', 'powermeter', '2022-07-03 08:19:44', 61),
(53, '2022-07-03', '4455', 'temperature', '2022-07-03 08:47:02', 60),
(54, '2022-07-03', '4455', 'humidity', '2022-07-03 08:47:02', 62),
(55, '2022-07-03', '4455', 'powermeter', '2022-07-03 08:47:02', 61),
(56, '2022-07-03', '4455', 'temperature', '2022-07-03 08:47:43', 60),
(57, '2022-07-03', '4455', 'humidity', '2022-07-03 08:47:43', 62),
(58, '2022-07-03', '4455', 'powermeter', '2022-07-03 08:47:43', 61),
(59, '2022-07-03', '4455', 'temperature', '2022-07-03 08:48:19', 61),
(60, '2022-07-03', '4455', 'humidity', '2022-07-03 08:48:19', 65),
(61, '2022-07-03', '4455', 'powermeter', '2022-07-03 08:48:19', 62),
(62, '2022-07-03', '4455', 'temperature', '2022-07-03 09:28:42', 7),
(63, '2022-07-03', '4455', 'temperature', '2022-07-03 09:31:44', 90),
(64, '2022-07-03', '4455', 'temperature', '2022-07-03 09:33:45', 100),
(65, '2022-07-03', '4455', 'temperature', '2022-07-03 09:33:53', 1),
(66, '2022-07-03', '4455', 'temperature', '2022-07-03 09:35:21', 10),
(67, '2022-07-03', '4455', 'temperature', '2022-07-03 09:35:28', 100),
(68, '2022-07-03', '4455', 'temperature', '2022-07-03 09:35:37', 134),
(69, '2022-07-03', '4455', 'temperature', '2022-07-03 09:35:46', 145),
(70, '2022-07-03', '4455', 'temperature', '2022-07-03 09:35:55', 156),
(71, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:06', 15),
(72, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:12', 18),
(73, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:19', 13),
(74, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:25', 15),
(75, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:32', 15),
(76, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:39', 18),
(77, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:45', 10),
(78, '2022-07-03', '4455', 'temperature', '2022-07-03 10:01:53', 15),
(79, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:01', 12),
(80, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:08', 16),
(81, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:14', 17),
(82, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:21', 15),
(83, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:27', 15),
(84, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:34', 10),
(85, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:42', 19),
(86, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:48', 17),
(87, '2022-07-03', '4455', 'temperature', '2022-07-03 10:02:55', 18),
(88, '2022-07-03', '4455', 'temperature', '2022-07-03 10:03:05', 15),
(89, '2022-07-03', '4455', 'temperature', '2022-07-03 10:03:14', 14),
(90, '2022-07-03', '4455', 'temperature', '2022-07-03 10:03:21', 15),
(91, '2022-07-03', '4455', 'temperature', '2022-07-03 10:03:27', 11),
(92, '2022-07-03', '4455', 'temperature', '2022-07-03 10:03:34', 19),
(93, '2022-07-03', '4455', 'temperature', '2022-07-03 10:03:40', 14),
(94, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:00', 13),
(95, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:00', 12),
(96, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:00', 14),
(97, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:06', 17),
(98, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:06', 16),
(99, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:06', 10),
(100, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:13', 18),
(101, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:13', 13),
(102, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:13', 13),
(103, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:20', 10),
(104, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:20', 13),
(105, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:20', 10),
(106, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:33', 16),
(107, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:33', 10),
(108, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:33', 18),
(109, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:40', 11),
(110, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:40', 18),
(111, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:40', 14),
(112, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:46', 16),
(113, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:46', 19),
(114, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:46', 17),
(115, '2022-07-03', '4455', 'temperature', '2022-07-03 10:04:53', 18),
(116, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:04:53', 10),
(117, '2022-07-03', '4455', 'humidity', '2022-07-03 10:04:53', 16),
(118, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:00', 12),
(119, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:00', 13),
(120, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:00', 14),
(121, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:06', 18),
(122, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:06', 18),
(123, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:06', 12),
(124, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:13', 13),
(125, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:13', 13),
(126, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:13', 18),
(127, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:20', 16),
(128, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:20', 16),
(129, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:20', 11),
(130, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:27', 19),
(131, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:27', 17),
(132, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:27', 14),
(133, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:33', 19),
(134, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:33', 19),
(135, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:33', 11),
(136, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:41', 13),
(137, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:41', 18),
(138, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:41', 10),
(139, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:51', 13),
(140, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:51', 18),
(141, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:51', 14),
(142, '2022-07-03', '4455', 'temperature', '2022-07-03 10:05:57', 16),
(143, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:05:57', 15),
(144, '2022-07-03', '4455', 'humidity', '2022-07-03 10:05:57', 11),
(145, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:04', 18),
(146, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:04', 11),
(147, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:04', 18),
(148, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:10', 14),
(149, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:10', 15),
(150, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:10', 17),
(151, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:18', 19),
(152, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:18', 18),
(153, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:18', 17),
(154, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:24', 17),
(155, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:24', 13),
(156, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:24', 12),
(157, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:31', 12),
(158, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:31', 14),
(159, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:31', 11),
(160, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:38', 17),
(161, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:38', 11),
(162, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:38', 19),
(163, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:45', 11),
(164, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:45', 18),
(165, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:45', 19),
(166, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:52', 15),
(167, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:52', 10),
(168, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:52', 17),
(169, '2022-07-03', '4455', 'temperature', '2022-07-03 10:06:58', 11),
(170, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:06:58', 10),
(171, '2022-07-03', '4455', 'humidity', '2022-07-03 10:06:58', 14),
(172, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:05', 15),
(173, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:05', 12),
(174, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:05', 17),
(175, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:12', 16),
(176, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:12', 15),
(177, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:12', 18),
(178, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:18', 14),
(179, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:18', 13),
(180, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:18', 19),
(181, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:25', 17),
(182, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:25', 18),
(183, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:25', 13),
(184, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:31', 11),
(185, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:31', 17),
(186, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:31', 19),
(187, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:38', 11),
(188, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:38', 13),
(189, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:38', 19),
(190, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:44', 16),
(191, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:44', 15),
(192, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:44', 10),
(193, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:50', 13),
(194, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:50', 16),
(195, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:50', 19),
(196, '2022-07-03', '4455', 'temperature', '2022-07-03 10:07:57', 14),
(197, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:07:57', 19),
(198, '2022-07-03', '4455', 'humidity', '2022-07-03 10:07:57', 13),
(199, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:03', 15),
(200, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:03', 14),
(201, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:03', 14),
(202, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:10', 14),
(203, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:10', 11),
(204, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:10', 10),
(205, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:16', 13),
(206, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:16', 14),
(207, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:16', 17),
(208, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:23', 11),
(209, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:23', 11),
(210, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:23', 15),
(211, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:29', 12),
(212, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:29', 19),
(213, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:29', 15),
(214, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:36', 10),
(215, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:36', 15),
(216, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:36', 17),
(217, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:43', 11),
(218, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:43', 11),
(219, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:43', 19),
(220, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:49', 10),
(221, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:49', 12),
(222, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:49', 15),
(223, '2022-07-03', '4455', 'temperature', '2022-07-03 10:08:56', 15),
(224, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:08:56', 13),
(225, '2022-07-03', '4455', 'humidity', '2022-07-03 10:08:56', 17),
(226, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:02', 16),
(227, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:02', 13),
(228, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:02', 17),
(229, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:09', 13),
(230, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:09', 17),
(231, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:09', 15),
(232, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:15', 14),
(233, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:15', 19),
(234, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:15', 16),
(235, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:21', 11),
(236, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:21', 15),
(237, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:21', 18),
(238, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:28', 10),
(239, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:28', 15),
(240, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:28', 18),
(241, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:34', 12),
(242, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:34', 11),
(243, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:34', 13),
(244, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:41', 16),
(245, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:41', 12),
(246, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:41', 14),
(247, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:48', 12),
(248, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:48', 11),
(249, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:48', 16),
(250, '2022-07-03', '4455', 'temperature', '2022-07-03 10:09:54', 15),
(251, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:09:54', 15),
(252, '2022-07-03', '4455', 'humidity', '2022-07-03 10:09:54', 16),
(253, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:01', 17),
(254, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:01', 18),
(255, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:01', 16),
(256, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:07', 19),
(257, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:07', 12),
(258, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:07', 17),
(259, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:14', 11),
(260, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:14', 18),
(261, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:14', 12),
(262, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:20', 13),
(263, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:20', 15),
(264, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:20', 16),
(265, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:27', 16),
(266, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:27', 10),
(267, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:27', 11),
(268, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:33', 19),
(269, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:33', 19),
(270, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:33', 12),
(271, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:41', 18),
(272, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:41', 13),
(273, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:41', 13),
(274, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:48', 16),
(275, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:48', 15),
(276, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:48', 13),
(277, '2022-07-03', '4455', 'temperature', '2022-07-03 10:10:55', 14),
(278, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:10:55', 13),
(279, '2022-07-03', '4455', 'humidity', '2022-07-03 10:10:55', 13),
(280, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:02', 12),
(281, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:02', 13),
(282, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:02', 15),
(283, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:09', 11),
(284, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:09', 16),
(285, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:09', 12),
(286, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:16', 18),
(287, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:16', 13),
(288, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:16', 14),
(289, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:22', 16),
(290, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:22', 10),
(291, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:22', 10),
(292, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:29', 15),
(293, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:29', 19),
(294, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:29', 15),
(295, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:35', 13),
(296, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:35', 13),
(297, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:35', 12),
(298, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:42', 15),
(299, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:42', 12),
(300, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:42', 16),
(301, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:49', 18),
(302, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:49', 10),
(303, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:49', 13),
(304, '2022-07-03', '4455', 'temperature', '2022-07-03 10:11:56', 19),
(305, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:11:56', 16),
(306, '2022-07-03', '4455', 'humidity', '2022-07-03 10:11:56', 16),
(307, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:02', 11),
(308, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:02', 11),
(309, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:02', 14),
(310, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:09', 18),
(311, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:09', 15),
(312, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:09', 10),
(313, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:15', 11),
(314, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:15', 14),
(315, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:15', 10),
(316, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:22', 17),
(317, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:22', 17),
(318, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:22', 16),
(319, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:28', 16),
(320, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:28', 14),
(321, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:28', 14),
(322, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:35', 13),
(323, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:35', 18),
(324, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:35', 15),
(325, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:41', 17),
(326, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:41', 12),
(327, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:41', 12),
(328, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:48', 19),
(329, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:48', 15),
(330, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:48', 19),
(331, '2022-07-03', '4455', 'temperature', '2022-07-03 10:12:54', 10),
(332, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:12:54', 18),
(333, '2022-07-03', '4455', 'humidity', '2022-07-03 10:12:54', 10),
(334, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:01', 14),
(335, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:01', 17),
(336, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:01', 19),
(337, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:07', 19),
(338, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:07', 11),
(339, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:07', 15),
(340, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:14', 16),
(341, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:14', 19),
(342, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:14', 12),
(343, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:21', 18),
(344, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:21', 15),
(345, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:21', 15),
(346, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:27', 19),
(347, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:27', 13),
(348, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:27', 16),
(349, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:35', 12),
(350, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:35', 10),
(351, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:35', 14),
(352, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:42', 10),
(353, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:42', 16),
(354, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:42', 16),
(355, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:48', 12),
(356, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:48', 17),
(357, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:48', 18),
(358, '2022-07-03', '4455', 'temperature', '2022-07-03 10:13:55', 19),
(359, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:13:55', 10),
(360, '2022-07-03', '4455', 'humidity', '2022-07-03 10:13:55', 12),
(361, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:01', 13),
(362, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:01', 15),
(363, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:01', 13),
(364, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:10', 10),
(365, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:10', 14),
(366, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:10', 17),
(367, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:16', 18),
(368, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:16', 19),
(369, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:16', 19),
(370, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:23', 12),
(371, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:23', 17),
(372, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:23', 13),
(373, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:29', 12),
(374, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:29', 19),
(375, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:29', 13),
(376, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:36', 11),
(377, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:36', 16),
(378, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:36', 12),
(379, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:42', 19),
(380, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:42', 19),
(381, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:42', 15),
(382, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:49', 17),
(383, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:49', 19),
(384, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:49', 16),
(385, '2022-07-03', '4455', 'temperature', '2022-07-03 10:14:55', 13),
(386, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:14:55', 12),
(387, '2022-07-03', '4455', 'humidity', '2022-07-03 10:14:55', 15),
(388, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:02', 13),
(389, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:02', 14),
(390, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:02', 13),
(391, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:09', 17),
(392, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:09', 11),
(393, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:09', 18),
(394, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:15', 15),
(395, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:15', 17),
(396, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:15', 17),
(397, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:22', 14),
(398, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:22', 17),
(399, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:22', 19),
(400, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:28', 16),
(401, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:28', 16),
(402, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:28', 14),
(403, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:35', 13),
(404, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:35', 17),
(405, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:35', 16),
(406, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:41', 12),
(407, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:41', 11),
(408, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:41', 16),
(409, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:49', 13),
(410, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:49', 12),
(411, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:49', 13),
(412, '2022-07-03', '4455', 'temperature', '2022-07-03 10:15:57', 18),
(413, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:15:57', 17),
(414, '2022-07-03', '4455', 'humidity', '2022-07-03 10:15:57', 14),
(415, '2022-07-03', '4455', 'temperature', '2022-07-03 10:16:03', 12),
(416, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:16:03', 10),
(417, '2022-07-03', '4455', 'humidity', '2022-07-03 10:16:03', 10),
(418, '2022-07-03', '4455', 'temperature', '2022-07-03 10:16:10', 13),
(419, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:16:10', 11),
(420, '2022-07-03', '4455', 'humidity', '2022-07-03 10:16:10', 15),
(421, '2022-07-03', '4455', 'temperature', '2022-07-03 10:16:16', 18),
(422, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:16:16', 11),
(423, '2022-07-03', '4455', 'humidity', '2022-07-03 10:16:16', 19),
(424, '2022-07-03', '4455', 'temperature', '2022-07-03 10:16:23', 18),
(425, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:16:23', 13),
(426, '2022-07-03', '4455', 'humidity', '2022-07-03 10:16:23', 15),
(427, '2022-07-03', '4455', 'temperature', '2022-07-03 10:16:29', 10),
(428, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:16:29', 16),
(429, '2022-07-03', '4455', 'humidity', '2022-07-03 10:16:29', 13),
(430, '2022-07-03', '4455', 'temperature', '2022-07-03 10:16:36', 17),
(431, '2022-07-03', '4455', 'powermeter', '2022-07-03 10:16:36', 14),
(432, '2022-07-03', '4455', 'humidity', '2022-07-03 10:16:36', 13),
(433, '2022-07-04', '4455', 'temperature', '2022-07-05 14:16:55', 60),
(434, '2022-07-04', '4455', 'temperature', '2022-07-05 14:17:05', 60),
(435, '2022-07-04', '4455', 'temperature', '2022-07-05 14:17:07', 60),
(436, '2022-07-04', '4455', 'temperature', '2022-07-05 14:17:17', 60),
(437, '2022-07-04', '4455', 'temperature', '2022-07-05 14:17:28', 63),
(438, '2022-07-04', '4455', 'temperature', '2022-07-05 14:17:44', 10),
(441, '2022-07-12', '4455', 'humidity', '2022-07-12 15:28:12', 49),
(442, '2022-07-12', '4455', 'powermeter', '2022-07-12 15:28:12', 47),
(443, '2022-07-12', '4455', 'temperature', '2022-07-12 15:28:31', 45),
(444, '2022-07-12', '4455', 'humidity', '2022-07-12 15:28:31', 49),
(445, '2022-07-12', '4455', 'powermeter', '2022-07-12 15:28:31', 47),
(446, '2022-07-12', '4455', 'temperature', '2022-07-12 15:37:56', 45),
(447, '2022-07-12', '4455', 'humidity', '2022-07-12 15:37:56', 49),
(448, '2022-07-12', '4455', 'powermeter', '2022-07-12 15:37:56', 47),
(449, '2022-07-12', '4455', 'temperature', '2022-07-12 15:52:29', 45),
(450, '2022-07-12', '4455', 'humidity', '2022-07-12 15:52:29', 49),
(451, '2022-07-12', '4455', 'powermeter', '2022-07-12 15:52:29', 47),
(452, '2022-07-13', '4455', 'temperature', '2022-07-12 22:45:40', 45),
(453, '2022-07-13', '4455', 'humidity', '2022-07-12 22:45:40', 49),
(454, '2022-07-13', '4455', 'powermeter', '2022-07-12 22:45:40', 47),
(455, '2022-07-13', '4455', 'temperature', '2022-07-12 22:48:11', 45),
(456, '2022-07-13', '4455', 'humidity', '2022-07-12 22:48:11', 49),
(457, '2022-07-13', '4455', 'powermeter', '2022-07-12 22:48:11', 47),
(458, '2022-07-13', '4455', 'temperature', '2022-07-12 22:48:32', 40),
(459, '2022-07-13', '4455', 'humidity', '2022-07-12 22:48:32', 49),
(460, '2022-07-13', '4455', 'powermeter', '2022-07-12 22:48:32', 47),
(461, '2022-07-13', '4455', 'temperature', '2022-07-12 22:53:00', 47),
(462, '2022-07-13', '4455', 'humidity', '2022-07-12 22:53:00', 49),
(463, '2022-07-13', '4455', 'powermeter', '2022-07-12 22:53:00', 47),
(464, '2022-07-13', '4455', 'temperature', '2022-07-13 11:54:35', 47),
(465, '2022-07-13', '4455', 'humidity', '2022-07-13 11:54:35', 49),
(466, '2022-07-13', '4455', 'powermeter', '2022-07-13 11:54:35', 47),
(467, '2022-07-13', '4455', 'temperature', '2022-07-13 11:58:28', 47),
(468, '2022-07-13', '4455', 'humidity', '2022-07-13 11:58:28', 49),
(469, '2022-07-13', '4455', 'powermeter', '2022-07-13 11:58:28', 47),
(470, '2022-07-13', '4455', 'temperature', '2022-07-13 12:05:37', 47),
(471, '2022-07-13', '4455', 'humidity', '2022-07-13 12:05:37', 49),
(472, '2022-07-13', '4455', 'powermeter', '2022-07-13 12:05:37', 47),
(473, '2022-07-13', '4455', 'temperature', '2022-07-13 13:34:58', 47),
(474, '2022-07-13', '4455', 'humidity', '2022-07-13 13:34:58', 49),
(475, '2022-07-13', '4455', 'powermeter', '2022-07-13 13:34:58', 47),
(476, '2022-07-13', '4455', 'temperature', '2022-07-13 14:38:18', 47),
(477, '2022-07-13', '4455', 'humidity', '2022-07-13 14:38:18', 49),
(478, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:38:18', 47),
(479, '2022-07-13', '4455', 'temperature', '2022-07-13 14:38:27', 47),
(480, '2022-07-13', '4455', 'humidity', '2022-07-13 14:38:27', 49),
(481, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:38:27', 47),
(482, '2022-07-13', '4455', 'temperature', '2022-07-13 14:42:39', 47),
(483, '2022-07-13', '4455', 'humidity', '2022-07-13 14:42:39', 49),
(484, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:42:39', 47),
(485, '2022-07-13', '4455', 'temperature', '2022-07-13 14:43:11', 47),
(486, '2022-07-13', '4455', 'humidity', '2022-07-13 14:43:11', 49),
(487, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:43:11', 48),
(488, '2022-07-13', '4455', 'temperature', '2022-07-13 14:46:05', 47),
(489, '2022-07-13', '4455', 'humidity', '2022-07-13 14:46:05', 49),
(490, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:46:05', 48),
(491, '2022-07-13', '4455', 'temperature', '2022-07-13 14:49:03', 47),
(492, '2022-07-13', '4455', 'humidity', '2022-07-13 14:49:03', 49),
(493, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:49:03', 48),
(494, '2022-07-13', '4455', 'temperature', '2022-07-13 14:51:56', 56),
(495, '2022-07-13', '4455', 'humidity', '2022-07-13 14:51:56', 49),
(496, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:51:56', 48),
(497, '2022-07-13', '4455', 'temperature', '2022-07-13 14:54:19', 76),
(498, '2022-07-13', '4455', 'humidity', '2022-07-13 14:54:19', 66),
(499, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:54:19', 78),
(500, '2022-07-13', '4455', 'temperature', '2022-07-13 14:58:49', 76),
(501, '2022-07-13', '4455', 'humidity', '2022-07-13 14:58:49', 66),
(502, '2022-07-13', '4455', 'powermeter', '2022-07-13 14:58:49', 78),
(503, '2022-07-13', '4455', 'temperature', '2022-07-13 16:17:30', 76),
(504, '2022-07-13', '4455', 'humidity', '2022-07-13 16:17:30', 66),
(505, '2022-07-13', '4455', 'powermeter', '2022-07-13 16:17:30', 78),
(506, '2022-07-13', '4455', 'temperature', '2022-07-13 16:20:44', 76),
(507, '2022-07-13', '4455', 'humidity', '2022-07-13 16:20:44', 66),
(508, '2022-07-13', '4455', 'powermeter', '2022-07-13 16:20:44', 78),
(509, '2022-07-15', '4455', 'temperature', '2022-07-15 11:54:15', 76),
(510, '2022-07-15', '4455', 'humidity', '2022-07-15 11:54:15', 66),
(511, '2022-07-15', '4455', 'powermeter', '2022-07-15 11:54:15', 78),
(512, '2022-07-15', '4455', 'temperature', '2022-07-15 12:03:23', 76),
(513, '2022-07-15', '4455', 'humidity', '2022-07-15 12:03:23', 66),
(514, '2022-07-15', '4455', 'powermeter', '2022-07-15 12:03:23', 78),
(515, '2022-07-15', '4455', 'temperature', '2022-07-15 13:10:39', 76),
(516, '2022-07-15', '4455', 'humidity', '2022-07-15 13:10:39', 66),
(517, '2022-07-15', '4455', 'powermeter', '2022-07-15 13:10:39', 78),
(518, '2022-07-16', '4455', 'temperature', '2022-07-16 02:59:10', 76),
(519, '2022-07-16', '4455', 'humidity', '2022-07-16 02:59:10', 66),
(520, '2022-07-16', '4455', 'powermeter', '2022-07-16 02:59:10', 78),
(521, '2022-07-16', '4455', 'temperature', '2022-07-16 10:03:02', 76),
(522, '2022-07-16', '4455', 'humidity', '2022-07-16 10:03:02', 66),
(523, '2022-07-16', '4455', 'powermeter', '2022-07-16 10:03:02', 78),
(524, '2022-07-16', '4455', 'temperature', '2022-07-16 11:43:24', 76),
(525, '2022-07-16', '4455', 'humidity', '2022-07-16 11:43:24', 66),
(526, '2022-07-16', '4455', 'powermeter', '2022-07-16 11:43:24', 78),
(527, '2022-07-17', '4455', 'temperature', '2022-07-17 06:18:53', 76),
(528, '2022-07-17', '4455', 'humidity', '2022-07-17 06:18:53', 66),
(529, '2022-07-17', '4455', 'powermeter', '2022-07-17 06:18:53', 78),
(530, '2022-07-17', '4455', 'temperature', '2022-07-17 06:18:55', 76),
(531, '2022-07-17', '4455', 'humidity', '2022-07-17 06:18:55', 66),
(532, '2022-07-17', '4455', 'powermeter', '2022-07-17 06:18:55', 78),
(533, '2022-07-18', '4455', 'temperature', '2022-07-17 22:21:35', 76),
(534, '2022-07-18', '4455', 'humidity', '2022-07-17 22:21:35', 66),
(535, '2022-07-18', '4455', 'powermeter', '2022-07-17 22:21:35', 78),
(536, '2022-07-18', '4455', 'temperature', '2022-07-18 13:33:50', 76),
(537, '2022-07-18', '4455', 'humidity', '2022-07-18 13:33:50', 66),
(538, '2022-07-18', '4455', 'powermeter', '2022-07-18 13:33:50', 78),
(539, '2022-07-18', '4455', 'temperature', '2022-07-18 13:58:04', 76),
(540, '2022-07-18', '4455', 'humidity', '2022-07-18 13:58:04', 66),
(541, '2022-07-18', '4455', 'powermeter', '2022-07-18 13:58:04', 78),
(542, '2022-07-18', '4455', 'temperature', '2022-07-18 14:01:36', 76),
(543, '2022-07-18', '4455', 'humidity', '2022-07-18 14:01:36', 66),
(544, '2022-07-18', '4455', 'powermeter', '2022-07-18 14:01:36', 78),
(545, '2022-07-18', '4455', 'temperature', '2022-07-18 14:03:00', 76),
(546, '2022-07-18', '4455', 'humidity', '2022-07-18 14:03:00', 66),
(547, '2022-07-18', '4455', 'powermeter', '2022-07-18 14:03:00', 78),
(548, '2022-07-18', '4455', 'temperature', '2022-07-18 14:03:30', 76),
(549, '2022-07-18', '4455', 'humidity', '2022-07-18 14:03:30', 66),
(550, '2022-07-18', '4455', 'powermeter', '2022-07-18 14:03:30', 78),
(551, '2022-07-18', '4455', 'temperature', '2022-07-18 14:29:38', 76),
(552, '2022-07-18', '4455', 'humidity', '2022-07-18 14:29:38', 66),
(553, '2022-07-18', '4455', 'powermeter', '2022-07-18 14:29:38', 78),
(554, '2022-07-18', '4455', 'temperature', '2022-07-18 14:38:41', 80),
(555, '2022-07-18', '4455', 'humidity', '2022-07-18 14:38:41', 66),
(556, '2022-07-18', '4455', 'powermeter', '2022-07-18 14:38:41', 78),
(557, '2022-07-18', '4455', 'temperature', '2022-07-18 14:41:28', 90),
(558, '2022-07-18', '4455', 'humidity', '2022-07-18 14:41:28', 66),
(559, '2022-07-18', '4455', 'powermeter', '2022-07-18 14:41:28', 78),
(560, '2022-08-01', '4455', 't', '2022-08-01 14:08:56', 5),
(561, '2022-08-01', '4455', 'temperature', '2022-08-01 14:09:14', 54),
(562, '2022-08-01', '4455', 'temperature', '2022-08-01 14:09:27', 54),
(563, '2022-08-01', '4455', 'temperature', '2022-08-01 14:09:58', 90),
(564, '2022-08-01', '4455', 'temperature', '2022-08-01 14:11:03', 900),
(565, '2022-08-01', '4455', 'temperature', '2022-08-01 14:11:15', 900),
(566, '2022-08-01', '4455', 'temperature', '2022-08-01 14:12:17', 900),
(567, '2022-08-01', '4455', 'temperature', '2022-08-01 14:12:22', 900),
(568, '2022-08-01', '4455', 'temperature', '2022-08-01 14:12:29', 90),
(569, '2022-08-01', '4455', 'temperature', '2022-08-01 14:12:37', 90),
(570, '2022-08-01', '4455', 'temperature', '2022-08-01 14:13:54', 90),
(571, '2022-08-01', '4455', 'temperature', '2022-08-01 14:13:56', 90),
(572, '2022-08-01', '4455', 'temperature', '2022-08-01 14:13:58', 90),
(573, '2022-08-01', '4455', 'temperature', '2022-08-01 14:15:18', 90),
(574, '2022-08-01', '4455', 'temperature', '2022-08-01 14:15:22', 90),
(575, '2022-08-01', '4455', 'temperature', '2022-08-01 14:15:33', 90),
(576, '2022-08-01', '4455', 'temperature', '2022-08-01 14:15:52', 90),
(577, '2022-08-01', '4455', 'temperature', '2022-08-01 14:15:54', 90),
(578, '2022-08-01', '4455', 'temperature', '2022-08-01 14:15:57', 90),
(579, '2022-08-01', '4455', 'temperature', '2022-08-01 14:16:01', 90),
(580, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:05', 90),
(581, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:34', 90),
(582, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:37', 90),
(583, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:44', 90),
(584, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:48', 90),
(585, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:51', 90),
(586, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:54', 90),
(587, '2022-08-01', '4455', 'temperature', '2022-08-01 14:17:55', 90),
(588, '2022-08-01', '4455', 'temperature', '2022-08-01 15:17:27', 90),
(589, '2022-08-01', '4455', 'temperature', '2022-08-01 15:17:34', 90),
(590, '2022-08-01', '4455', 'temperature', '2022-08-01 15:18:58', 70),
(591, '2022-08-01', '4455', 'temperature', '2022-08-01 15:19:04', 70),
(592, '2022-08-01', '4455', 'temperature', '2022-08-01 15:19:32', 70),
(593, '2022-08-01', '4455', 'temperature', '2022-08-01 15:19:36', 70),
(594, '2022-08-01', '4455', 'temperature', '2022-08-01 15:21:24', 70),
(595, '2022-08-01', '4455', 'temperature', '2022-08-01 15:21:30', 70),
(596, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:01', 70),
(597, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:06', 70),
(598, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:08', 70),
(599, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:13', 70),
(600, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:16', 70),
(601, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:19', 70),
(602, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:53', 70),
(603, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:57', 70),
(604, '2022-08-01', '4455', 'temperature', '2022-08-01 15:22:59', 70),
(605, '2022-08-01', '4455', 'temperature', '2022-08-01 15:23:02', 70),
(606, '2022-08-01', '4455', 'temperature', '2022-08-01 15:23:04', 70),
(607, '2022-08-01', '4455', 'temperature', '2022-08-01 15:23:07', 70),
(608, '2022-08-01', '4455', 'temperature', '2022-08-01 15:23:13', 70),
(609, '2022-08-01', '4455', 'temperature', '2022-08-01 15:24:45', 70),
(610, '2022-08-01', '4455', 'temperature', '2022-08-01 15:24:48', 70),
(611, '2022-08-01', '4455', 'temperature', '2022-08-01 15:26:43', 80),
(612, '2022-08-01', '4455', 'temperature', '2022-08-01 15:26:49', 90),
(613, '2022-08-01', '4455', 'temperature', '2022-08-01 15:26:57', 60),
(614, '2022-08-01', '4455', 'temperature', '2022-08-01 15:27:08', 30),
(615, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:07', 30),
(616, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:11', 30),
(617, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:14', 30),
(618, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:17', 30),
(619, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:22', 60),
(620, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:26', 90),
(621, '2022-08-01', '4455', 'temperature', '2022-08-01 15:35:32', 20),
(622, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:12', 20),
(623, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:14', 20),
(624, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:15', 20),
(625, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:17', 20),
(626, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:19', 20),
(627, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:21', 20),
(628, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:22', 20),
(629, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:24', 20),
(630, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:26', 20),
(631, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:28', 20),
(632, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:29', 20),
(633, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:40', 20),
(634, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:41', 20),
(635, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:43', 20),
(636, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:44', 20),
(637, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:46', 20),
(638, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:47', 20),
(639, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:48', 20),
(640, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:53', 400),
(641, '2022-08-01', '4455', 'temperature', '2022-08-01 15:39:58', 2000),
(642, '2022-08-01', '4455', 'temperature', '2022-08-01 15:40:12', 200),
(643, '2022-08-01', '4455', 'temperature', '2022-08-01 15:40:21', 100),
(644, '2022-08-01', '4455', 'temperature', '2022-08-01 15:40:28', 1000),
(645, '2022-08-01', '4455', 'temperature', '2022-08-01 15:40:33', 10000),
(646, '2022-08-01', '4455', 'temperature', '2022-08-01 15:55:03', 50000),
(647, '2022-08-01', '4455', 'temperature', '2022-08-01 15:57:43', 50000),
(648, '2022-08-01', '4455', 'temperature', '2022-08-01 15:57:47', 20000),
(649, '2022-08-01', '4455', 'temperature', '2022-08-01 15:57:52', 30000),
(650, '2022-08-01', '4455', 'temperature', '2022-08-01 15:57:57', 40000),
(651, '2022-08-01', '4455', 'temperature', '2022-08-01 15:58:00', 4000),
(652, '2022-08-01', '4455', 'temperature', '2022-08-01 15:58:05', 4500),
(653, '2022-08-01', '4455', 'temperature', '2022-08-01 15:58:17', 45),
(654, '2022-08-01', '4455', 'temperature', '2022-08-01 15:58:20', 45),
(655, '2022-08-01', '4455', 'temperature', '2022-08-01 15:58:22', 45),
(656, '2022-08-01', '4455', 'temperature', '2022-08-01 15:58:24', 45),
(657, '2022-08-01', '4455', 'temperature', '2022-08-01 15:59:17', 45000),
(658, '2022-08-01', '4455', 'temperature', '2022-08-01 15:59:21', 450000),
(659, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:04', 450000),
(660, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:06', 450000),
(661, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:08', 450000),
(662, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:09', 450000),
(663, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:10', 450000),
(664, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:11', 450000),
(665, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:13', 450000),
(666, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:28', 450000),
(667, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:29', 450000),
(668, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:30', 450000),
(669, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:32', 450000),
(670, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:33', 450000),
(671, '2022-08-01', '4455', 'temperature', '2022-08-01 16:00:34', 450000),
(672, '2022-08-01', '4455', 'temperature', '2022-08-01 16:01:57', 450000),
(673, '2022-08-01', '4455', 'temperature', '2022-08-01 16:12:20', 450000),
(674, '2022-08-01', '4455', 'temperature', '2022-08-01 16:12:26', 45000),
(675, '2022-08-01', '4455', 'temperature', '2022-08-01 16:12:29', 45000),
(676, '2022-08-01', '4455', 'humidity', '2022-08-01 16:12:53', 45000),
(677, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:20', 45000),
(678, '2022-08-01', '4455', 'humidity', '2022-08-01 16:14:23', 45000),
(679, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:24', 45000),
(680, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:26', 450000),
(681, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:27', 45000),
(682, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:28', 45),
(683, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:29', 4500),
(684, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:30', 4000),
(685, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:31', 40000),
(686, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:32', 30000),
(687, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:33', 20000),
(688, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:34', 50000),
(689, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:36', 10000),
(690, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:37', 1000),
(691, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:39', 100),
(692, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:40', 1000),
(693, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:41', 10000),
(694, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:42', 50000),
(695, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:43', 20000),
(696, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:44', 30000),
(697, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:45', 40000),
(698, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:46', 4000),
(699, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:47', 4500),
(700, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:48', 45),
(701, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:48', 45000),
(702, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:49', 450000),
(703, '2022-08-01', '4455', 'temperature', '2022-08-01 16:14:50', 45000),
(704, '2022-08-01', '4455', 'humidity', '2022-08-01 16:14:50', 45000),
(705, '2022-08-02', '4455', 'temperature', '2022-08-02 14:12:06', 90),
(706, '2022-08-02', '4455', 'temperature', '2022-08-02 16:18:47', 90),
(707, '2022-08-02', '4455', 'temperature', '2022-08-02 16:19:03', 90),
(708, '2022-08-03', '4455', 'temperature', '2022-08-03 11:48:12', 90),
(709, '2022-08-03', '4455', 'temperature', '2022-08-03 12:15:45', 90),
(710, '2022-08-03', '4455', 'temperature', '2022-08-03 12:15:52', 90),
(711, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:03', 90),
(712, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:49', 90),
(713, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:51', 90),
(714, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:53', 90),
(715, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:55', 90),
(716, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:57', 90),
(717, '2022-08-03', '4455', 'temperature', '2022-08-03 12:16:59', 90),
(718, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:01', 90),
(719, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:03', 90),
(720, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:05', 90),
(721, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:07', 90),
(722, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:08', 90),
(723, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:10', 90),
(724, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:12', 90),
(725, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:15', 90),
(726, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:16', 90),
(727, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:21', 90),
(728, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:23', 90),
(729, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:25', 90),
(730, '2022-08-03', '4455', 'temperature', '2022-08-03 12:17:27', 90),
(731, '2022-08-03', '4455', 'temperature', '2022-08-03 12:19:59', 97),
(732, '2022-08-03', '4455', 'temperature', '2022-08-03 12:20:06', 100),
(733, '2022-08-03', '4455', 'temperature', '2022-08-03 12:20:10', 15),
(734, '2022-08-03', '4455', 'temperature', '2022-08-03 12:20:15', 20),
(735, '2022-08-03', '4455', 'temperature', '2022-08-03 12:27:57', 20);
INSERT INTO `sensor` (`idsensor`, `tgl`, `boardkey`, `sensor`, `date`, `data`) VALUES
(736, '2022-08-03', '4455', 'temperature', '2022-08-03 13:00:05', 20),
(737, '2022-08-09', 'SE003', 'temperature', '2022-08-09 13:01:49', 50),
(738, '2022-09-28', 'SE003', 'temperature', '2022-09-28 15:18:31', 23),
(739, '2022-09-28', 'SE003', 'temperature', '2022-09-28 15:23:08', 23),
(740, '2022-09-28', 'SE003', 'temperature', '2022-09-28 15:48:34', 23),
(741, '2022-09-28', 'SE003', 'temperature', '2022-09-28 15:49:36', 23),
(742, '2022-09-28', 'SE003', 'temperatre', '2022-09-28 15:54:43', 23),
(743, '2022-09-28', 'SE003', 'temperature', '2022-09-28 15:58:12', 23),
(744, '2022-09-28', 'SE003', 'Temperature', '2022-09-28 16:09:52', 23),
(745, '2022-09-28', 'SE003', 'Humidity', '2022-09-28 16:09:52', 87),
(746, '2022-09-28', 'SE003', 'Powermeter', '2022-09-28 16:09:52', 43);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `nama` char(30) NOT NULL,
  `id` tinyint NOT NULL,
  `img` char(30) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`nama`, `id`, `img`, `about`) VALUES
('ok', 1, 'img_1637565165.jpg', 'oke'),
('yes', 2, 'img_1637565154.jpg', 'mantap'),
('aajaj', 3, 'img_1637566541.png', 'aajajjasksjsjadff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` char(10) NOT NULL,
  `status` tinyint NOT NULL,
  `gender` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `level`, `status`, `gender`) VALUES
(01, 'aqli.serdadu', '$2y$10$.jeocNdC5dLvs.m2ppvSSuyP.AMpoFoG790HqM56UclWjNQynxQ/K', 'admin', 1, 'userL.png'),
(03, 'hardy', '$2y$10$SDohZ17sYqBCXKKenzo5E.P/mEivXA4kfBbRW3PFUTsELMv9nItIW', 'admin', 1, 'userL.png');

-- --------------------------------------------------------

--
-- Table structure for table `usercontrol`
--

CREATE TABLE `usercontrol` (
  `iduser` int NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` char(10) NOT NULL,
  `status` tinyint NOT NULL,
  `gender` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` char(20) NOT NULL,
  `aktifasi` date DEFAULT NULL,
  `endaktifasi` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercontrol`
--

INSERT INTO `usercontrol` (`iduser`, `username`, `password`, `level`, `status`, `gender`, `email`, `img`, `aktifasi`, `endaktifasi`) VALUES
(1, 'intan', '$2y$10$GtRRq1dcPMDwg6LY9tkXtOYjKpU8kevzpaP/xrvyWzFQ2n3Z40.hW', 'member', 1, 'female', 'aqli.serdadu2@gmail.com', 'akun_1655906645.png', '2022-06-18', '2022-06-18'),
(3, 'abu', '$2y$10$gejiPb5.L6DHlmEQg1zeBuqRikvMmUIRR9nqrcJJs2yhaCJd4IRRW', 'admin', 1, 'male', 'aqli.serdadu@gmail.com', 'akun_1655916872.jpg', '0000-00-00', '0000-00-00'),
(4, 'tatah', '$2y$10$ReM5XIxDFFbP4Lv/f4Yme.INVLByB03DlGutYHnuX4moDbXO3fO3q', 'member', 1, 'male', 'admin@gmail.com', 'userL.png', NULL, NULL),
(5, 'intanan', '$2y$10$bhIrDbrd4TKrDDLtXTbKKODbaC7i6o2vo8Qj3T.GSw0/KQwJXJDgK', 'member', 1, 'female', 'intan@gmail.com', 'userP.png', NULL, NULL),
(6, 'candra', '$2y$10$kUvJlm2sizEDWAaZwAbrLuP2dIPfJrQzrwtwiFWaetemiF62nPjii', 'Member', 1, 'male', 'can@gmail.com', 'userL.png', '2022-07-01', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `iduser` int NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` char(10) NOT NULL,
  `status` tinyint NOT NULL,
  `gender` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` char(20) NOT NULL,
  `aktifasi` date DEFAULT NULL,
  `endaktifasi` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`iduser`, `username`, `password`, `level`, `status`, `gender`, `email`, `img`, `aktifasi`, `endaktifasi`) VALUES
(1, 'intan', '$2y$10$GtRRq1dcPMDwg6LY9tkXtOYjKpU8kevzpaP/xrvyWzFQ2n3Z40.hW', 'member', 1, 'female', 'aqli.serdadu2@gmail.com', 'akun_1655906645.png', '2022-06-18', '2022-06-18'),
(3, 'abu', '$2y$10$gejiPb5.L6DHlmEQg1zeBuqRikvMmUIRR9nqrcJJs2yhaCJd4IRRW', 'admin', 1, 'male', 'aqli.serdadu@gmail.com', 'akun_1655916872.jpg', '0000-00-00', '0000-00-00'),
(4, 'tatah', '$2y$10$K3.HCqaNOzA6fc9eJLvmjuDIJsvtz0XyD.av/WeRW79mz/CY1s1Sa', 'member', 1, 'male', 'admin@gmail.com', 'userL.png', NULL, NULL),
(5, 'intanan', '$2y$10$bhIrDbrd4TKrDDLtXTbKKODbaC7i6o2vo8Qj3T.GSw0/KQwJXJDgK', 'member', 1, 'female', 'intan@gmail.com', 'userP.png', NULL, NULL),
(6, 'candra', '$2y$10$kUvJlm2sizEDWAaZwAbrLuP2dIPfJrQzrwtwiFWaetemiF62nPjii', 'Member', 1, 'male', 'can@gmail.com', 'userL.png', '2022-07-01', '2022-08-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idbanner`);

--
-- Indexes for table `boardkey`
--
ALTER TABLE `boardkey`
  ADD PRIMARY KEY (`boardkey`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `daftarsensor`
--
ALTER TABLE `daftarsensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`);

--
-- Indexes for table `mqtt_board`
--
ALTER TABLE `mqtt_board`
  ADD PRIMARY KEY (`idboard`);

--
-- Indexes for table `mqtt_category_img`
--
ALTER TABLE `mqtt_category_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mqtt_history`
--
ALTER TABLE `mqtt_history`
  ADD PRIMARY KEY (`idhistory`);

--
-- Indexes for table `mqtt_icon`
--
ALTER TABLE `mqtt_icon`
  ADD PRIMARY KEY (`idicon`);

--
-- Indexes for table `mqtt_pub_sub`
--
ALTER TABLE `mqtt_pub_sub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idboard` (`idboard`);

--
-- Indexes for table `mqtt_user`
--
ALTER TABLE `mqtt_user`
  ADD PRIMARY KEY (`idboard`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`judul`),
  ADD KEY `id` (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`idsensor`),
  ADD KEY `boardkey` (`boardkey`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `usercontrol`
--
ALTER TABLE `usercontrol`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `idbanner` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `boardkey`
--
ALTER TABLE `boardkey`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftarsensor`
--
ALTER TABLE `daftarsensor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mqtt_category_img`
--
ALTER TABLE `mqtt_category_img`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mqtt_history`
--
ALTER TABLE `mqtt_history`
  MODIFY `idhistory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `mqtt_icon`
--
ALTER TABLE `mqtt_icon`
  MODIFY `idicon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mqtt_pub_sub`
--
ALTER TABLE `mqtt_pub_sub`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `idsensor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=747;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usercontrol`
--
ALTER TABLE `usercontrol`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
