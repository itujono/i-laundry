-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 09:39 PM
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
('bae39ea78b79fe755b1fc164cfbc7ae6ff4b102c', '::1', 1479738441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733373036303b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('4d90f3df782a1ae2ef8172fb53b3cf16685215af', '::1', 1479739140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733383738333b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('84e912c42150c572bfec23aca2304fcbb79a024e', '::1', 1479735381, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733343036303b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('115699b400d4f78a7397aa407c73731638e65980', '::1', 1479735817, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733353338333b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('dc33e8c9a649e9afbd45a557679e0c809782da80', '::1', 1479738780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733383434343b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('3def83b25e4f1736e0408c5002cbb73eb0a4a1fc', '::1', 1479732829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733323832393b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('6c005ee6c87b67639fa545675ea0128da6109e76', '::1', 1479733702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733323832393b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('f9e546bf6ffd1f8709d7db46f354fe7fb01a925f', '::1', 1479734058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733333730333b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('b2eaca76f059b444bfe172b6cda302a47b54e870', '::1', 1479739143, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733393134333b),
('d8d12f6e659b6699de3d256f2b53b12637bc670c', '::1', 1479737059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733363537323b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('40f0b815d0bf8b82e8b699b8d73b959b3b94f522', '::1', 1479736572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733363136383b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b),
('e8a30954d0786b5f02154063213fa5fa6c8b54fc', '::1', 1479736166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437393733353831383b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b4e616d657c733a31333a22416e6468616e61205574616d61223b6964435553544f4d45527c733a313a2231223b);

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
  `kodeORDER` varchar(40) NOT NULL,
  `pickuptimeORDER` datetime NOT NULL,
  `pickupfinisheddateORDER` date NOT NULL,
  `pickupfinishedtimeORDER` time NOT NULL,
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

INSERT INTO `codewell_orders` (`idORDER`, `idPARTNER`, `idCUSTOMER`, `idAROMA`, `idSERVICES`, `idPACKAGE`, `kodeORDER`, `pickuptimeORDER`, `pickupfinisheddateORDER`, `pickupfinishedtimeORDER`, `pickupADDRESSORDERKOTOR`, `pickupADDRESSORDERBERSIH`, `notesORDER`, `rejectedmessagesORDER`, `beratORDER`, `priceORDER`, `createdateORDER`, `updatedateORDER`, `statusORDER`, `isreadadminORDER`, `isreadORDER`) VALUES
(1, 1, 1, 1, 1, 1, 'IL201610131', '2016-07-25 20:33:08', '2016-11-07', '00:00:00', 'Tiban Koperasi Blok T No. 34', 'Tiban Kampung Blok S5 No. 70', 'cepat ya ah!', '', '4.5 KG', '50000', '2016-11-04 14:59:34', '2016-11-18 14:58:48', 4, 1, 1),
(2, 4, 1, 1, 2, 2, 'IL201610132', '2016-07-26 20:33:08', '2016-11-23', '18:00:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '1 KG', '50000', '2016-10-13 11:02:33', '2016-11-21 14:33:32', 1, 1, 1),
(3, 0, 1, 1, 1, 2, 'IL201610133', '2016-07-26 20:33:08', '2016-07-27', '00:00:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '', '50000', '2016-10-13 11:02:33', '2016-11-17 16:55:41', 1, 1, 0),
(4, 0, 1, 1, 2, 2, 'IL201610134', '2016-07-26 20:33:08', '2016-07-27', '00:00:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '', '50000', '2016-10-13 11:02:33', '2016-11-18 14:59:56', 1, 1, 0);

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
  MODIFY `idAROMA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_categorysatuan`
--
ALTER TABLE `codewell_categorysatuan`
  MODIFY `idCATEGORYSATUAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
