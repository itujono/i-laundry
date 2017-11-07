-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 08:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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

CREATE TABLE `codewell_area` (
  `idAREA` int(11) NOT NULL,
  `idREGION` int(11) NOT NULL,
  `nameAREA` varchar(40) NOT NULL,
  `createdateAREA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusAREA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_aroma` (
  `idAROMA` int(11) NOT NULL,
  `idREGION` int(11) NOT NULL,
  `nameAROMA` varchar(50) NOT NULL,
  `createdateAROMA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusAROMA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_categorysatuan` (
  `idCATEGORYSATUAN` int(11) NOT NULL,
  `nameCATEGORYSATUAN` varchar(50) NOT NULL,
  `createdateCATEGORYSATUAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusCATEGORYSATUAN` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `codewell_ci_sessions`
--

INSERT INTO `codewell_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('haf04cu0plpqu1hfc3gjbnv75bcahtd6', '::1', 1510039977, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303033393831383b456d61696c7c733a31393a22626f7340692d6c61756e6472792e636f2e6964223b6964555345527c733a313a2231223b726f6c65555345527c693a32323b6c6f676765645f696e7c623a313b),
('22e7dlhu8t5a26hgd87re6c3fjhr9ra4', '::1', 1510039818, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303033393831383b),
('q0dir51am5r9dvp6jopnrjubnsn5un4o', '::1', 1509441540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393434313239383b6d6573736167657c613a333a7b733a353a227469746c65223b733a353a224f6f707321223b733a343a2274657874223b733a34353a224d6161662c20616b756e20616e646120746964616b207465726461667461722064692064617461206b616d692e223b733a343a2274797065223b733a363a2264616e676572223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('suijsel8eju4skhrumoed7qp0jogt75a', '::1', 1499661660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393636313635363b),
('cglre7ece9a53ggdv85ml86eagimtiua', '::1', 1506308304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530363330383330343b),
('692b0ppb0icc4hdovj6o1tgf8kk1cpda', '::1', 1509348112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393334383037393b),
('l2vhn6t387uai4sa607njndr1j2jnvdt', '::1', 1499661069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393636313036393b),
('n60v76df33e3aj0k6dg17q6cv3l2kqjk', '::1', 1499661449, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393636313434393b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('1k2n05qc0siq5o82pug9eov5pbkqg1k4', '::1', 1499661069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393636313036393b4e616d657c733a393a224c61756e6472792031223b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b),
('gc88qhao6qtgjglf72a05i2r93', '::1', 1499656229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635363232373b),
('er1n1mvm03pv3nkkboes0j1pmg', '::1', 1499656239, ''),
('bcru5f7m5lt92ca6caqu52lhvn', '::1', 1499656365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635363336353b6d6573736167657c613a333a7b733a353a227469746c65223b733a353a224f6f707321223b733a343a2274657874223b733a34353a224d6161662c20616b756e20616e646120746964616b207465726461667461722064692064617461206b616d692e223b733a343a2274797065223b733a363a2264616e676572223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('0jtqc7sq4ssrn1lhqjin6eat49', '::1', 1499656365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635363336353b),
('c3sv2hpev29p3vvcc9vqh01afv', '::1', 1499656389, ''),
('m1495826s8ntk4nmbo02dp6u6f', '::1', 1499656404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635363430343b6d6573736167657c613a333a7b733a353a227469746c65223b733a353a224f6f707321223b733a343a2274657874223b733a34353a224d6161662c20616b756e20616e646120746964616b207465726461667461722064692064617461206b616d692e223b733a343a2274797065223b733a363a2264616e676572223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('otngsnu0hculrh5rmtj9s7cqka', '::1', 1499656404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635363430343b),
('p03ggbrjbrpvp25lakn78o46n4ujasg0', '::1', 1499657191, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635373139313b),
('sr8vcokefuvhohvdsugbiuc0v9vhd87p', '::1', 1499657984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635373938343b),
('lhonc8uvs4aj0c3gmdj3l0k2g722engc', '::1', 1499658288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635383238383b),
('md5jfntnb8nnp78nk26s1918ihqhlte0', '::1', 1499657501, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635373530313b6d6573736167657c613a313a7b733a343a2274657874223b733a3130353a22546572696d61206b617369682c206b616d6920737564616820626572686173696c206d656e676972696d2074617574616e207265736574206b6174612073616e6469206c6577617420656d61696c3c62723e73696c616b616e2063656b20656d61696c206b616d7521223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('igeuqq5slc5cdispcshs73ukm7mdlvk0', '::1', 1499658618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635383631383b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('vkq4c5qn59dlmsk791fsm8n7qk5t1f68', '::1', 1499658996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635383939363b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b6d6573736167657c613a313a7b733a343a2274657874223b733a34333a223c703e596f7520646964206e6f742073656c65637420612066696c6520746f2075706c6f61642e3c2f703e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('hah68bde280r5r44p8o6lja3rmfmanfl', '::1', 1499659302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635393330323b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('ea8uk0vao4j1kumbmgo9qh8p412bhha0', '::1', 1499659635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393635393633353b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('f173a43s87huo58brkjqncksb4e882om', '::1', 1499660813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393636303831333b4e616d657c733a31333a22416e6468616e61205574616d61223b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964435553544f4d45527c733a313a2231223b6c6f676765645f696e7c623a313b),
('r08c8j0ee5mdgk9u2lbs7kbi2vrm3r17', '::1', 1499660554, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393636303535343b4e616d657c733a393a224c61756e6472792031223b456d61696c7c733a32313a226369706f6b73616e74616940676d61696c2e636f6d223b6964555345527c733a313a2232223b726f6c65555345527c693a32363b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_customers`
--

CREATE TABLE `codewell_customers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_customers`
--

INSERT INTO `codewell_customers` (`idCUSTOMER`, `nameCUSTOMER`, `emailCUSTOMER`, `passwordCUSTOMER`, `addressCUSTOMER`, `telephoneCUSTOMER`, `mobileCUSTOMER`, `genderCUSTOMER`, `subscribeCUSTOMER`, `createdateCUSTOMER`, `updatedateCUSTOMER`, `statusCUSTOMER`) VALUES
(1, 'Andhana Utama', 'mamatjualtomat@gmail.com', 'aa09deb66b4d3528ea8fa354597e18217b30dea42c312fb48f97d3a2eb23ba459d68f9f1107b9fca93eb5273466aed17fc6e1b900f2da834e7f3e09f67861c57', 'Tiban Impian No. 45 Blok R', 8566688840, 8566688840, 0, 0, '2017-01-31 14:23:30', '2017-07-10 03:44:48', 1),
(2, 'Bejo Karmila', 'itujono@gmail.com', '17b74fd28b873427d5005af8a6c67b38c626be2aabc1c628020e9b7d3252d547bc1264a6b47c5d1c20f7ec080ea06870aa5db51d4ee6e3061fcd3c087ebecc61', '', 0, 0, 0, 0, '2017-01-31 14:27:50', '2017-02-07 13:33:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_loginattempts`
--

CREATE TABLE `codewell_loginattempts` (
  `idATTEMPTS` int(11) NOT NULL,
  `idUSER` int(2) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_loginattempts`
--

INSERT INTO `codewell_loginattempts` (`idATTEMPTS`, `idUSER`, `timeATTEMPTS`) VALUES
(5, 1, '1484053790'),
(6, 1, '1499659996');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_loginattempts_customer`
--

CREATE TABLE `codewell_loginattempts_customer` (
  `idATTEMPTS` int(11) NOT NULL,
  `idCUSTOMER` int(2) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_loginattempts_customer`
--

INSERT INTO `codewell_loginattempts_customer` (`idATTEMPTS`, `idCUSTOMER`, `timeATTEMPTS`) VALUES
(1, 1, '1483537622'),
(2, 1, '1484050860'),
(3, 1, '1485168251'),
(4, 1, '1485182305'),
(5, 1, '1485264175'),
(6, 1, '1485431195'),
(7, 1, '1509441323');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_loginattempts_partner`
--

CREATE TABLE `codewell_loginattempts_partner` (
  `idATTEMPTS` int(11) NOT NULL,
  `idPARTNER` int(2) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `codewell_orders`
--

CREATE TABLE `codewell_orders` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_orders`
--

INSERT INTO `codewell_orders` (`idORDER`, `idPARTNER`, `idCUSTOMER`, `idAROMA`, `idREGION`, `idSERVICES`, `idPACKAGE`, `kodeORDER`, `pickuptimeORDER`, `pickupdateORDER`, `pickupfinisheddateORDER`, `pickupfinishedtimeORDER`, `pickupADDRESSORDERKOTOR`, `pickupADDRESSORDERBERSIH`, `notesORDER`, `rejectedmessagesORDER`, `beratORDER`, `priceORDER`, `createdateORDER`, `updatedateORDER`, `statusORDER`, `isreadadminORDER`, `isreadORDER`) VALUES
(1, 2, 1, 5, 3, 1, 3, 'IL20170130VKDJ', '15:00:00', '2017-01-31', '2017-02-02', '18:30:00', 'Tiban Impian Blok S No. 45', 'Tiban Impian Blok S No. 45', '', '', '6 KG', '75000', '2017-01-30 13:29:33', '2017-01-30 15:48:43', 7, 1, 1),
(2, 2, 1, 1, 1, 2, 2, 'IL20170130IZJA', '16:00:00', '2017-02-01', '2017-01-30', '00:00:00', 'Tiban Impian No. 78 Blok Y', '', '', '', '', '0', '2017-01-30 15:49:57', '2017-01-31 15:40:40', 7, 1, 1),
(3, 2, 2, 1, 1, 2, 2, 'IL20170131NB01', '15:06:00', '2017-02-03', '2017-02-04', '10:00:00', 'Jalan Kartini III Blok F #34', 'Jalan Kartini III Blok F #34', 'Okay bolta wak.', '', '4 kg', '140000', '2017-01-31 15:23:34', '2017-01-31 15:34:17', 7, 1, 1),
(4, 2, 1, 2, 1, 2, 4, 'IL201702024IL4', '15:00:00', '2017-03-03', '2017-02-04', '08:00:00', 'Tiban ganteng impian', 'Tiban ganteng impian', 'Pokoke maknyos', '', '4 KG', '140000', '2017-02-02 14:08:38', '2017-02-02 14:30:22', 7, 1, 1),
(5, 0, 2, 3, 4, 2, 2, 'IL20170204IBKZ', '06:05:00', '2017-02-24', '0000-00-00', '00:00:00', 'Jalan Pudel Merah', '', '', '', '', '0', '2017-02-04 14:25:31', '2017-02-07 13:33:15', 1, 1, 0),
(6, 2, 1, 6, 3, 2, 2, 'IL20170710D4XR', '16:00:00', '2017-07-14', '2017-07-15', '13:00:00', 'Tiban lah', 'Tiban lah', 'Lalal', '', '2.5 KG', '60000', '2017-07-10 03:50:30', '2017-07-10 04:39:42', 7, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `codewell_packages`
--

CREATE TABLE `codewell_packages` (
  `idPACKAGE` int(11) NOT NULL,
  `namePACKAGE` varchar(50) NOT NULL,
  `descriptionPACKAGE` text NOT NULL,
  `createdatePACKAGE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusPACKAGE` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_partner` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_partner`
--

INSERT INTO `codewell_partner` (`idPARTNER`, `namePARTNER`, `emailPARTNER`, `passwordPARTNER`, `telephonePARTNER`, `addressPARTNER`, `idREGION`, `statusPARTNER`, `ondutyPARTNER`, `createdatePARTNER`, `updatedatePARTNER`) VALUES
(1, 'i-Laundry', 'admin@i-laundry.co.id', 'aa09deb66b4d3528ea8fa354597e18217b30dea42c312fb48f97d3a2eb23ba459d68f9f1107b9fca93eb5273466aed17fc6e1b900f2da834e7f3e09f67861c57', 81268018644, 'Baloi Permata regency', '15', 1, 0, '2016-11-17 15:21:20', '2017-07-10 04:17:21'),
(2, 'Laundry 1', 'cipoksantai@gmail.com', 'aa09deb66b4d3528ea8fa354597e18217b30dea42c312fb48f97d3a2eb23ba459d68f9f1107b9fca93eb5273466aed17fc6e1b900f2da834e7f3e09f67861c57', 81268018644, 'Tiban Koperasi Blok T No. 34', '1', 1, 0, '2016-10-31 14:37:24', '2017-07-10 04:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `codewell_promo`
--

CREATE TABLE `codewell_promo` (
  `idPROMO` int(11) NOT NULL,
  `idPARTNER` int(11) NOT NULL,
  `namePROMO` varchar(50) NOT NULL,
  `descriptionPROMO` varchar(255) NOT NULL,
  `startPROMO` date NOT NULL,
  `endPROMO` date NOT NULL,
  `createdatePROMO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusPROMO` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_regions` (
  `idREGION` int(11) NOT NULL,
  `nameREGION` varchar(50) NOT NULL,
  `createdateREGION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusREGION` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_satuan` (
  `idSATUAN` int(11) NOT NULL,
  `idCATEGORYSATUAN` int(2) NOT NULL,
  `nameSATUAN` varchar(50) NOT NULL,
  `priceSATUAN` varchar(10) NOT NULL,
  `createdateSATUAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusSATUAN` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_services` (
  `idSERVICES` int(11) NOT NULL,
  `nameSERVICES` varchar(100) NOT NULL,
  `pricesSERVICES` int(12) NOT NULL,
  `createdateSERVICES` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statusSERVICES` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `codewell_users` (
  `idUSER` int(11) NOT NULL,
  `emailUSER` varchar(50) NOT NULL,
  `passwordUSER` varchar(150) NOT NULL,
  `roleUSER` int(1) NOT NULL COMMENT '22 => Administrator, 24 =>Karyawan Biasa',
  `createdateUSER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusUSER` int(1) NOT NULL COMMENT '0=>full access, 12=>administrator, 22=>karyawan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codewell_users`
--

INSERT INTO `codewell_users` (`idUSER`, `emailUSER`, `passwordUSER`, `roleUSER`, `createdateUSER`, `statusUSER`) VALUES
(1, 'bos@i-laundry.co.id', 'aa09deb66b4d3528ea8fa354597e18217b30dea42c312fb48f97d3a2eb23ba459d68f9f1107b9fca93eb5273466aed17fc6e1b900f2da834e7f3e09f67861c57', 22, '2016-12-06 12:04:09', 1),
(2, 'karyawan@i-laundry.co.id', 'aa09deb66b4d3528ea8fa354597e18217b30dea42c312fb48f97d3a2eb23ba459d68f9f1107b9fca93eb5273466aed17fc6e1b900f2da834e7f3e09f67861c57', 24, '2016-07-25 12:34:15', 1),
(3, 'magicwarms@gmail.com', 'aa09deb66b4d3528ea8fa354597e18217b30dea42c312fb48f97d3a2eb23ba459d68f9f1107b9fca93eb5273466aed17fc6e1b900f2da834e7f3e09f67861c57', 21, '2017-01-02 05:28:40', 1);

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
  MODIFY `idAREA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_aroma`
--
ALTER TABLE `codewell_aroma`
  MODIFY `idAROMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_categorysatuan`
--
ALTER TABLE `codewell_categorysatuan`
  MODIFY `idCATEGORYSATUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_customers`
--
ALTER TABLE `codewell_customers`
  MODIFY `idCUSTOMER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_loginattempts`
--
ALTER TABLE `codewell_loginattempts`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_loginattempts_customer`
--
ALTER TABLE `codewell_loginattempts_customer`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `codewell_loginattempts_partner`
--
ALTER TABLE `codewell_loginattempts_partner`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `codewell_orders`
--
ALTER TABLE `codewell_orders`
  MODIFY `idORDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_packages`
--
ALTER TABLE `codewell_packages`
  MODIFY `idPACKAGE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `codewell_partner`
--
ALTER TABLE `codewell_partner`
  MODIFY `idPARTNER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_promo`
--
ALTER TABLE `codewell_promo`
  MODIFY `idPROMO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `codewell_regions`
--
ALTER TABLE `codewell_regions`
  MODIFY `idREGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `codewell_satuan`
--
ALTER TABLE `codewell_satuan`
  MODIFY `idSATUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `codewell_services`
--
ALTER TABLE `codewell_services`
  MODIFY `idSERVICES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `codewell_users`
--
ALTER TABLE `codewell_users`
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
