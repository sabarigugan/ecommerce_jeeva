-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2024 at 12:26 PM
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
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(255) NOT NULL,
  `admin_profile` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` set('1','2') NOT NULL,
  `delete_status` set('1','2') NOT NULL DEFAULT '1',
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_user`, `admin_profile`, `admin_email`, `admin_phone`, `admin_password`, `admin_status`, `delete_status`, `updated_at`, `created_at`) VALUES
(1, 'Admin', '', 'admin@gmail.com', '7558180738', '$2y$10$K0hSAuz6QmEVSRIQzT/SUOSlUyr1bZQppHnVBrFSbk/Uabu2hr9la', '1', '1', '1702222880', '1693976995');

-- --------------------------------------------------------

--
-- Table structure for table `bannerone`
--

DROP TABLE IF EXISTS `bannerone`;
CREATE TABLE IF NOT EXISTS `bannerone` (
  `bannerone_id` int NOT NULL AUTO_INCREMENT,
  `bannerone_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bannerone_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`bannerone_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannerone`
--

INSERT INTO `bannerone` (`bannerone_id`, `bannerone_title`, `bannerone_img`, `status`, `created_by`, `create_at`) VALUES
(17, 'Limited time offer', '1e216e9051ca57b7ee6ae29982bb3770.png', '1', '1', '1702538281'),
(18, 'Limited time offer 1', 'fa6d508e8c212ae3047facc4151b4ade.png', '1', '1', '1702548712'),
(19, 'Limited time offer 2', 'af8d738d07c89c34214f47284918a3c4.png', '1', '1', '1702548768'),
(20, 'offer 4', '186bde1c3c1d4932f8465454d79c9098.png', '1', '1', '1702623448'),
(21, 'offer 5', '4f48c4741e90696f70cb09f6cd8df51d.png', '1', '1', '1702623474'),
(22, 'offer 6', 'f29579fce21e614e175e94b4f52632bf.png', '1', '1', '1702623502');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `brand_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_img`, `created_by`, `updated_by`, `status`, `create_at`, `update_at`) VALUES
(5, 'Anand', 'fb2e59365312770f62af73b9f488a825.png', '1', '1', '1', '1702652415', '1702652415'),
(6, 'Markwood', '1db7eaba90001d6763240927e147bd2c.png', '1', '1', '1', '1702652615', '1702652615'),
(4, 'Johnson', '677f2223cdc87923c71316aaf0d5168d.png', '1', '1', '1', '1702537040', '1702652252'),
(7, 'Brite', '9aef45223987b5d933668fc44e1c7d6b.png', '1', '1', '1', '1702652667', '1702652667'),
(8, 'Viking', '02a39b0ebd570cd5e15230a2ca835959.png', '1', '1', '1', '1702652741', '1702652741');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pid` int NOT NULL,
  `csize` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cqty` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cprice` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cmrp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `pid`, `csize`, `cqty`, `cname`, `cprice`, `cmrp`, `user_name`, `user_phone`, `user_email`, `status`, `created_by`, `create_at`) VALUES
