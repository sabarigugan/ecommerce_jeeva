-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2024 at 04:39 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightway`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `psize` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pimg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pbrand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pcatg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `psubcatg` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `psubsubcatg` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pprice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pofferprice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pspecify` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pssize` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pstock` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ptax` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pqtype` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phsn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pstockstatus` set('1','2') COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `psize`, `pimg`, `pbrand`, `pcatg`, `psubcatg`, `psubsubcatg`, `pprice`, `pofferprice`, `pspecify`, `pssize`, `color`, `pstock`, `ptax`, `pqtype`, `phsn`, `status`, `pstockstatus`, `created_by`, `updated_by`, `create_at`, `update_at`) VALUES
(6, 'Men Socks', '4', '11e8d8aad36777ff0ee124a6da59c0d7.png', 'Johnson', 'Accessories', 'Men Accesories', '', '322', '1', '', '', '', '100', '2', '100', 'HSN002', '1', '', '1', '1', '1702629291', '1702629291'),
(7, 'Caps', '1', '2ca5752cfe2cb7e09260b7352529c7e8.png', 'Johnson', 'Accessories', 'Men Accesories', '', '322', '299', '', '', '', '100', '2', '100', 'HSN003', '1', '', '1', '1', '1702629363', '1702629363'),
(8, 'Handkurchief', '5', 'bdf7a6f88d3f70885d1c5541ef45d329.png', 'Johnson', 'Accessories', 'Men Accesories', '', '322', '299', '', '', '', '100', '2', '100', 'HSN004', '1', '', '1', '1', '1702629494', '1702629494'),
(5, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '10', '688dd4e31227eb1082b82e2e8c30c468.png', 'Johnson', 'Women', 'Tank Top', '', '2344', '1346', '<ul xss=removed><li xss=removed>Tencel™ Lyocell Elastane Stretch Fabric</li><li xss=removed>Fabric Composition : Environment Friendly Lyocell Fiber And Elastane</li><li xss=removed>Natural StayFresh Anti-Microbial Properties To Keep You Fresh Throughout The Day</li><li xss=removed>Yolk Back Styling</li><li xss=removed>Relaxed Fit</li><li xss=removed>Label Free For All Day Comfort</li></ul>', '', '', '100', '2', '100', 'HSN001', '1', '', '1', '1', '1702554934', '1702554934'),
(9, 'MEN\'S RELAXED FIT', '1', '73d0330a79418420ffd0e544340eeb8b.png', 'Markwood', 'Men', 'Long Dress', 'Sleeveless Vest', '3', '1', '', '', '', '100', '2', '100', 'HSN006', '1', '', '1', '1', '1702962953', '1702962953'),
(10, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '1', '51befdf4a7ebdcf0b7162837db6064e6.png', 'Markwood', 'Men', 'Tank Top', 'Sleeveless Vest', '322', '299', '', '', '', '100', '2', '100', 'HSN003', '1', '', '1', '1', '1702981552', '1702981552'),
(11, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '1', 'ea7ed07f0b170564919a856911a72601.png', 'Markwood', 'Men', 'Tank Top', 'Sleeveless Vest', '322', '299', '', '', '', '100', '2', '100', 'HSN003', '1', '', '1', '1', '1702981553', '1702981553'),
(12, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '1', '1f945ea9f2d5e0eb674971f14423d817.png,702819dc788d43effe159c006b1c1746.png', 'Brite', 'Women', 'Tank Top', 'Sleeved Vests', '322', '299', '', '', '', '100', '2', '100', 'HSN008', '1', '', '1', '1', '1703752278', '1703752278'),
(13, 'MEN\'S RELAXED FIT', '1', 'c27cec8f922421bacaafae5592ed223f.png,8da50a5b0dc415b11f2cbc75823aa678.png', 'Johnson', 'Women', 'Long Dress', 'Sleeveless Vest', '322', '299', '', '', '#5171d2,#1dcd49', '100', '2', '100', 'hsn001', '1', '', '1', '1', '1703764515', '1703764515'),
(14, 'UNISEX RELAXED FIT', '1', 'c098962538b10495f7a6c1b68c978b77.png,73bd1d89803e37be1950162cc50ab724.png', 'Markwood', 'Men', 'Tank Top', 'Sleeveless Vest', '2344', '299', '', '', '#2a4084,#0efb75,#d0ff14', '100', '2', '100', 'HSN009', '1', '', '1', '1', '1703766743', '1703766743'),
(15, 'FYR FYTER SUPER', '4', '512c178c5bd9da87d28fd34c4088acf9.png', 'Anand', 'Men', 'Long Dress', 'Sleeved Vests', '2344', '1346', '', '3xl', '#000000,#ffffff', '100', '2', '100', 'HSN001', '1', '', '1', '1', '1703928771', '1703928771'),
(16, 'FYR FYTER SUPER', '2', '51754cdd367a5c5ee22cf1f5166fc3b1.png', 'Anand', 'Men', 'Tank Top', 'Sleeved Vests', '322', '244', '', 's', '#ffe014,#94acf5', '100', '2', '100', 'HSN0010', '1', '2', '1', '1', '1704109531', '1704109531');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
