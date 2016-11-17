-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 12:06 AM
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
  `nameAROMA` varchar(50) NOT NULL,
  `createdateAROMA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusAROMA` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_aroma`
--

INSERT INTO `codewell_aroma` (`idAROMA`, `nameAROMA`, `createdateAROMA`, `statusAROMA`) VALUES
(1, 'Romance', '2016-08-05 15:08:55', 1),
(2, 'Mystique', '2016-08-05 15:09:19', 1),
(3, 'Fusion', '2016-08-05 15:09:34', 1),
(4, 'Passion', '2016-08-05 15:09:46', 1);

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
('83225cd37fc9c48ac67ae789a18e757c70a6e99b', '::1', 1479395457, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339333733363b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('257bf38fd3e7b7825ecd0b51d967359426a10055', '::1', 1479393735, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339313536363b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('f8d6a1047a9104153b68d15173c8b01ac1e81ca2', '::1', 1479396244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339353533353b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('6808d5d3e1cdb64a0319f703de65cd0d2e7be2ac', '::1', 1479391565, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339303935393b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('6d8f53183fde531183df490135c8dde0f329b5ce', '::1', 1479401737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393430313333383b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('307a290f467018242bbd1ebac8a3ff29897cf808', '::1', 1479402045, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393430313734313b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('fea00615c34fda4d76eb85191be144b22ea2551a', '::1', 1479402330, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393430323333303b),
('a3423d9df884055d0f36407675623065a741ba55', '::1', 1479402279, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393430323237393b),
('c9dadd1fbc5d383471c267c91499d8339fcac235', '::1', 1479400687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339393531323b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('c8a68baff75e8aca9fccb6ba56d0f5f63a749b2f', '::1', 1479396991, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339363634353b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('b7e91f1a4e7e58109546a36404b2713be28b8519', '::1', 1479397298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339363939323b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('aa704eb30f45e4b62dc1905fbbc5677a35df70d0', '::1', 1479397682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339373330333b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('66fea82e500fbcffea151ccb0a03e56b76759ed0', '::1', 1479398008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339373638353b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('b95276d4551377744a2c3c923b61a0ed47b0ca55', '::1', 1479398230, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339383031323b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('cdc5157a48ba2537e391fde5df55e209c59c1c6d', '::1', 1479399072, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339383736383b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('de34dc43c7c1506a75a53f3b098529da624095ba', '::1', 1479399512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339393037323b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('e845fdf213d6b384408a816fcbc51c982f836d4f', '::1', 1479401334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393430313033333b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('d0142a4c85da4268a9d524319429afa148906fe6', '::1', 1479401032, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393430303638383b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('8d23b9c6859097a4566627729b4a1028817846ff', '::1', 1479398765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339383337363b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('747866ce857eb3515fbd616d70a687756b8c90e6', '::1', 1479396641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393339363234353b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_customers`
--