(37, 17, 9, 'M', '1', 'MEN\'S RELAXED FIT', '1', '3', 'Gugan', '8056633860', 'admin@gmail.com', '2', '17', '1704192217'),
(36, 17, 10, 'M', '1', 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '299', '322', 'Gugan', '8056633860', 'admin@gmail.com', '2', '17', '1703417495'),
(35, 17, 9, 'L', '1', 'MEN\'S RELAXED FIT', '1', '3', 'Gugan', '8056633860', 'admin@gmail.com', '1', '17', '1703248388'),
(34, 17, 9, 'M', '1', 'MEN\'S RELAXED FIT', '1', '3', 'Gugan', '8056633860', 'admin@gmail.com', '2', '17', '1703241953'),
(33, 17, 9, 'M', '1', 'MEN\'S RELAXED FIT', '1', '3', 'Gugan', '8056633860', 'admin@gmail.com', '2', '17', '1703241780');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catg_id` int NOT NULL AUTO_INCREMENT,
  `catg_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `catg_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`catg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catg_id`, `catg_name`, `catg_img`, `created_by`, `updated_by`, `status`, `create_at`, `update_at`) VALUES
(5, 'Men', '55d378642c39efa3787f8b6d05f0ad72.png', '1', '1', '1', '1702553965', '1702575226'),
(6, 'Women', 'e827aebbb7774fc479f80d4cdd518f79.png', '1', '1', '1', '1702553999', '1702574494'),
(7, 'Junior', '2027aab13dde29144cc1db4a371d4815.png', '1', '1', '1', '1702574543', '1702574543'),
(8, 'Accessories', '9675ae0a1f99b38bddc68bf18f28cb79.png', '1', '1', '1', '1702624538', '1702624538');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mno` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_landmark` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_pincode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_state` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_name`, `user_email`, `user_phone`, `gender`, `user_password`, `fullname`, `mno`, `user_address`, `user_landmark`, `user_pincode`, `user_city`, `user_state`, `status`, `create_at`) VALUES
(17, 'Gugan', 'admin@gmail.com', '8056633860', 'Male', '$2y$10$m44.6ms1ZvsvUvYGtpJbkuTaEn2ODGAFFdgMs8nv0j./RlA0xZhHC', 'Sabari', '7558180738', '5/339', 'oppo to pla motors', '624005', 'Dindigul', 'Tamil Nadu', '1', '1704374357'),
(15, 'admin', 'gugan@gmail.com', '7558180738', '', '$2y$10$zI15GIKKr4wlnuxY3kDTk.Aldk/31ikvLt2NcVBFLX9iNEkgonPbO', '', '', '5/339', 'oppo to pla motors', '624005', 'Dindigul', 'Tamil Nadu', '1', '1703168220'),
(18, 'sabari', 'sabari@gmail.com', '7558180738', '', '$2y$10$jpnn/Vp.9wjGKiIyppVaV.pfx2gISw0AMiJh4WgzGxP5cTsqo2rbm', '', '', '5/339 villavan colony', 'oppo to pla motors', '624005', 'Dindigul', 'Tamil Nadu', '1', '1703084155');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `oid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `pid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cart_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `payble_amount` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_address` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `oid`, `user_id`, `pid`, `tid`, `cart_id`, `payble_amount`, `user_name`, `user_phone`, `user_email`, `user_address`, `order_status`, `status`, `create_at`) VALUES
(90, 'ORD00090', 17, '9', '', '35', '1', 'Sabari', '7558180738', 'admin@gmail.com', '5/339,oppo to pla motors,Dindigul,Tamil Nadu,624005', '1', '1', '1704374368'),
(89, 'ORD00089', 17, '9', '', '35', '1', 'Sabari', '7558180738', 'admin@gmail.com', '5/339,oppo to pla motors,Dindigul,Tamil Nadu,624005', '1', '1', '1704192250'),
(87, 'ORD0001', 17, '9', '', '35', '1', 'Sabari', '7558180738', 'admin@gmail.com', '5/339,oppo to pla motors,Dindigul,Tamil Nadu,624005', '1', '1', '1703910659'),
(88, 'ORD00088', 17, '9', '', '35', '1', 'Sabari', '7558180738', 'admin@gmail.com', '5/339,oppo to pla motors,Dindigul,Tamil Nadu,624005', '1', '1', '1703939421');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  `odid` int NOT NULL AUTO_INCREMENT,
  `oid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `order_id` int NOT NULL,
  `cart_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cqty` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cname` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `cart_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `od_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `csize` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`odid`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`odid`, `oid`, `order_id`, `cart_id`, `pid`, `cqty`, `cname`, `cart_status`, `od_status`, `csize`, `create_at`) VALUES
