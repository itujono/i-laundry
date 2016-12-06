-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 09:59 PM
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
('cae8407b723d794a573db104ec102dfab2af39ad', '::1', 1481031323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033303930303b456d61696c7c733a32323a226b6172796177616e40692d6c61756e6472792e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('c50a38c4095f74445550f53307660d478d18f517', '::1', 1481031840, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033313533323b456d61696c7c733a32323a226b6172796177616e40692d6c61756e6472792e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32343b6c6f676765645f696e7c623a313b),
('dbe329caa849c1b4a53f9258e35cc0fa8b5ccc64', '::1', 1481032906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033323133323b456d61696c7c733a31393a22626f7340692d6c61756e6472792e636f2e6964223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('ce9664f471798941165d6b602684980ac89caf0d', '::1', 1481032928, ''),
('e6ccbac4837551c6d40eba94ace942bde02834fd', '::1', 1481032928, ''),
('7550eb33264e65e08bd644ba132dc590abf867fe', '::1', 1481033597, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033333233373b456d61696c7c733a31393a22626f7340692d6c61756e6472792e636f2e6964223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('8852f57d495d0a9c18cbbe8c5cc4b2085bbd8a63', '::1', 1481033935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033333630303b456d61696c7c733a31393a22626f7340692d6c61756e6472792e636f2e6964223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('0aa1d7dfff8cb8da682b780fcc3035a63e2198fb', '::1', 1481034412, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033343133333b4e616d657c733a393a224c61756e6472792031223b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b6d6573736167657c613a313a7b733a343a2274657874223b733a3130353a22546572696d61206b617369682c206b616d6920737564616820626572686173696c206d656e676972696d2074617574616e207265736574206b6174612073616e6469206c6577617420656d61696c3c62723e73696c616b616e2063656b20656d61696c206b616d7521223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('a28207d7ca98496c151a26e9847b2c9b8ee80cde', '::1', 1481034729, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033343436363b4e616d657c733a393a224c61756e6472792031223b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b6d6573736167657c613a313a7b733a343a2274657874223b733a35313a224d6161662c20656d61696c2064616e206b6174612073616e64692079616e6720616e6461206d6173756b6b616e2073616c6168223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('a3cfed1e1563b2e5d62d7d790f4076aad6a93f30', '::1', 1481035396, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033353335383b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('3d786541194e84b5dce44f293fc0fc1b2f56d20e', '::1', 1481036153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313033353839323b4e616d657c733a373a22416e6468616e61223b456d61696c7c733a31393a22626f7340692d6c61756e6472792e636f2e6964223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6964555345527c733a313a2231223b726f6c65555345527c693a32323b),
('28d6c957e9a0a7557b4216523c236d6f6e081932', '::1', 1481029109, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313032383733353b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('0c5d6d2db041a1e70dd32af07e58164dde4ec946', '::1', 1481029438, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313032393131333b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('3b3aecfe660dc38eaaa12b9def49c41a25000c3e', '::1', 1481030379, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313032393433383b456d61696c7c733a31373a22626f7340692d6c61756e6472792e636f6d223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('7942e2e921684f8cf57b82b5e066cdab02960c3b', '::1', 1481036338, ''),
('92b67990a0e9bd3f0040fdb1792043499431a915', '::1', 1481036173, 0x6d6573736167657c613a333a7b733a353a227469746c65223b733a31383a225465726a616469204b6573616c6168616e21223b733a343a2274657874223b733a35353a224d6161662c2053696c616b616e20756c616e676920656d61696c2064616e206b6174612073616e646920616e6461206469626177616821223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('dc895f5cecad0eb3cce2b430ac071c2d058aca68', '::1', 1481036167, ''),
('0848ed9b7f8edb2a79301aae69351a05614b5eeb', '::1', 1481036163, ''),
('3c359352b580daecd0c1c19c1a89904a270a354f', '::1', 1481036168, 0x6d6573736167657c613a333a7b733a353a227469746c65223b733a31383a225465726a616469204b6573616c6168616e21223b733a343a2274657874223b733a35353a224d6161662c2053696c616b616e20756c616e676920656d61696c2064616e206b6174612073616e646920616e6461206469626177616821223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7e25e4b67fc33bedb0ac43cd4926893ab40f15de', '::1', 1481036158, 0x6d6573736167657c613a333a7b733a353a227469746c65223b733a31383a225465726a616469204b6573616c6168616e21223b733a343a2274657874223b733a35353a224d6161662c2053696c616b616e20756c616e676920656d61696c2064616e206b6174612073616e646920616e6461206469626177616821223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ad5c26cb63327caf3d4cacd90b5d410c47417871', '::1', 1481036163, 0x6d6573736167657c613a333a7b733a353a227469746c65223b733a31383a225465726a616469204b6573616c6168616e21223b733a343a2274657874223b733a35353a224d6161662c2053696c616b616e20756c616e676920656d61696c2064616e206b6174612073616e646920616e6461206469626177616821223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_customers`
--

INSERT INTO `codewell_customers` (`idCUSTOMER`, `nameCUSTOMER`, `emailCUSTOMER`, `passwordCUSTOMER`, `addressCUSTOMER`, `telephoneCUSTOMER`, `mobileCUSTOMER`, `genderCUSTOMER`, `subscribeCUSTOMER`, `createdateCUSTOMER`, `updatedateCUSTOMER`, `statusCUSTOMER`) VALUES
(1, 'Andhana', 'magicwarms@gmail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 'Tiban Koperasi Blok T No. 34', 778432221, 8566688840, 0, 0, '2016-11-16 03:15:28', '2016-12-06 14:27:54', 1),
(2, 'Angel', 'angel_wap@ymail.com', '854229cc91ef8b4cd67de236c7f4e08e34a02df5d89c976e152e9645fadef8522a0d6fb974c11cf4c740ddc219fe2a7596f9a235ea9210febdbc655e443da8ff', '', 0, 0, 0, 0, '2016-11-30 10:03:59', '2016-11-30 10:04:26', 1);

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
  `statusORDER` int(1) NOT NULL DEFAULT '1' COMMENT '1=>Dalam proses\r\n2=>Baju dicuci\r\n3=>Tunggu pembayaran\r\n4=>Selesai Order\r\n5 =>Dibatalkan',
  `isreadadminORDER` int(1) NOT NULL,
  `isreadORDER` int(1) NOT NULL DEFAULT '0' COMMENT '0 => belum baca \r\n1 => udah baca'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_orders`
--

INSERT INTO `codewell_orders` (`idORDER`, `idPARTNER`, `idCUSTOMER`, `idAROMA`, `idREGION`, `idSERVICES`, `idPACKAGE`, `kodeORDER`, `pickuptimeORDER`, `pickupdateORDER`, `pickupfinisheddateORDER`, `pickupfinishedtimeORDER`, `pickupADDRESSORDERKOTOR`, `pickupADDRESSORDERBERSIH`, `notesORDER`, `rejectedmessagesORDER`, `beratORDER`, `priceORDER`, `createdateORDER`, `updatedateORDER`, `statusORDER`, `isreadadminORDER`, `isreadORDER`) VALUES
(1, 1, 1, 1, 1, 1, 1, 'IL20161128021', '20:33:08', '2016-11-28', '2016-11-07', '00:00:00', 'Tiban Koperasi Blok T No. 34', 'Tiban Kampung Blok S5 No. 70', 'cepat ya ah!', '', '4.5 KG', '50000', '2016-11-04 14:59:34', '2016-11-28 15:02:23', 4, 1, 1),
(2, 4, 1, 1, 1, 2, 2, 'IL20161128022', '20:33:08', '2016-11-29', '2016-11-23', '18:00:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '1 KG', '50000', '2016-10-13 11:02:33', '2016-11-28 15:02:27', 1, 1, 1),
(3, 0, 1, 1, 1, 1, 2, 'IL20161128023', '20:33:08', '2016-11-28', '2016-07-27', '00:00:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '', '50000', '2016-10-13 11:02:33', '2016-11-28 15:02:31', 1, 1, 0),
(4, 0, 1, 1, 1, 2, 2, 'IL20161128024', '20:33:08', '2016-11-30', '2016-07-27', '22:33:00', 'Tiban Koperasi Blok V No. 6 Simpang 3 Belok Kanan', 'Tiban Koperasi Blok S No. 12 Samping kantor pos', 'cepat ya ah!', '', '', '50000', '2016-10-13 11:02:33', '2016-11-28 15:02:35', 1, 1, 0),
(10, 0, 1, 3, 1, 2, 1, 'IL201611288TBZ', '05:00:00', '2016-11-29', '2016-11-29', '00:00:00', 'Tiban Koperasi blok T No. 34', '', '', '', '', '0', '2016-11-28 15:21:01', '2016-11-29 13:22:18', 1, 1, 0),
(11, 0, 1, 3, 1, 2, 3, 'IL20161128JCES', '06:00:00', '2016-11-30', '2016-11-29', '15:00:00', 'Ahok!', 'Ahok!', '', 'Sabun Abis!', '2 Kg', '12000', '2016-11-28 15:21:30', '2016-11-29 13:22:20', 5, 1, 1),
(12, 2, 1, 4, 1, 2, 2, 'IL201611293IYK', '11:00:00', '2016-11-30', '0000-00-00', '00:00:00', 'Tiban Kampung blok T no. 56', '', 'Tiban wayku!', '', '', '0', '2016-11-29 11:41:21', '2016-11-29 15:02:58', 1, 1, 1),
(13, 2, 2, 1, 1, 2, 1, 'IL20161130LVL1', '15:00:00', '2016-12-01', '2016-12-02', '10:00:00', 'Jalan Ngasal', 'hgvhfyrfhtvut', '', '', '2 Kg', '12000', '2016-11-30 10:12:27', '2016-11-30 10:17:58', 4, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_partner`
--

INSERT INTO `codewell_partner` (`idPARTNER`, `namePARTNER`, `emailPARTNER`, `passwordPARTNER`, `telephonePARTNER`, `addressPARTNER`, `idREGION`, `statusPARTNER`, `ondutyPARTNER`, `createdatePARTNER`, `updatedatePARTNER`) VALUES
(1, 'i-Laundry', 'admin@i-laundry.co.id', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Baloi Permata regency', '15', 1, 0, '2016-11-17 15:21:20', '2016-11-29 13:50:05'),
(2, 'Laundry 1', 'magicwarms@gmail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 34', '1', 1, 0, '2016-10-31 14:37:24', '2016-11-29 12:30:39'),
(3, 'Laundry 2', 'laundry2@mail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 35', '2', 1, 0, '2016-10-31 14:37:24', '2016-11-17 15:22:55'),
(4, 'Laundry 3', 'laundry3@mail.com', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 81268018644, 'Tiban Koperasi Blok T No. 36', '1', 1, 0, '2016-10-31 14:37:24', '2016-12-06 14:08:05'),
(5, 'Laundry 4', 'laundry4@mail.com', '0abed7ae289166324f1315d43bfb9cb823dc82adf35bb3a841b6b78d6c5998a745b477798a00fd7e6b3cbf00094afed9e0c3561968bad1cbaa6c0784d32b6f4d', 81268018644, 'Tiban Koperasi Blok T No. 37', '2', 1, 0, '2016-10-31 14:37:24', '2016-12-06 14:07:50'),
(6, 'Laundry14', 'laundry14@mail.com', '9ae31018a9144db7e85574a02ef5b11d4fe72b7dfaaa4eb32ae6219bf5ea548c026c26de6c1bfccd6ef193ffb206d2482ed1a156b587f20ecd771fc111f57106', 8566688840, 'Tiban Nyasar Blok S No. 56', '1', 1, 0, '2016-12-06 14:21:26', '2016-12-06 14:21:57');

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
(1, 1, 'November Ceria', 'Akan ada gratis 25 tahun untuk kamu yang sering galau!!', '2016-11-17', '2016-12-20', '2016-11-17 15:39:12', 1),
(2, 1, 'Laundry terbaik', 'Laundry terbaik dan selalu terdepan! Eh! memang iklan yamaha! ih! bukan tau! jadi apa dong ini! ini cuman iklan dan tidak lebih daripada itu! ayoo kumpulkan kesedihan dan lotere anda untuk selalu begitu!', '2016-11-18', '2016-12-18', '2016-11-17 16:51:45', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_users`
--

INSERT INTO `codewell_users` (`idUSER`, `emailUSER`, `passwordUSER`, `roleUSER`, `createdateUSER`, `statusUSER`) VALUES
(1, 'bos@i-laundry.co.id', '9512b05257f074d479c23257de948f34ba8a1ffb58737a79c2b97a23389cd58486452ad79d561de9bd5ec1cdfb589ba233f3c38a61c3ec57b2e1d27ce87d6097', 22, '2016-12-06 12:04:09', 1),
(2, 'karyawan@i-laundry.com', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', 24, '2016-07-25 12:34:15', 1);

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
  MODIFY `idCUSTOMER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_orders`
--
ALTER TABLE `codewell_orders`
  MODIFY `idORDER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `codewell_packages`
--
ALTER TABLE `codewell_packages`
  MODIFY `idPACKAGE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_partner`
--
ALTER TABLE `codewell_partner`
  MODIFY `idPARTNER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_promo`
--
ALTER TABLE `codewell_promo`
  MODIFY `idPROMO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