INSERT INTO `codewell_customers` (`idCUSTOMER`, `nameCUSTOMER`, `emailCUSTOMER`, `passwordCUSTOMER`, `addressCUSTOMER`, `telephoneCUSTOMER`, `mobileCUSTOMER`, `genderCUSTOMER`, `subscribeCUSTOMER`, `createdateCUSTOMER`, `updatedateCUSTOMER`, `statusCUSTOMER`) VALUES
(1, 'Andhana Utama', 'magicwarms@gmail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 'Tiban Koperasi Blok T No. 34', 778432221, 8566688840, 0, 0, '2016-11-16 03:15:28', '2016-11-17 12:09:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_orders`
--

CREATE TABLE IF NOT EXISTS `codewell_orders` (
  `idORDER` int(11) NOT NULL,
  `idPARTNER` int(4) NOT NULL,
  `idCUSTOMER` int(4) NOT NULL,
  `idAROMA` int(4) NOT NULL,
  `idSERVICES` int(4) NOT NULL,
  `idPACKAGE` int(4) NOT NULL,
  `idPAYMENT` int(4) NOT NULL,
  `kodeORDER` varchar(40) NOT NULL,
  `pickuptimeORDER` datetime NOT NULL,
  `pickupfinishedtimeORDER` datetime NOT NULL,
  `pickupADDRESSORDERKOTOR` text NOT NULL,
  `pickupADDRESSORDERBERSIH` text NOT NULL,
  `notesORDER` text NOT NULL,
  `rejectedmessagesORDER` text NOT NULL,
  `beratORDER` varchar(30) NOT NULL,
  `priceORDER` decimal(50,0) NOT NULL,
  `createdateORDER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedateORDER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `statusORDER` int(1) NOT NULL DEFAULT '1' COMMENT '1=>Dalam proses\r\n2=>Baju dicuci\r\n3=>Tunggu pembayaran\r\n4=>Selesai Order',
  `isreadadminORDER` int(1) NOT NULL,
  `isreadORDER` int(1) NOT NULL DEFAULT '0' COMMENT '0 => belum baca \r\n1 => udah baca'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_orders`
--

INSERT INTO `codewell_orders` (`idORDER`, `idPARTNER`, `idCUSTOMER`, `idAROMA`, `idSERVICES`, `idPACKAGE`, `idPAYMENT`, `kodeORDER`, `pickuptimeORDER`, `pickupfinishedtimeORDER`, `pickupADDRESSORDERKOTOR`, `pickupADDRESSORDERBERSIH`, `notesORDER`, `rejectedmessagesORDER`, `beratORDER`, `priceORDER`, `createdateORDER`, `updatedateORDER`, `statusORDER`, `isreadadminORDER`, `isreadORDER`) VALUES
(1, 1, 1, 1, 1, 1, 2, 'IL201610131', '2016-07-25 20:33:08', '2016-11-07 08:03:00', 'Tiban Koperasi Blok T No. 34', 'Tiban Kampung Blok S5 No. 70', 'cepat ya ah!', '', '4.5 KG', '50000', '2016-11-04 14:59:34', '2016-11-07 13:10:25', 4, 0, 1),
(2, 4, 1, 1, 2, 2, 2, 'IL201610132', '2016-07-26 20:33:08', '2016-11-18 00:00:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '1 KG', '50000', '2016-10-13 11:02:33', '2016-11-17 17:02:54', 1, 1, 1),
(3, 0, 1, 1, 1, 2, 2, 'IL201610133', '2016-07-26 20:33:08', '2016-07-27 20:33:18', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '', '50000', '2016-10-13 11:02:33', '2016-11-17 16:55:41', 1, 1, 0),
(4, 0, 1, 1, 2, 2, 2, 'IL201610134', '2016-07-26 20:33:08', '2016-07-27 20:33:18', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '', '50000', '2016-10-13 11:02:33', '2016-11-07 12:40:40', 1, 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_partner`
--

INSERT INTO `codewell_partner` (`idPARTNER`, `namePARTNER`, `emailPARTNER`, `passwordPARTNER`, `telephonePARTNER`, `addressPARTNER`, `idREGION`, `statusPARTNER`, `ondutyPARTNER`, `createdatePARTNER`, `updatedatePARTNER`) VALUES
(1, 'i-Laundry', 'admin@i-laundry.co.id', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Baloi Permata regency', 'ALL', 1, 0, '2016-11-17 15:21:20', '2016-11-17 15:27:42'),
(2, 'Laundry 1', 'laundry1@mail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 34', '1', 1, 0, '2016-10-31 14:37:24', '2016-11-17 15:22:53'),
(3, 'Laundry 2', 'laundry2@mail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 35', '2', 1, 0, '2016-10-31 14:37:24', '2016-11-17 15:22:55'),
(4, 'Laundry 3', 'laundry3@mail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 36', '1', 1, 0, '2016-10-31 14:37:24', '2016-11-17 15:22:55'),
(5, 'Laundry 4', 'laundry4@mail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 37', '2', 1, 0, '2016-10-31 14:37:24', '2016-11-17 15:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_payment`
--

CREATE TABLE IF NOT EXISTS `codewell_payment` (
  `idPAYMENT` int(11) NOT NULL,
  `namePAYMENT` varchar(50) NOT NULL,
  `descriptionPAYMENT` text NOT NULL,
  `createdatePAYMENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusPAYMENT` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_payment`
--

INSERT INTO `codewell_payment` (`idPAYMENT`, `namePAYMENT`, `descriptionPAYMENT`, `createdatePAYMENT`, `statusPAYMENT`) VALUES
(1, 'BANK MANDIRI', '<p><span style="font-size: 10pt;">No. Rekening : 1234678910 </span></p>\r\n<p><span style="font-size: 10pt;">Imam Bonjol, Nagoya - Batam, Kepulauan Riau</span></p>\r\n<p><span style="font-size: 10pt;">An. Andhana Utama</span></p>', '2016-10-13 12:52:08', 1),
(2, 'COD (Cash on Delivery)', '<p>COD (Cash on Delivery)</p>', '2016-08-02 09:57:48', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_promo`
--

INSERT INTO `codewell_promo` (`idPROMO`, `idPARTNER`, `namePROMO`, `descriptionPROMO`, `startPROMO`, `endPROMO`, `createdatePROMO`, `statusPROMO`) VALUES
(1, 1, 'November Ceria', 'Akan ada gratis 25 tahun untuk kamu yang sering galau!', '2016-11-17', '2016-11-20', '2016-11-17 15:39:12', 1),
(2, 1, 'Laundry terbaik', 'Laundry terbaik dan selalu terdepan! Eh! memang iklan yamaha! ih! bukan tau! jadi apa dong ini! ini cuman iklan dan tidak lebih daripada itu! ayoo kumpulkan kesedihan dan lotere anda untuk selalu begitu!', '2016-11-18', '2016-11-30', '2016-11-17 16:51:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_regions`
--

CREATE TABLE IF NOT EXISTS `codewell_regions` (
  `idREGION` int(11) NOT NULL,
  `nameREGION` varchar(50) NOT NULL,
  `createdateREGION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusREGION` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_regions`
--

INSERT INTO `codewell_regions` (`idREGION`, `nameREGION`, `createdateREGION`, `statusREGION`) VALUES
(1, 'Tiban', '2016-10-31 13:16:39', 1),
(2, 'Tanjung Piayu', '2016-10-31 13:16:53', 1);

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
  `createdateUSER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusUSER` int(1) NOT NULL COMMENT '0=>full access, 12=>administrator, 22=>karyawan'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_users`
--

INSERT INTO `codewell_users` (`idUSER`, `emailUSER`, `passwordUSER`, `roleUSER`, `createdateUSER`, `statusUSER`) VALUES
(1, 'bos@i-laundry.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 22, '2016-11-04 13:15:01', 1),
(2, 'karyawan@i-laundry.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 24, '2016-07-25 12:34:15', 1);

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
-- Indexes for table `codewell_payment`
--
ALTER TABLE `codewell_payment`
  ADD PRIMARY KEY (`idPAYMENT`);

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
  MODIFY `idAROMA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_customers`
--
ALTER TABLE `codewell_customers`
  MODIFY `idCUSTOMER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `codewell_orders`
--
ALTER TABLE `codewell_orders`
  MODIFY `idORDER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_packages`
--
ALTER TABLE `codewell_packages`
  MODIFY `idPACKAGE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_partner`
--
ALTER TABLE `codewell_partner`
  MODIFY `idPARTNER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `codewell_payment`
--
ALTER TABLE `codewell_payment`
  MODIFY `idPAYMENT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_promo`
--
ALTER TABLE `codewell_promo`
  MODIFY `idPROMO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_regions`
--
ALTER TABLE `codewell_regions`
  MODIFY `idREGION` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_services`
--
ALTER TABLE `codewell_services`
  MODIFY `idSERVICES` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_users`
--
ALTER TABLE `codewell_users`
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