(87, 'ORD00090', 90, '35', '9', '1', 'MEN\'S RELAXED FIT', '1', '1', 'L', '1704374368'),
(86, 'ORD00089', 89, '35', '9', '1', 'MEN\'S RELAXED FIT', '1', '1', 'L', '1704192250'),
(85, 'ORD00088', 88, '35', '9', '1', 'MEN\'S RELAXED FIT', '1', '1', 'L', '1703939421'),
(84, 'ORD0001', 87, '35', '9', '1', 'MEN\'S RELAXED FIT', '1', '1', 'L', '1703910659');

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
  `pstockstatus` set('1','2') COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `psize`, `pimg`, `pbrand`, `pcatg`, `psubcatg`, `psubsubcatg`, `pprice`, `pofferprice`, `pspecify`, `pssize`, `color`, `pstock`, `ptax`, `pqtype`, `phsn`, `pstockstatus`, `status`, `created_by`, `updated_by`, `create_at`, `update_at`) VALUES
(6, 'Men Socks', '4', '11e8d8aad36777ff0ee124a6da59c0d7.png', 'Johnson', 'Accessories', 'Men Accesories', '', '322', '1', '', '', '', '100', '2', '100', 'HSN002', '', '1', '1', '1', '1702629291', '1702629291'),
(7, 'Caps', '1', '2ca5752cfe2cb7e09260b7352529c7e8.png', 'Johnson', 'Accessories', 'Men Accesories', '', '322', '299', '', '', '', '100', '2', '100', 'HSN003', '', '1', '1', '1', '1702629363', '1702629363'),
(8, 'Handkurchief', '5', 'bdf7a6f88d3f70885d1c5541ef45d329.png', 'Johnson', 'Accessories', 'Men Accesories', '', '322', '299', '', '', '', '100', '2', '100', 'HSN004', '', '1', '1', '1', '1702629494', '1702629494'),
(5, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '10', '688dd4e31227eb1082b82e2e8c30c468.png', 'Johnson', 'Women', 'Tank Top', '', '2344', '1346', '<ul xss=removed><li xss=removed>Tencel™ Lyocell Elastane Stretch Fabric</li><li xss=removed>Fabric Composition : Environment Friendly Lyocell Fiber And Elastane</li><li xss=removed>Natural StayFresh Anti-Microbial Properties To Keep You Fresh Throughout The Day</li><li xss=removed>Yolk Back Styling</li><li xss=removed>Relaxed Fit</li><li xss=removed>Label Free For All Day Comfort</li></ul>', '', '', '100', '2', '100', 'HSN001', '', '1', '1', '1', '1702554934', '1702554934'),
(9, 'MEN\'S RELAXED FIT', '1', '73d0330a79418420ffd0e544340eeb8b.png', 'Markwood', 'Men', 'Long Dress', 'Sleeveless Vest', '3', '1', '', '', '', '100', '2', '100', 'HSN006', '', '1', '1', '1', '1702962953', '1702962953'),
(10, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '1', '51befdf4a7ebdcf0b7162837db6064e6.png', 'Markwood', 'Men', 'Tank Top', 'Sleeveless Vest', '322', '299', '', '', '', '100', '2', '100', 'HSN003', '', '1', '1', '1', '1702981552', '1702981552'),
(11, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '1', 'ea7ed07f0b170564919a856911a72601.png', 'Markwood', 'Men', 'Tank Top', 'Sleeveless Vest', '322', '299', '', '', '', '100', '2', '100', 'HSN003', '', '1', '1', '1', '1702981553', '1702981553'),
(12, 'WOMEN\'S ELASTANE RELAXED FIT TANK TOP', '1', '1f945ea9f2d5e0eb674971f14423d817.png,702819dc788d43effe159c006b1c1746.png', 'Brite', 'Women', 'Tank Top', 'Sleeved Vests', '322', '299', '', '', '', '100', '2', '100', 'HSN008', '', '1', '1', '1', '1703752278', '1703752278'),
(13, 'MEN\'S RELAXED FIT', '1', 'c27cec8f922421bacaafae5592ed223f.png,8da50a5b0dc415b11f2cbc75823aa678.png', 'Johnson', 'Women', 'Long Dress', 'Sleeveless Vest', '322', '299', '', '', '#5171d2,#1dcd49', '100', '2', '100', 'hsn001', '', '1', '1', '1', '1703764515', '1703764515'),
(14, 'UNISEX RELAXED FIT', '1', 'c098962538b10495f7a6c1b68c978b77.png,73bd1d89803e37be1950162cc50ab724.png', 'Markwood', 'Men', 'Tank Top', 'Sleeveless Vest', '2344', '299', '', '', '#2a4084,#0efb75,#d0ff14', '100', '2', '100', 'HSN009', '', '1', '1', '1', '1703766743', '1703766743'),
(15, 'FYR FYTER SUPER', '4', '512c178c5bd9da87d28fd34c4088acf9.png', 'Anand', 'Men', 'Long Dress', 'Sleeved Vests', '2344', '1346', '', '', '#000000,#ffffff', '100', '2', '100', 'HSN001', '', '1', '1', '1', '1703928771', '1703928771'),
(16, 'FYR FYTER SUPER', '2', '51754cdd367a5c5ee22cf1f5166fc3b1.png', 'Anand', 'Men', 'Tank Top', 'Sleeved Vests', '322', '244', '', '', '#ffe014,#94acf5', '100', '2', '100', 'HSN0010', '', '1', '1', '1', '1704109531', '1704109531');

