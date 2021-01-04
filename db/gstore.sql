-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 02:33 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `gstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_stock`, `product_image`) VALUES
(1, 'Realme 5S 4/128', 'Display\r\n6.5-inch (16.5cm) Mini-Drop Fullscreen\r\nLCD multi-Touch display\r\n89% Screen-to-Body Ratio\r\n1600-by-720-pixel resolution at 269 PPI\r\n1200:1 contrast ratio (Typical)\r\n480cd/m2 max brightness (Typical)\r\nNight mode for eye care\r\nCorning Gorilla Glass 3+\r\n\r\nCamera\r\nAI Quad Camera with Ultra Wide-angle Macro Lens\r\n8MP Wide-Angle Camera | 1191.5 Angle | f/2.25 Aperture\r\n5P Lens | Support Super Nightscape\r\n48MP Main Camera\r\nf/1.8 Aperture\r\n6P Lens\r\nPDAF\r\n10x Digital Zoom\r\nAI HDR\r\nAI Beauty\r\nAI Scene Recognition\r\nChroma Boost\r\nSuper Nightscape\r\nFilter Mode\r\nPanorama Mode\r\nExpert Mode\r\nTime-Lapse Mode\r\n2MP Portrait Camera\r\nSix Portrait Styles\r\n2MP Macro Camera\r\n4cm Focus Distance\r\n13MP Front Camera\r\nf/2.0 Aperture\r\n5P Lens\r\nAI Beauty\r\nAI HDR', 2899000, 36, 'realme5S.jpg'),
(2, 'Vivo Y83 4/32', 'Tipe Smartphone\r\nPhablet\r\nShape Bar\r\nDasar\r\nOS Android\r\nOS ver Funtouch OS 4.0 (Android 8.1 Oreo)\r\nSIM Single SIM\r\nDual SIM\r\nDual Standby\r\nCPU MediaTek Helio P22 (MT6762)\r\nocta-core\r\nKecepatan CPU 2GHz\r\nStorage 32GB\r\nRAM 4GB\r\nExternal Storage microSD up to 256GB\r\nBattery 3260 mAh\r\nLayar\r\nUkuran Layar 6.22 inches\r\nResolusi HD+ 1520 720 pixels\r\nNetwork\r\nTipe 2G\r\n3G\r\n4G (LTE)\r\n2G GSM B2/B3/B5/B8\r\n3G WCDMA B1/B5/B8\r\n4G (LTE) TDD_LTE B38/B40/B41\r\nSpeed FDD_LTE B1/3/5/8\r\nKamera\r\nKamera Utama 13MP\r\nKamera Depan 8MP\r\nLainnya\r\nFitur Wi-Fi\r\nHotspot/Tethering\r\nGPS\r\nBluetooth\r\nFlash\r\nUkuran\r\nDimensi 155.21 x 75.24 x 7.7 mm\r\nBerat 151.00 g', 2380000, 23, 'vivoY83.jpg'),
(3, 'Vivo Y15 3/64', 'Layar Super FullView Display (HD+ 1544 x 720 Pixel)\r\nKamera Depan 16MP dilengkapi Al Face Beauty & Kamera belakang 13MP plus PDAF\r\nKamera Belakang Memiliki 3 Kamera Yaitu 13 MP, f/2.2, PDAF, 8 MP f/2.2,\r\n16mm (ultrawide), 2 MP, f/2.4, depth sensor\r\nFitur Keamanan dengan Face Access Unlock (tidak ada fingerprint sensor)\r\nChipset Mediatek MT6762 Helio P22 \r\nBaterai berkapasitas 5000 mAh \r\nRAM 3GB Memori Internal 64GB', 1890000, 5, 'vivoY15.jpg'),
(4, 'Redmi Note 7 4/64', 'Layar 6.3\"  FHD+\r\nAndroid 9.0 Pie\r\nSnapdragon 660 ,  Octacore\r\nRAM 4 GB, ROM 64 GB\r\nCamera 48 Mp + 12  Mp\r\nCamera SELFIE 13 Mp \r\nBaterry 4000MaH , 4G LTE', 2650000, 57, 'redmiNote7.jpg'),
(5, 'Redmi Note 8 3/32', 'Display: 6.3\" FHD+ Eye Protection Display\r\nCorning Gorilla Glass 5\r\nQualcomm Snapdragon 655 flagship experience\r\nRear Camera: 48MP+8MP+2MP+2MP\r\nFront Camera: 13MP\r\nRAM: 3GB\r\nROM: 32GB\r\nBattery: 4000mAh + 18W Fast Charge\r\n90% high screen-to-body ratio\r\nColor: Space Black, Neptune Blue, Moonlight White', 1899000, 34, 'redmiNote8.jpg'),
(6, 'Huawei Honor 8', 'NETWORK Technology \r\nGSM / HSPA / LTE\r\nLAUNCH Announced 2017, January\r\nStatus Available. Released 2017, January\r\nBODY Dimensions 147.2 x 72.9 x 7.6 mm (5.80 x 2.87 x 0.30 in)\r\nWeight 147 g (5.19 oz)\r\nBuild Glass front, glass back, aluminum frame\r\nSIM Hybrid Dual SIM (Nano-SIM, dual stand-by)\r\nDISPLAY Type IPS LCD capacitive touchscreen, 16M colors\r\nSize 5.2 inches, 74.5 cm2 (~69.5% screen-to-body ratio)\r\nResolution 1080 x 1920 pixels, 16:9 ratio (~424 ppi density)\r\nPLATFORM OS Android 7.0 (Nougat), upgradable to Android 8.0 (Oreo); EMUI 9\r\nChipset HiSilicon Kirin 655 (16 nm)\r\nCPU Octa-core (4x2.1 GHz Cortex-A53 & 4x1.7 GHz Cortex-A53)\r\nGPU Mali-T830MP2\r\nMEMORY Card slot microSDXC (uses shared SIM slot)\r\nInternal 16GB 3GB RAM, 64GB 4GB RAM\r\nMAIN CAMERA Single 12 MP, AF\r\nFeatures LED flash, panorama, HDR\r\nVideo 1080p@30fps\r\nSELFIE CAMERA Single 8 MP, f/2.0\r\nVideo 1080p@30fps\r\nSOUND Loudspeaker Yes\r\n3.5mm jack Yes\r\nCOMMS WLAN Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot\r\nBluetooth 4.1, A2DP, EDR, LE\r\nGPS Yes, with A-GPS, GLONASS\r\nNFC Yes (market dependent)\r\nRadio FM radio\r\nUSB microUSB 2.0, USB On-The-Go\r\nFEATURES Sensors Fingerprint (rear-mounted), accelerometer, proximity, compass\r\nBATTERY Non-removable Li-Ion 3000 mAh battery', 1768000, 20, 'honor8.jpg'),
(7, 'Oppo F7 6/128', '6.23\"1080x2280 pixels16MP1080p Helio P60\r\n\r\nNETWORKTechnologyGSM / HSPA / LTE2G bandsGSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 23G bandsHSDPA 850 / 900 / 21004G bandsLTE band 1(2100), 3(1800), 5(850), 8(900), 38(2600), 40(2300), 41(2500)SpeedHSPA, LTEGPRSYesEDGEYes\r\nReleased 2018, April\r\n\r\nBODYDimensions156 x 75.3 x 7.8 mm (6.14 x 2.96 x 0.31 in)Weight158 g (5.57 oz)SIMDual SIM (Nano-SIM, dual stand-by)\r\nDISPLAY Type\r\nLTPS IPS LCD capacitive touchscreen, 16M colorsSize6.23 inches, 96.9 cm2(~82.5% screen-to-body ratio)\r\nResolution1080 x 2280 pixels (~405 ppi density)MultitouchYesProtection\r\n\r\nCorning Gorilla Glass 5- \r\nColorOS 5.0\r\nPLATFORMOSAndroid 8.1 (Oreo)\r\nChipsetMediatek Helio P60CPUOcta-core (4x2.0 GHz Cortex-A73 & 4x2.0 GHz Cortex-A53)\r\nGPUMali-G72 \r\nMP3\r\nMEMORYCard slotmicroSD, up to 256 GB (dedicated slot)\r\nInternal 128 GB, \r\nRAM 6 GB \r\n\r\nCAMERA\r\n\r\nPrimary16 MP, f/1.8, phase detection autofocus, LED flashFeaturesGeo-tagging, touch focus, face detection, HDR, panoramaVideo1080p@30fps\r\n\r\nSecondary 25 MP, f/2.0, 1080p\r\n\r\nSOUNDAlert typesVibration; MP3, WAV ringtonesLoudspeakerYes3.5mm jackYes- Active noise cancellation with dedicated mic\r\n\r\nCOMMS WLAN\r\nWi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspotBluetooth4.2, A2DP, LEGPSYes, with A-GPSRadioFM radioUSBmicroUSB 2.0, USB On-The-GoFEATURESSensorsFingerprint (rear-mounted), accelerometer, gyro, proximity, compassMessagingSMS(threaded view), MMS, Email, Push EmailBrowserHTML5- MP4/H.264 player\r\n- MP3/WAV/eAAC+/FLAC player\r\n- Document viewer\r\n- Photo/video editorBATTERYNon-removable Li-Ion 3400 mAh battery\r\n', 4800000, 98, 'oppoF7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` varchar(25) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `transaction_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(25) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
