-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 08:05 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codewell_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `codewell_area`
--

CREATE TABLE IF NOT EXISTS `codewell_area` (
  `idAREA` int(11) NOT NULL,
  `idREGION` int(11) NOT NULL,
  `nameAREA` varchar(40) NOT NULL,
  `createdateAREA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusAREA` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_area`
--

INSERT INTO `codewell_area` (`idAREA`, `idREGION`, `nameAREA`, `createdateAREA`, `statusAREA`) VALUES
(1, 1, 'Tiban', '2016-07-19 15:02:34', 1),
(2, 1, 'Tanjung Uncang', '2016-07-28 06:30:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_aroma`
--

CREATE TABLE IF NOT EXISTS `codewell_aroma` (
  `idAROMA` int(11) NOT NULL,
  `idREGION` int(11) NOT NULL,
  `nameAROMA` varchar(50) NOT NULL,
  `createdateAROMA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusAROMA` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_aroma`
--

INSERT INTO `codewell_aroma` (`idAROMA`, `idREGION`, `nameAROMA`, `createdateAROMA`, `statusAROMA`) VALUES
(1, 1, 'Romance', '2016-12-06 02:27:19', 1),
(2, 1, 'Mystique', '2016-12-06 02:27:21', 1),
(3, 4, 'Fusion', '2016-12-06 02:27:24', 1),
(4, 4, 'Passions', '2016-12-06 02:27:27', 1),
(5, 3, 'Lavender', '2016-12-06 11:52:50', 1),
(6, 3, 'Rose Citrus', '2016-12-06 11:53:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_categorysatuan`
--

CREATE TABLE IF NOT EXISTS `codewell_categorysatuan` (
  `idCATEGORYSATUAN` int(11) NOT NULL,
  `nameCATEGORYSATUAN` varchar(50) NOT NULL,
  `createdateCATEGORYSATUAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusCATEGORYSATUAN` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_categorysatuan`
--

INSERT INTO `codewell_categorysatuan` (`idCATEGORYSATUAN`, `nameCATEGORYSATUAN`, `createdateCATEGORYSATUAN`, `statusCATEGORYSATUAN`) VALUES
(1, 'Atasan', '2016-11-18 14:47:05', 1),
(2, 'Bawahan', '2016-11-18 15:59:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `codewell_ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `codewell_ci_sessions`
--

INSERT INTO `codewell_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('7b42157874cfd6e77d6b060b5c026f7c87db6c47', '::1', 1485431569, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433313438313b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('e652b147a0f9cd274733807c565e5187f8880d92', '::1', 1485432224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433323231363b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('4ba00b9356d3d7336e3926cc97008358e4841f96', '::1', 1485433058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433323833323b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('bf75ea55998488f03c3cdad72de6826b341014e1', '::1', 1485433359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433333133333b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('7008a031fd637c432114706db29d16143a5c6df1', '::1', 1485435443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433353433393b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('ab98a7fa0c7097e95a41652a2c5532ffb2bbac11', '::1', 1485436721, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433353931353b4e616d657c733a393a224c61756e6472792032223b456d61696c7c733a31373a226c61756e64727932406d61696c2e636f6d223b6964555345527c733a313a2233223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b),
('b95ce0d17e1eddefd1e29cb821bbe872df4950af', '::1', 1485438296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433363732353b4e616d657c733a393a224c61756e6472792032223b456d61696c7c733a31373a226c61756e64727932406d61696c2e636f6d223b6964555345527c733a313a2233223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b),
('2348570bad601edd67f2cf57603b572e314d0850', '::1', 1485437219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433373131363b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('cf495a7c8864724b514c0e2dd1e4f309975f0fcd', '::1', 1485437616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433373535383b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('20d9c217eafabaa78b2c5674d6e6b7b2fcda9605', '::1', 1485791440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353739313434303b),
('bfcb6752bc40390f47f65336f4f37da8f2414283', '::1', 1485791411, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353739313231313b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('2719b8ca084d086d36e288e0bc360bdebd8df798', '::1', 1485790922, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353739303932323b),
('bcaa654e4c5de06babc2086d4f1236e7dce8fd8f', '::1', 1485788787, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738383738373b),
('832413f5c177fc1cef45b3691dcc8edc98dc57bb', '::1', 1485790410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353739303430343b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('d6c3ee2d8acb04a2bc184359444b787c2c7d605a', '::1', 1485788102, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738383130323b),
('c3cc2cf118a8e214f0cba3aa5165326a0e1a4141', '::1', 1485788134, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738383131323b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('eb3f5c067d35c674c75b645af8fbfc4640681d7b', '::1', 1485788097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738373737323b4e616d657c733a393a224c61756e6472792031223b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2232223b726f6c65555345527c693a32363b),
('8d016191dcb36172196bd3e17e3b37980f84ada1', '::1', 1485785466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738353332303b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b4e616d657c733a393a224c61756e6472792031223b),
('e1f29aebc9ade6a9093a49059480a8479b223d2e', '::1', 1485785317, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738343936353b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b4e616d657c733a393a224c61756e6472792031223b),
('9bbb37e04678f64d40b413663cbd3bc389842478', '::1', 1485785709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738353533313b4e616d657c733a393a224c61756e6472792031223b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2232223b726f6c65555345527c693a32363b),
('c61e2825873acbd422fac508a4c3a3f602598faa', '::1', 1485431451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433313137313b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('bbd84448ae9b45b9b80945e573d06da7799cfe4f', '::1', 1485784227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738333730313b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b4e616d657c733a393a224c61756e6472792031223b),
('d984cba740aabb5c5a6aa80c2ce0bf1971c81075', '::1', 1485784965, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738343232393b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b4e616d657c733a393a224c61756e6472792031223b),
('7e43754342c0663e3a167ffd81028a6b17b3c3ae', '::1', 1485783701, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738333339323b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b4e616d657c733a393a224c61756e6472792031223b),
('dbcac328c2671439a4f13770a48082ad9fa7d31d', '::1', 1485782993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738323936303b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('e7cace1beaaf7b1e9c07a114fa22081fd7d57c86', '::1', 1485783390, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738333031393b456d61696c7c733a31393a22626f7340692d6c61756e6472792e636f2e6964223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('07d4000617aebdfc5b51cf56a8351fb629c07d15', '::1', 1485782926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738323633323b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('6bf5a1db060b5002731370a513df269b28e985ef', '::1', 1485438319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433383133323b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('699608f6f1b2ff89a030a91b0f678f3bf6f655ef', '::1', 1485439858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433393630393b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('b94738bd5c7a3c44b94d476f19a367c3b87fefe1', '::1', 1485780053, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353738303035313b),
('03f5b91ad1fbb96680207a745d6e07ce67f7c867', '::1', 1485438299, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433383239393b),
('caf2bc6cc95ca0562b0c0c7d454f8c0078d755f4', '::1', 1485439244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438353433393233323b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_customers`
--

CREATE TABLE IF NOT EXISTS `codewell_customers` (
  `idCUSTOMER` int(11) NOT NULL,
  `nameCUSTOMER` varchar(50) NOT NULL,
  `emailCUSTOMER` varchar(50) NOT NULL,
  `passwordCUSTOMER` varchar(150) NOT NULL,
  `addressCUSTOMER` varchar(255) NOT NULL,
  `telephoneCUSTOMER` bigint(15) NOT NULL,
  `mobileCUSTOMER` bigint(15) NOT NULL,
  `genderCUSTOMER` int(1) NOT NULL,
  `subscribeCUSTOMER` int(1) NOT NULL,
  `createdateCUSTOMER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCUSTOMER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusCUSTOMER` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_customers`
--

INSERT INTO `codewell_customers` (`idCUSTOMER`, `nameCUSTOMER`, `emailCUSTOMER`, `passwordCUSTOMER`, `addressCUSTOMER`, `telephoneCUSTOMER`, `mobileCUSTOMER`, `genderCUSTOMER`, `subscribeCUSTOMER`, `createdateCUSTOMER`, `updatedateCUSTOMER`, `statusCUSTOMER`) VALUES
(1, 'Andhana', 'mamatjualtomat@gmail.com', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 'Tiban Koperasi Blok T No. 34', 778432221, 8566688840, 0, 0, '2016-11-16 03:15:28', '2017-01-04 13:27:23', 1),
(2, 'Angel', 'angel_wap@ymail.com', '854229cc91ef8b4cd67de236c7f4e08e34a02df5d89c976e152e9645fadef8522a0d6fb974c11cf4c740ddc219fe2a7596f9a235ea9210febdbc655e443da8ff', '', 0, 0, 0, 0, '2016-11-30 10:03:59', '2016-11-30 10:04:26', 1),
(3, 'Testing', 'olong@gmail.com', '8999f7ea9ee40b43afe63c38b7818f920e47b519474fd0d0fe4e885240dad5d428660996dbea1cfdc8338de4c6ef12f12a12bb83610aaa92e84343657e47774b', '', 0, 0, 0, 0, '2017-01-04 13:48:17', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_loginattempts`
--

CREATE TABLE IF NOT EXISTS `codewell_loginattempts` (
  `idATTEMPTS` int(11) NOT NULL,
  `idUSER` int(2) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_loginattempts`
--

INSERT INTO `codewell_loginattempts` (`idATTEMPTS`, `idUSER`, `timeATTEMPTS`) VALUES
(5, 1, '1484053790');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_loginattempts_customer`
--

CREATE TABLE IF NOT EXISTS `codewell_loginattempts_customer` (
  `idATTEMPTS` int(11) NOT NULL,
  `idCUSTOMER` int(2) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_loginattempts_customer`
--

INSERT INTO `codewell_loginattempts_customer` (`idATTEMPTS`, `idCUSTOMER`, `timeATTEMPTS`) VALUES
(1, 1, '1483537622'),
(2, 1, '1484050860'),
(3, 1, '1485168251'),
(4, 1, '1485182305'),
(5, 1, '1485264175'),
(6, 1, '1485431195');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_loginattempts_partner`
--

CREATE TABLE IF NOT EXISTS `codewell_loginattempts_partner` (
  `idATTEMPTS` int(11) NOT NULL,
  `idPARTNER` int(2) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `codewell_orders`
--

CREATE TABLE IF NOT EXISTS `codewell_orders` (
  `idORDER` int(11) NOT NULL,
  `idPARTNER` int(4) NOT NULL,
  `idCUSTOMER` int(4) NOT NULL,
  `idAROMA` int(4) NOT NULL,
  `idREGION` int(4) NOT NULL,
  `idSERVICES` int(4) NOT NULL,
  `idPACKAGE` int(4) NOT NULL,
  `kodeORDER` varchar(40) NOT NULL,
  `pickuptimeORDER` time NOT NULL,
  `pickupdateORDER` date NOT NULL,
  `pickupfinisheddateORDER` date NOT NULL,
  `pickupfinishedtimeORDER` time NOT NULL,
  `pickupADDRESSORDERKOTOR` text NOT NULL,
  `pickupADDRESSORDERBERSIH` text NOT NULL,
  `notesORDER` text NOT NULL,
  `rejectedmessagesORDER` text NOT NULL,
  `beratORDER` varchar(30) NOT NULL,
  `priceORDER` decimal(50,0) NOT NULL,
  `createdateORDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateORDER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusORDER` int(1) NOT NULL DEFAULT '1' COMMENT '1=>Dalam proses\r\n2=>Baju dicuci\r\n3=>Tunggu pembayaran\r\n4=> Menunggu Proses Admin\r\n5=> Pembayaran berhasil (Credit card)\r\n6=> Pembayaran dibatalkan oleh admin(Credit Card)\r\n7=>Pembayaran berhasil (Selain credit card)\r\n8=> Menunggu pembayaran anda (Selain credit card)\r\n9=>Pembayaran dibatalkan oleh admin(Selain credit card)',
  `isreadadminORDER` int(1) NOT NULL,
  `isreadORDER` int(1) NOT NULL DEFAULT '0' COMMENT '0 => belum baca \r\n1 => udah baca'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_orders`
--

INSERT INTO `codewell_orders` (`idORDER`, `idPARTNER`, `idCUSTOMER`, `idAROMA`, `idREGION`, `idSERVICES`, `idPACKAGE`, `kodeORDER`, `pickuptimeORDER`, `pickupdateORDER`, `pickupfinisheddateORDER`, `pickupfinishedtimeORDER`, `pickupADDRESSORDERKOTOR`, `pickupADDRESSORDERBERSIH`, `notesORDER`, `rejectedmessagesORDER`, `beratORDER`, `priceORDER`, `createdateORDER`, `updatedateORDER`, `statusORDER`, `isreadadminORDER`, `isreadORDER`) VALUES
(1, 2, 1, 5, 3, 1, 3, 'IL20170130VKDJ', '15:00:00', '2017-01-31', '2017-02-02', '18:30:00', 'Tiban Impian Blok S No. 45', 'Tiban Impian Blok S No. 45', '', '', '6 KG', '75000', '2017-01-30 13:29:33', '2017-01-30 15:48:43', 7, 1, 1),
(2, 2, 1, 1, 1, 2, 2, 'IL20170130IZJA', '16:00:00', '2017-02-01', '2017-01-30', '00:00:00', 'Tiban Impian No. 78 Blok Y', '', '', '', '', '0', '2017-01-30 15:49:57', '2017-01-30 15:50:28', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_packages`
--

CREATE TABLE IF NOT EXISTS `codewell_packages` (
  `idPACKAGE` int(11) NOT NULL,
  `namePACKAGE` varchar(50) NOT NULL,
  `descriptionPACKAGE` text NOT NULL,
  `createdatePACKAGE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusPACKAGE` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_packages`
--

INSERT INTO `codewell_packages` (`idPACKAGE`, `namePACKAGE`, `descriptionPACKAGE`, `createdatePACKAGE`, `statusPACKAGE`) VALUES
(1, 'Umum / Regular', '<ul>\r\n<li>Paket Reguler merupakan paket standar.</li>\r\n<li>Selesai dalam waktu 5 (lima) hari</li>\r\n</ul>', '2016-10-13 12:34:30', 1),
(2, 'Premium', '<ul>\r\n<li>Paket Premium menggunakan deterjen dan pewangi kelas premium (Rinso dan Downy).</li>\r\n<li>Selesai dalam waktu 5 (lima) hari</li>\r\n</ul>', '2016-10-13 12:35:21', 1),
(3, 'Express (5 jam selesai)', '<ul>\r\n<li>Paket Express merupakan paket standard.</li>\r\n<li>Selesai dalam waktu 1 (satu) hari</li>\r\n</ul>', '2016-10-13 12:35:57', 1),
(4, 'Express Premium (5 jam selesai)', '<ul>\r\n<li>Paket Express Premium menggunakan deterjen dan pewangi kelas premium (Rinso dan Downy).</li>\r\n<li>Selesai dalam waktu 1 (satu) hari</li>\r\n</ul>', '2016-10-13 12:41:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_partner`
--

CREATE TABLE IF NOT EXISTS `codewell_partner` (
  `idPARTNER` int(11) NOT NULL,
  `namePARTNER` varchar(60) NOT NULL,
  `emailPARTNER` varchar(60) NOT NULL,
  `passwordPARTNER` varchar(150) NOT NULL,
  `telephonePARTNER` bigint(20) NOT NULL,
  `addressPARTNER` varchar(255) NOT NULL,
  `idREGION` varchar(4) NOT NULL,
  `statusPARTNER` int(1) NOT NULL,
  `ondutyPARTNER` int(1) NOT NULL DEFAULT '0' COMMENT '0 =>not on duty\r\n1 =>on duty',
  `createdatePARTNER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedatePARTNER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_partner`
--

INSERT INTO `codewell_partner` (`idPARTNER`, `namePARTNER`, `emailPARTNER`, `passwordPARTNER`, `telephonePARTNER`, `addressPARTNER`, `idREGION`, `statusPARTNER`, `ondutyPARTNER`, `createdatePARTNER`, `updatedatePARTNER`) VALUES
(1, 'i-Laundry', 'admin@i-laundry.co.id', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 81268018644, 'Baloi Permata regency', '15', 1, 0, '2016-11-17 15:21:20', '2017-01-04 12:35:58'),
(2, 'Laundry 1', 'cipoksantai@gmail.com', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 81268018644, 'Tiban Koperasi Blok T No. 34', '1', 1, 0, '2016-10-31 14:37:24', '2017-01-30 13:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_promo`
--

CREATE TABLE IF NOT EXISTS `codewell_promo` (
  `idPROMO` int(11) NOT NULL,
  `idPARTNER` int(11) NOT NULL,
  `namePROMO` varchar(50) NOT NULL,
  `descriptionPROMO` varchar(255) NOT NULL,
  `startPROMO` date NOT NULL,
  `endPROMO` date NOT NULL,
  `createdatePROMO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusPROMO` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_promo`
--

INSERT INTO `codewell_promo` (`idPROMO`, `idPARTNER`, `namePROMO`, `descriptionPROMO`, `startPROMO`, `endPROMO`, `createdatePROMO`, `statusPROMO`) VALUES
(1, 1, 'November Ceria', 'Akan ada gratis 25 tahun untuk kamu yang sering galau!!', '2016-11-17', '2017-01-17', '2016-11-17 15:39:12', 1),
(2, 1, 'Laundry terbaik', 'Laundry terbaik dan selalu terdepan! Eh! memang iklan yamaha! ih! bukan tau! jadi apa dong ini! ini cuman iklan dan tidak lebih daripada itu! ayoo kumpulkan kesedihan dan lotere anda untuk selalu begitu!', '2016-11-18', '2017-01-18', '2016-11-17 16:51:45', 1),
(3, 1, 'Test', 'Test', '2017-01-05', '2017-01-25', '2017-01-05 09:47:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_regions`
--

CREATE TABLE IF NOT EXISTS `codewell_regions` (
  `idREGION` int(11) NOT NULL,
  `nameREGION` varchar(50) NOT NULL,
  `createdateREGION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusREGION` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_regions`
--

INSERT INTO `codewell_regions` (`idREGION`, `nameREGION`, `createdateREGION`, `statusREGION`) VALUES
(1, 'Tiban', '2016-10-31 13:16:39', 1),
(2, 'Tanjung Piayu', '2016-10-31 13:16:53', 1),
(3, 'Batam Kota', '2016-11-28 11:53:57', 1),
(4, 'Batu Aji', '2016-11-28 11:54:09', 1),
(5, 'Batu Ampar', '2016-11-28 11:54:19', 1),
(6, 'Belakang Padang', '2016-11-28 11:54:27', 1),
(7, 'Bengkong', '2016-11-28 11:54:40', 1),
(8, 'Bulang', '2016-11-28 11:54:48', 1),
(9, 'Galang', '2016-11-28 11:54:56', 1),
(10, 'Lubuk Baja', '2016-11-28 11:55:02', 1),
(11, 'Nongsa', '2016-11-28 11:55:17', 1),
(12, 'Sagulung', '2016-11-28 11:55:27', 1),
(13, 'Sekupang', '2016-11-28 11:55:34', 1),
(14, 'Sungai Beduk', '2016-11-29 13:49:57', 1),
(15, 'Baloi', '2016-11-29 13:49:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_satuan`
--

CREATE TABLE IF NOT EXISTS `codewell_satuan` (
  `idSATUAN` int(11) NOT NULL,
  `idCATEGORYSATUAN` int(2) NOT NULL,
  `nameSATUAN` varchar(50) NOT NULL,
  `priceSATUAN` varchar(10) NOT NULL,
  `createdateSATUAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusSATUAN` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_satuan`
--

INSERT INTO `codewell_satuan` (`idSATUAN`, `idCATEGORYSATUAN`, `nameSATUAN`, `priceSATUAN`, `createdateSATUAN`, `statusSATUAN`) VALUES
(1, 1, 'Product 1', '9000', '2016-11-18 14:52:24', 1),
(2, 1, 'Product 2', '9000', '2016-11-18 16:00:06', 1),
(3, 1, 'Product 3', '9000', '2016-11-18 16:00:20', 1),
(4, 2, 'Bawahan 1', '8000', '2016-11-18 16:00:51', 1),
(5, 2, 'Bawahan 2', '5000', '2016-11-18 16:01:04', 1),
(6, 2, 'Bawahan 3', '4500', '2016-11-18 16:01:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_services`
--

CREATE TABLE IF NOT EXISTS `codewell_services` (
  `idSERVICES` int(11) NOT NULL,
  `nameSERVICES` varchar(100) NOT NULL,
  `pricesSERVICES` int(12) NOT NULL,
  `createdateSERVICES` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusSERVICES` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_services`
--

INSERT INTO `codewell_services` (`idSERVICES`, `nameSERVICES`, `pricesSERVICES`, `createdateSERVICES`, `statusSERVICES`) VALUES
(1, 'Cuci Saja', 2000, '2016-10-13 11:56:21', 1),
(2, 'Cuci Gosok', 5000, '2016-07-19 15:07:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_users`
--

CREATE TABLE IF NOT EXISTS `codewell_users` (
  `idUSER` int(11) NOT NULL,
  `emailUSER` varchar(50) NOT NULL,
  `passwordUSER` varchar(150) NOT NULL,
  `roleUSER` int(1) NOT NULL COMMENT '22 => Administrator, 24 =>Karyawan Biasa',
  `createdateUSER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusUSER` int(1) NOT NULL COMMENT '0=>full access, 12=>administrator, 22=>karyawan'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_users`
--

INSERT INTO `codewell_users` (`idUSER`, `emailUSER`, `passwordUSER`, `roleUSER`, `createdateUSER`, `statusUSER`) VALUES
(1, 'bos@i-laundry.co.id', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 22, '2016-12-06 12:04:09', 1),
(2, 'karyawan@i-laundry.co.id', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 24, '2016-07-25 12:34:15', 1),
(3, 'magicwarms@gmail.com', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 21, '2017-01-02 05:28:40', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codewell_area`
--
ALTER TABLE `codewell_area`
  ADD PRIMARY KEY (`idAREA`);

--
-- Indexes for table `codewell_aroma`
--
ALTER TABLE `codewell_aroma`
  ADD PRIMARY KEY (`idAROMA`);

--
-- Indexes for table `codewell_categorysatuan`
--
ALTER TABLE `codewell_categorysatuan`
  ADD PRIMARY KEY (`idCATEGORYSATUAN`);

--
-- Indexes for table `codewell_ci_sessions`
--
ALTER TABLE `codewell_ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `codewell_customers`
--
ALTER TABLE `codewell_customers`
  ADD PRIMARY KEY (`idCUSTOMER`);

--
-- Indexes for table `codewell_loginattempts`
--
ALTER TABLE `codewell_loginattempts`
  ADD PRIMARY KEY (`idATTEMPTS`);

--
-- Indexes for table `codewell_loginattempts_customer`
--
ALTER TABLE `codewell_loginattempts_customer`
  ADD PRIMARY KEY (`idATTEMPTS`);

--
-- Indexes for table `codewell_loginattempts_partner`
--
ALTER TABLE `codewell_loginattempts_partner`
  ADD PRIMARY KEY (`idATTEMPTS`);

--
-- Indexes for table `codewell_orders`
--
ALTER TABLE `codewell_orders`
  ADD PRIMARY KEY (`idORDER`);

--
-- Indexes for table `codewell_packages`
--
ALTER TABLE `codewell_packages`
  ADD PRIMARY KEY (`idPACKAGE`);

--
-- Indexes for table `codewell_partner`
--
ALTER TABLE `codewell_partner`
  ADD PRIMARY KEY (`idPARTNER`);

--
-- Indexes for table `codewell_promo`
--
ALTER TABLE `codewell_promo`
  ADD PRIMARY KEY (`idPROMO`);

--
-- Indexes for table `codewell_regions`
--
ALTER TABLE `codewell_regions`
  ADD PRIMARY KEY (`idREGION`);

--
-- Indexes for table `codewell_satuan`
--
ALTER TABLE `codewell_satuan`
  ADD PRIMARY KEY (`idSATUAN`);

--
-- Indexes for table `codewell_services`
--
ALTER TABLE `codewell_services`
  ADD PRIMARY KEY (`idSERVICES`);

--
-- Indexes for table `codewell_users`
--
ALTER TABLE `codewell_users`
  ADD PRIMARY KEY (`idUSER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codewell_area`
--
ALTER TABLE `codewell_area`
  MODIFY `idAREA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_aroma`
--
ALTER TABLE `codewell_aroma`
  MODIFY `idAROMA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_categorysatuan`
--
ALTER TABLE `codewell_categorysatuan`
  MODIFY `idCATEGORYSATUAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_customers`
--
ALTER TABLE `codewell_customers`
  MODIFY `idCUSTOMER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `codewell_loginattempts`
--
ALTER TABLE `codewell_loginattempts`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `codewell_loginattempts_customer`
--
ALTER TABLE `codewell_loginattempts_customer`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_loginattempts_partner`
--
ALTER TABLE `codewell_loginattempts_partner`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `codewell_orders`
--
ALTER TABLE `codewell_orders`
  MODIFY `idORDER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_packages`
--
ALTER TABLE `codewell_packages`
  MODIFY `idPACKAGE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_partner`
--
ALTER TABLE `codewell_partner`
  MODIFY `idPARTNER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_promo`
--
ALTER TABLE `codewell_promo`
  MODIFY `idPROMO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `codewell_regions`
--
ALTER TABLE `codewell_regions`
  MODIFY `idREGION` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `codewell_satuan`
--
ALTER TABLE `codewell_satuan`
  MODIFY `idSATUAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_services`
--
ALTER TABLE `codewell_services`
  MODIFY `idSERVICES` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_users`
--
ALTER TABLE `codewell_users`
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