-- --------------------------------------------------------

--
-- Table structure for table `subcatg`
--

DROP TABLE IF EXISTS `subcatg`;
CREATE TABLE IF NOT EXISTS `subcatg` (
  `subcatg_id` int NOT NULL AUTO_INCREMENT,
  `subcatg_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `catg_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subcatg_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `update_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`subcatg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcatg`
--

INSERT INTO `subcatg` (`subcatg_id`, `subcatg_name`, `catg_name`, `subcatg_img`, `created_by`, `updated_by`, `status`, `create_at`, `update_at`) VALUES
(1, 'Tank Top', 'Women', 'a935417de67dbae7603a36bf6aa8d026.png', '1', '1', '1', '1702554320', '1702571632'),
(6, 'Long Dress', 'Men', '87f331426bf42f6b47e95a829609e550.png', '1', '1', '1', '1702631508', '1702631508'),
(5, 'Men Accesories', 'Accessories', 'f43cf6175cdf969a7790acc2f64a7392.png', '1', '1', '1', '1702629194', '1702629194');

-- --------------------------------------------------------

--
-- Table structure for table `subsubcatg`
--

DROP TABLE IF EXISTS `subsubcatg`;
CREATE TABLE IF NOT EXISTS `subsubcatg` (
  `ssid` int NOT NULL AUTO_INCREMENT,
  `sscatg_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `catg_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subcatg_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ssubcatg_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `update_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ssid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subsubcatg`
--

INSERT INTO `subsubcatg` (`ssid`, `sscatg_name`, `catg_name`, `subcatg_name`, `ssubcatg_img`, `created_by`, `updated_by`, `status`, `create_at`, `update_at`) VALUES
(2, 'Sleeveless Vest', 'Men', 'Long Dress', '230b068f592aca9fd71901bd5d7eed28.png', '1', '1', '1', '1702919193', '1702920664'),
(3, 'Sleeved Vests', 'Men', 'Long Dress', 'a3b4527ca371e9a34acea74a5d8ed9ea.png', '1', '1', '1', '1702969987', '1702969987'),
(4, 'Gym Vests', 'Men', 'Long Dress', '5c5d774e12376cf1e5823cb4acb6c931.png', '1', '1', '1', '1702970034', '1702970034');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int NOT NULL AUTO_INCREMENT,
  `video_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `video_link` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` set('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_link`, `created_by`, `status`, `create_at`) VALUES
(6, 'printed hoodie', 'https://www.youtube.com/embed/O1PiTXZlEz0?si=Cd7A0Z4ZZ46JobFy', '1', '1', '1703168161');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
