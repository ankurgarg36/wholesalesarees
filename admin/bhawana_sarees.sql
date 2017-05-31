-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 02:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhawana_sarees`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_code` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `school_code` (`school_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`login_id`, `username`, `email`, `password`, `user_type`, `school_name`, `school_code`, `school_address`, `phone_no`, `create_date`, `date`) VALUES
(1, 'admin', 'ankurgarg36@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 1, '', '100', '', '', '2013-03-11', '2013-12-03 01:46:22'),
(29, 'neeraj', 'neeraj@nr.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0, 'Happy Time Public School', '101', 'Bhanjpura Delhi-110053', '9540010034', '2013-06-22', '2013-11-29 02:33:12'),
(30, 'naveen', 'naveen@nr.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, 'Cantvarry Public Shool', '102', 'Gali no-12,C/22,New Ashok Nagar, Delhi-110054', '9953530788', '2013-06-22', '0000-00-00 00:00:00'),
(31, 'marray', 'marray@gmail.com', '6cb557554dea9480de295875d8617b61ebde76a5', 0, 'Marray Public School', '103', 'Sonia Vihar Delhi-110094', '9971712638', '2013-06-22', '0000-00-00 00:00:00'),
(32, 'sudeep', 'paravti@gmail.comn', '35c501f2687d09155b75237c672a7ca88cec4167', 0, 'Parvati Siksha Nikatn', '104', 'Bihar Patna', '9971712638', '2013-06-22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE IF NOT EXISTS `tbl_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ',
  `product_type` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_date` varchar(255) NOT NULL,
  `statu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `product_type`, `color_name`, `date`, `created_date`, `statu`) VALUES
(1, 1, 'Pink', '0000-00-00 00:00:00', '', 0),
(2, 1, 'Blue', '0000-00-00 00:00:00', '', 0),
(3, 1, 'Red', '0000-00-00 00:00:00', '', 0),
(4, 1, 'White', '0000-00-00 00:00:00', '', 0),
(5, 1, 'Black', '0000-00-00 00:00:00', '', 0),
(6, 1, 'Yellow', '0000-00-00 00:00:00', '', 0),
(7, 2, 'Yellow', '0000-00-00 00:00:00', '', 0),
(8, 2, 'Mix Color', '0000-00-00 00:00:00', '', 0),
(9, 1, 'Green', '0000-00-00 00:00:00', '', 0),
(10, 1, 'Brown', '0000-00-00 00:00:00', '', 0),
(11, 3, 'Pink', '0000-00-00 00:00:00', '', 0),
(12, 3, 'Blue', '0000-00-00 00:00:00', '', 0),
(13, 3, 'Red', '0000-00-00 00:00:00', '', 0),
(14, 3, 'White', '0000-00-00 00:00:00', '', 0),
(15, 3, 'Green', '0000-00-00 00:00:00', '', 0),
(16, 3, 'Yellow', '0000-00-00 00:00:00', '', 0),
(17, 3, 'Brown', '0000-00-00 00:00:00', '', 0),
(18, 3, 'Mix Color', '0000-00-00 00:00:00', '', 0),
(19, 3, 'Mergenta', '0000-00-00 00:00:00', '', 0),
(20, 1, 'Mergenta', '0000-00-00 00:00:00', '', 0),
(21, 2, 'Mergenta', '0000-00-00 00:00:00', '', 0),
(22, 3, 'Orange', '0000-00-00 00:00:00', '', 0),
(23, 1, 'Orange', '0000-00-00 00:00:00', '', 0),
(24, 2, 'Orange', '0000-00-00 00:00:00', '', 0),
(25, 1, 'Cream', '0000-00-00 00:00:00', '2013-12-26 12:14:41', 0),
(26, 2, 'White', '0000-00-00 00:00:00', '', 0),
(27, 2, 'Blue', '0000-00-00 00:00:00', '', 0),
(28, 2, 'Red', '0000-00-00 00:00:00', '', 0),
(29, 2, 'Green', '0000-00-00 00:00:00', '', 0),
(30, 2, 'Pink', '0000-00-00 00:00:00', '', 0),
(31, 2, 'Cream', '0000-00-00 00:00:00', '2013-12-26 12:14:41', 0),
(32, 2, 'Brown', '0000-00-00 00:00:00', '', 0),
(33, 2, 'Blue Red', '0000-00-00 00:00:00', '', 0),
(34, 2, 'Black and Silvar', '0000-00-00 00:00:00', '2013-12-28 06:16:30', 0),
(35, 3, 'Purple', '0000-00-00 00:00:00', '2013-12-28 08:52:01', 0),
(36, 3, 'Maroon', '0000-00-00 00:00:00', '2013-12-28 08:56:29', 0),
(37, 3, 'Cream', '0000-00-00 00:00:00', '2013-12-28 09:27:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(2000) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'Ankur ', 'ankur@fsdfsdf.com', '', 'sfjsfsdf sdfldsjf sdflksf sdflkdsjf fsdlkf sfjsd f', '0000-00-00 00:00:00'),
(2, 'Ankur', 'ankur_ins@south.du.ac.in', '', 'Hello this is ankur garg wants to change my address', '0000-00-00 00:00:00'),
(3, 'Test', 'ankurgarg36@gmail.com', '', 'test sdfsf test sflsjfdsf test', '0000-00-00 00:00:00'),
(4, 'Ankur Garg', 'ankur_ins@south.du.ac.in', 'inquery form', 'i want to know the process of form submission.', '0000-00-00 00:00:00'),
(5, 'Sudeep ', 'sudeep@south.du.ac.in', 'test me', 'hi dear your website is ready', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lengha`
--

CREATE TABLE IF NOT EXISTS `tbl_lengha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `path_to_file` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_lengha`
--

INSERT INTO `tbl_lengha` (`id`, `product_code`, `title`, `price`, `material`, `color`, `path_to_file`, `purpose`, `description`, `meta_keywords`, `meta_description`, `created_date`, `date`, `status`) VALUES
(1, '120000001', 'Purple Net Lehenga Chunni With Patch Work', '15240', '26', '35', 'uploads/lengha/120000001@len4.jpg', 'Wedding and Party wear Lengha', 'Capture The Exuberance Of Womanhood In Its Full Glory That Will Bring Out Your Fragility And Femininity. This Gold Color Net Ready Made Lehnga Choli Is Adding The Gorgeous Glamorous Showing The Sense Of Cute And Graceful. It Is Uniquely Crafted With Antiq', 'Purple Net Lehenga Chunni With Patch Work', 'Purple Net Lehenga Chunni With Patch Work', '2013-12-22 01:55:31', '2013-12-22 13:55:31', 0),
(2, '120000002', 'Dark Blue Net Lehenga Chunni With Velvet Border', '15240', '34', '12', 'uploads/lengha/120000002@len3.jpg', 'Wedding and Party wear', 'Dark Blue Net Lehenga Chunni With Velvet Border', 'Dark Blue Net Lehenga Chunni With Velvet Border', 'Dark Blue Net Lehenga Chunni With Velvet Border', '2013-12-22 02:00:24', '2013-12-22 14:00:24', 0),
(3, '120000003', 'Blue Net Lehenga Chunni With Patch Work.', '7800', '34', '12', 'uploads/lengha/120000003@len2.jpg', 'Wedding and Party wear', 'Blue Net Lehenga Chunni With Patch Work.', 'Blue Net Lehenga Chunni With Patch Work.', 'Blue Net Lehenga Chunni With Patch Work.', '2013-12-24 06:58:48', '2013-12-24 06:58:48', 0),
(4, '120000004', 'Maroon Net Lehenga Chunni With Patch Work', '9600', '34', '36', 'uploads/lengha/120000004@len1.jpg', 'Wedding and Party wear Lengha', 'Maroon Net Lehenga Chunni With Patch Work', 'Maroon Net Lehenga Chunni With Patch Work', 'Maroon Net Lehenga Chunni With Patch Work', '2013-12-24 07:01:02', '2013-12-24 07:01:02', 0),
(5, '120000005', 'Maroon Net Lehenga Chunni With Patch Work', '26940', '34', '36', 'uploads/lengha/120000005@len5.jpg', 'Wedding and Party wear Lengha', 'Maroon Net Lehenga Chunni', 'Maroon Net Lehenga Chunni', 'Maroon Net Lehenga Chunni', '2013-12-24 07:02:25', '2013-12-24 07:02:25', 0),
(6, '120000006', 'Majesty Red Lehenga Choli', '4080', '14', '13', 'uploads/lengha/120000006@len6.jpg', 'Wedding and Party wear', 'Majesty Red Lehenga Choli', 'Majesty Red Lehenga Choli', 'Majesty Red Lehenga Choli', '2013-12-24 07:07:07', '2013-12-24 07:07:07', 0),
(7, '120000007', 'Lehenga Cholis khazana red', '32940', '14', '13', 'uploads/lengha/120000007@len7.jpg', 'Wedding and Party wear Lengha', 'Lehenga Cholis khazana red', 'Lehenga Cholis khazana red', 'Lehenga Cholis khazana red', '2013-12-24 07:09:57', '2013-12-24 07:09:57', 0),
(8, '120000008', 'Glamorous Mehendi Green Fish Cut Lehenga Choli', '25380', '26', '15', 'uploads/lengha/120000008@len8.jpg', 'Wedding and Party wear Lengha', 'Glamorous Mehendi Green Fish Cut Lehenga Choli', 'Glamorous Mehendi Green Fish Cut Lehenga Choli', 'Glamorous Mehendi Green Fish Cut Lehenga Choli', '2013-12-24 07:12:39', '2013-12-24 07:12:39', 0),
(9, '120000009', 'Feminine Sangeet Kalidar Lehenga Choli', '18142', '26', '35', 'uploads/lengha/120000009@len9.jpg', 'Wedding and Party wear Lengha', 'Feminine pinkish purple color net kalidar lehenga with multi fancy patch border and pretty work turquoise color brocade patch net long choli with shiny diamantes, stones, jari, jar rdozy work floral creeper design and multi fancy patch border dupatta with', 'Feminine Sangeet Kalidar Lehenga Choli', 'Feminine Sangeet Kalidar Lehenga Choli', '2013-12-24 07:15:00', '2013-12-24 07:15:00', 0),
(10, '120000010', 'Beautiful Net &amp; Brocade Lehenga Choli', '17991', '26', '19', 'uploads/lengha/120000010@len10.jpg', 'Wedding and Party wear Lengha', 'Beautiful magenta color net kalidar lehenga with brocade choli and attractive work maroonish magenta color long kalidar jacket with sleeves is enhanced with glossy jari, jardozy, d diamantes work and brocade, multi fancy patch border on skirt part are add', 'Beautiful Net &amp; Brocade Lehenga Choli', 'Beautiful Net &amp; Brocade Lehenga Choli', '2013-12-24 07:16:23', '2013-12-24 07:16:23', 0),
(11, '120000011', 'Regal Lehenga Choli.', '10740', '32', '36', 'uploads/lengha/120000011@len11.jpg', 'Wedding and Party wear Lengha', 'Regal Lehenga Choli', 'Regal Lehenga Choli.', 'Regal Lehenga Choli.', '2013-12-24 07:21:07', '2013-12-24 07:21:07', 0),
(12, '120000012', 'INDIAN BOLLYWOOD STYLE DESIGNER PARTY WEAR BRIDAL WEDDING LEHENGA CHOLI ', '7600', '32', '12', 'uploads/lengha/120000012@len12.jpg', 'Wedding and Party wear Lengha', 'INDIAN BOLLYWOOD STYLE DESIGNER PARTY WEAR BRIDAL WEDDING LEHENGA CHOLI ', 'INDIAN BOLLYWOOD STYLE DESIGNER PARTY WEAR BRIDAL WEDDING LEHENGA CHOLI ', 'INDIAN BOLLYWOOD STYLE DESIGNER PARTY WEAR BRIDAL WEDDING LEHENGA CHOLI ', '2013-12-24 07:23:10', '2013-12-24 07:23:10', 0),
(13, '120000013', 'Attractive Gathered Pattern Lehenga', '9000', '32', '12', 'uploads/lengha/120000013@len13.jpg', 'Wedding and Party wear Lengha', 'Attractive gathered pattern cream color net lehenga choli is ornamented with shimmering jari, sequins, resham embroidered paisley design motifs, butties, contrast patch bottom of s skirt part and maroon color dupatta with golden patch border reflect the s', 'Attractive gathered pattern cream color net lehenga choli is ornamented with shimmering jari, sequins, resham embroidered paisley design motifs, butties, contrast patch bottom of s skirt part and maroon color dupatta with golden patch border reflect the s', 'Attractive gathered pattern cream color net lehenga choli is ornamented with shimmering jari, sequins, resham embroidered paisley design motifs, butties, contrast patch bottom of s skirt part and maroon color dupatta with golden patch border reflect the s', '2013-12-28 09:27:54', '2013-12-28 09:27:54', 0),
(14, '120000014', 'Graceful off white net lehenga choli', '15840', '28', '14', 'uploads/lengha/120000014@len14.jpg', 'Wedding and Party wear Lengha', 'Attain contemporary charm in this off white shade net lehenga choli. Lehenga is enhanced with sparkling stone studded buttis. Decorative mixed floral appliqued patterns adorned with beads and crystals adds further charm. Contrast fancy embellished panel a', 'Graceful off white net lehenga choli', 'Graceful off white net lehenga choli', '2013-12-28 09:33:21', '2013-12-28 09:33:21', 0),
(15, '120000015', 'Bridal Lehenga Choli. A Kurti style hip-hop Choli in dark bright shades', '39000', '28', '18', 'uploads/lengha/120000015@len15.jpeg', 'Wedding and Party wear Lengha', 'Bridal Lehenga Choli. A Kurti style hip-hop Choli in dark bright shades', 'Bridal Lehenga Choli. A Kurti style hip-hop Choli in dark bright shades', 'Bridal Lehenga Choli. A Kurti style hip-hop Choli in dark bright shades', '2013-12-28 09:36:42', '2013-12-28 09:36:42', 0),
(16, '120000016', 'Bridal Lehenga Choli', '50000', '28', '19', 'uploads/lengha/120000016@len16.jpg', 'Wedding and Party wear Lengha', 'Bridal Lehenga Choli', 'Bridal Lehenga Choli', 'Bridal Lehenga Choli', '2013-12-28 09:51:19', '2013-12-28 09:51:19', 0),
(17, '120000017', 'Bollywood saree designer party wear bridal wedding lehenga choli', '67000', '28', '19', 'uploads/lengha/120000017@saree6.jpg', 'Bollywood saree designer party wear bridal wedding lehenga choli', 'Bollywood saree designer party wear bridal wedding lehenga choli', 'Bollywood saree designer party wear bridal wedding lehenga choli', 'Bollywood saree designer party wear bridal wedding lehenga choli', '2013-12-28 09:55:30', '2013-12-28 09:55:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE IF NOT EXISTS `tbl_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) NOT NULL,
  `material_type` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `user_by` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `material_type` (`material_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id`, `product_type`, `material_type`, `created_date`, `user_by`, `date`, `status`) VALUES
(4, '1', 'Chiffon Sarees', '2013-12-20 06:29:46', '', '2013-12-20 06:29:46', 0),
(5, '1', 'Cotton Sarees', '2013-12-20 06:30:03', '', '2013-12-20 06:30:03', 0),
(6, '1', 'Jacquard Sarees', '2013-12-20 06:30:25', '', '2013-12-20 06:30:25', 0),
(7, '1', 'Net Sarees', '2013-12-20 06:30:43', '', '2013-12-20 06:30:43', 0),
(8, '1', 'Brasso Sarees', '2013-12-20 06:30:56', '', '2013-12-20 06:30:56', 0),
(9, '1', 'Embroidered Sarees', '2013-12-20 06:31:10', '', '2013-12-20 06:31:10', 0),
(10, '1', 'One Minute Sarees', '2013-12-20 06:31:23', '', '2013-12-20 06:31:23', 0),
(11, '1', 'Bhagalpuri Silk', '2013-12-20 06:31:35', '', '2013-12-20 06:31:35', 0),
(12, '1', 'Gergoit Saree', '2013-12-20 06:53:36', '', '2013-12-20 06:53:36', 0),
(13, '2', 'Patila Suit', '2013-12-20 07:00:16', '', '2013-12-20 07:00:16', 0),
(14, '3', 'Long Lengha Choli', '2013-12-24 06:49:49', '', '2013-12-24 07:10:21', 0),
(15, '2', 'Churidar kurta', '2013-12-27 07:03:23', '', '2013-12-27 07:03:23', 0),
(16, '2', 'Anarkali', '2013-12-27 07:03:42', '', '2013-12-27 07:03:42', 0),
(17, '2', 'Indo-western', '2013-12-27 07:04:01', '', '2013-12-27 07:04:01', 0),
(18, '2', 'Cotton', '2013-12-27 09:12:37', '', '2013-12-27 09:12:37', 0),
(19, '2', 'Casual', '2013-12-27 09:13:02', '', '2013-12-27 09:13:02', 0),
(20, '2', 'Formal', '2013-12-27 09:13:17', '', '2013-12-27 09:13:17', 0),
(21, '2', 'Contemporary', '2013-12-27 09:13:40', '', '2013-12-27 09:13:40', 0),
(22, '2', 'Pakistani', '2013-12-27 09:13:54', '', '2013-12-27 09:13:54', 0),
(23, '2', 'Party Wear', '2013-12-27 09:14:05', '', '2013-12-27 09:14:05', 0),
(24, '2', 'Bridal', '2013-12-27 09:14:21', '', '2013-12-27 09:14:21', 0),
(25, '2', 'Wedding', '2013-12-27 09:14:35', '', '2013-12-27 09:14:35', 0),
(26, '3', 'MEHENDI & SANGEET LEHENGA', '2013-12-28 07:21:18', '', '2013-12-28 07:21:19', 0),
(27, '3', 'BRIDESMAID LEHENGA', '2013-12-28 07:21:30', '', '2013-12-28 07:21:30', 0),
(28, '3', 'BRIDAL LEHENGA', '2013-12-28 07:21:40', '', '2013-12-28 07:21:40', 0),
(29, '3', 'BOLLYWOOD LEHENGA', '2013-12-28 07:21:52', '', '2013-12-28 07:21:52', 0),
(30, '3', 'READY TO SHIP LEHENGAS', '2013-12-28 07:22:03', '', '2013-12-28 07:22:03', 0),
(31, '3', 'LEHENGA STYLE SAREES', '2013-12-28 07:22:12', '', '2013-12-28 07:22:12', 0),
(32, '3', 'BOLLYWOOD LEHENGA STYLE SAREES', '2013-12-28 07:22:22', '', '2013-12-28 07:22:22', 0),
(33, '3', 'READY TO SHIP LEHENGA SAREES', '2013-12-28 07:22:32', '', '2013-12-28 07:22:32', 0),
(34, '3', 'NET Lengha Chunni', '2013-12-28 08:53:49', '', '2013-12-28 08:53:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saree`
--

CREATE TABLE IF NOT EXISTS `tbl_saree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `path_to_file` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_saree`
--

INSERT INTO `tbl_saree` (`id`, `product_code`, `title`, `price`, `material`, `color`, `path_to_file`, `purpose`, `description`, `meta_keywords`, `meta_description`, `created_date`, `date`, `status`) VALUES
(2, '100000001', 'Saffon Simple Saree', '5000', '4', '25', 'uploads/saree/100000001@s35.jpg', 'Part Wear', 'Wear any time for any purpose', 'Ciffon Saree,Party Wear', 'Ciffon Saree,Party Wear', '2013-12-22 12:06:22', '2013-12-22 12:06:22', 0),
(3, '100000002', 'Gergoit Multi Color Saree', '2500', '12', '6', 'uploads/saree/100000002@s46.jpg', 'Wedding and Party wear', 'Wear this in any party', 'Wedding Saree, Party Saree', 'Wedding Saree, Party Saree', '2013-12-22 12:24:43', '2013-12-22 12:24:43', 0),
(4, '100000003', 'Simple Net Saree', '8000', '7', '2', 'uploads/saree/100000003@s40.jpg', 'Home wear Simple Saree', 'Home wear Simple Saree', 'Home Saree,Simple Saree', 'Home Saree,Simple Saree', '2013-12-22 02:18:49', '2013-12-22 14:18:49', 0),
(5, '100000004', 'Orange and White Colour Sona silk Material Sarees : Jhalak Collection', '20000', '6', '20', 'uploads/saree/100000004@s37.jpg', ' Sari for casual wear', 'Length of the Saree : 6.3 Meters including Blouse (Standard)', 'Orange and White Colour Sona silk Material Sarees : Jhalak Collection', 'Length of the Saree : 6.3 Meters including Blouse (Standard)', '2013-12-23 06:15:46', '2013-12-23 06:15:46', 0),
(6, '100000005', 'Parrot Green and White Colour South Silk Material Sarees : Jhalak Collection', '10000', '8', '2', 'uploads/saree/100000005@s39.jpg', ' Sari for casual wear', 'Parrot Green and White Colour South Silk Material Sarees : Jhalak Collection\r\nMaterial Type : South Silk', 'Parrot Green and White Colour South Silk Material Sarees : Jhalak Collection', 'Parrot Green and White Colour South Silk Material Sarees : Jhalak Collection\r\nMaterial Type : South Silk', '2013-12-23 06:18:07', '2013-12-23 06:18:07', 0),
(7, '100000006', 'Blue Colour Brasso Material Casual Sarees : Fashionista Collection', '9000', '6', '3', 'uploads/saree/100000006@s44.jpg', 'Designer Sarees for parties and wedding wear', 'Accessories displayed in the photo are not a part of the product.\r\nKey Attributes:\r\nLength of the Saree : 6.3 Meters including Blouse (Standard) ', 'Blue Colour Brasso Material Casual Sarees : Fashionista Collection', 'Length of the Saree : 6.3 Meters including Blouse (Standard) ', '2013-12-23 06:19:23', '2013-12-23 06:19:23', 0),
(8, '100000007', 'Maroon Colour Crepe Material Designer Sarees : Gauri Collection', '2000', '7', '23', 'uploads/saree/100000007@s41.jpg', 'Sari for Parties, Wedding and other functions', 'Accessories displayed in the photo are not a part of the product.\r\nKey Attributes:\r\n\r\nLength of the Saree : 6.3 Meters including Blouse (Standard) ', 'Maroon Colour Crepe Material Designer Sarees : Gauri Collection', 'Accessories displayed in the photo are not a part of the product.\r\nKey Attributes:\r\n\r\nLength of the Saree : 6.3 Meters including Blouse (Standard) ', '2013-12-23 06:20:34', '2013-12-23 06:20:34', 0),
(9, '100000008', 'Deep Red Casual Saree in Chiffon Material: Monsoon Collection', '2002', '7', '4', 'uploads/saree/100000008@s33.jpg', 'Sari for casual wear', 'Exclusive and a classy piece with a plain base look catering minute prints. Random golden prints are given in the entire drape to highlight the plain look of the Saree. Thin golden border is given in the Saree. Try a fancy blouse for trendy look.\r\n\r\nWear ', 'Deep Red Casual Saree in Chiffon Material: Monsoon Collection', 'Blouse and accessories displayed in the photo are not a part of the product. Unstitched blouse is attached with the Saree', '2013-12-23 06:22:18', '2013-12-23 06:22:18', 0),
(10, '100000009', 'Pink and Black Colour Half Georgette and Half Net Material Casual Sarees : Fashionista Collection', '2008', '7', '1', 'uploads/saree/100000009@V29_zps098dc2fc_large.jpeg', 'Pink and Black Colour Half Georgette and Half Net Material Casual Sarees : Fashionista Collection', 'Pink and Black Colour  Half Georgette and Half Net Material Casual Sarees : Fashionista Collection', 'Pink and Black Colour Half Georgette and Half Net Material Casual Sarees : Fashionista Collection', 'Pink and Black Colour  Half Georgette and Half Net Material Casual Sarees : Fashionista Collection - YF-10025\r\nMaterial Type : Georgette and Net', '2013-12-23 06:23:51', '2013-12-23 06:23:51', 0),
(11, '100000010', 'Black and Cream Colour Chiffon Material Casual Sarees : Radhe Collection', '8500', '4', '20', 'uploads/saree/100000010@s43.jpg', ' Sari for casual wear, kitty parties. ', 'Black and Cream Colour Chiffon Material Casual Sarees : Radhe Collection\r\nMaterial Type : Chiffon\r\n', 'Black and Cream Colour Chiffon Material Casual Sarees : Radhe Collection', 'Black and Cream Colour Chiffon Material Casual Sarees : Radhe Collection\r\nMaterial Type : Chiffon\r\n', '2013-12-23 06:26:13', '2013-12-23 06:26:13', 0),
(12, '100000011', 'Beige and Blue Colour Bhagalpuri Silk Material Sarees : Diya Collection', '2000', '10', '6', 'uploads/saree/100000011@s45.jpg', 'Sari for festivals, puja and other occassions', 'Beige and Blue Colour Bhagalpuri Silk Material Sarees : Diya Collection ', 'Beige and Blue Colour Bhagalpuri Silk Material Sarees : Diya Collection', 'Beige and Blue Colour Bhagalpuri Silk Material Sarees : Diya Collection ', '2013-12-23 06:27:30', '2013-12-23 06:27:30', 0),
(13, '100000012', 'Black Colour Half Wrinkle Chiffon and Half Bhagalpuri Material Sarees : Ram-Leela ', '4000', '8', '20', 'uploads/saree/100000012@s32.jpg', ' Sari for Casual party wear, Office.', 'Black Colour Half Wrinkle Chiffon and Half Bhagalpuri Material Sarees : Ram-Leela Collection\r\nMaterial Type : Half Wrinkle Chiffon and Half Bhagalpuri', 'Black Colour Half Wrinkle Chiffon and Half Bhagalpuri Material Sarees : Ram-Leela ', 'Black Colour Half Wrinkle Chiffon and Half Bhagalpuri Material Sarees : Ram-Leela Collection\r\nMaterial Type : Half Wrinkle Chiffon and Half Bhagalpuri', '2013-12-23 06:28:33', '2013-12-23 06:28:33', 0),
(14, '100000013', 'yellow Colour Wrinkle Chiffon Material Designer Sarees : Mermaid Collection', '3550', '4', '3', 'uploads/saree/100000013@s36.jpg', 'Sari for Parties, Family functions, Wedding, Engagements', 'yellow Colour Wrinkle Chiffon Material Designer Sarees : Mermaid Collection Material Type : Wrinkle Chiffon', 'yellow Colour Wrinkle Chiffon Material Designer Sarees : Mermaid Collection', 'yellow Colour Wrinkle Chiffon Material Designer Sarees : Mermaid Collection Material Type : Wrinkle Chiffon', '2013-12-24 06:47:35', '2013-12-24 06:47:35', 0),
(15, '100000014', 'Choose from Red / Blue and White Colour Georgette Material Casual Wear Sarees : Mausam Collection', '3550', '12', '6', 'uploads/saree/100000014@s46.jpg', 'Casual Sarees for regular and formal Functions', 'Red and White Colour Georgette Material Casual Wear Sarees : Mausam Collection\r\nMaterial Type : Georgette', 'Choose from Red / Blue and White Colour Georgette Material Casual Wear Sarees : Mausam Collection', 'Red and White Colour Georgette Material Casual Wear Sarees : Mausam Collection\r\nMaterial Type : Georgette', '2013-12-24 06:49:13', '2013-12-24 06:49:13', 0),
(16, '100000015', 'Black and Beige Colour Half Wrinkle Chiffon and Half Fancy Material Sarees : Ram-Leela Collection', '5000', '9', '10', 'uploads/saree/100000015@s42jpg', ' Sari for Casual party wear, Office.', 'Black and Beige Colour Half Wrinkle Chiffon and Half Fancy Material Sarees : Ram-Leela Collection\r\nMaterial Type : Half Wrinkle Chiffon and Half Fancy', 'Black and Beige Colour Half Wrinkle Chiffon and Half Fancy Material Sarees : Ram-Leela Collection', 'Black and Beige Colour Half Wrinkle Chiffon and Half Fancy Material Sarees : Ram-Leela Collection\r\nMaterial Type : Half Wrinkle Chiffon and Half Fancy', '2013-12-24 06:50:52', '2013-12-24 06:50:52', 0),
(17, '100000016', 'Shades of Red / Purple Colour Jacquard Crape Material Designer Sarees : Patrani Collection', '6000', '9', '25', 'uploads/saree/100000016@s48.jpg', 'Sari for parties, Puja and other functions', 'Shades of Red Colour Jacquard Crape Material Designer Sarees : Patrani Collection', 'Shades of Red / Purple Colour Jacquard Crape Material Designer Sarees : Patrani Collection', 'Length of the Saree : 6.3 Meters including Blouse (Standard) ', '2013-12-24 06:54:36', '2013-12-24 06:54:36', 0),
(18, '100000017', 'Shades of Pink Colour georgette Material Sarees : Adaa Collection', '2000', '12', '5', 'uploads/saree/100000017@s47.jpg', 'Sari for puja, parties and other occassions', 'Shades of Pink Colour georgette Material Sarees : Adaa Collection\r\nMaterial Type : georgette', 'Shades of Pink Colour georgette Material Sarees : Adaa Collection', 'Shades of Pink Colour georgette Material Sarees : Adaa Collection\r\nMaterial Type : georgette', '2013-12-24 06:56:12', '2013-12-24 06:56:12', 0),
(19, '100000018', 'Green Colour Georgette Material Sarees : Adorable Collection', '1704', '12', '2', 'uploads/saree/100000018@s50.jpg', ' Sari for Office wear, kitty parties', 'Green Colour Georgette Material Sarees : Adorable Collection\r\nMaterial Type : Georgette', 'Green Colour Georgette Material Sarees : Adorable Collection', 'Green Colour Georgette Material Sarees : Adorable Collection\r\nMaterial Type : Georgette', '2013-12-24 06:57:44', '2013-12-24 06:57:44', 0),
(20, '100000019', 'Yellow and Blue Colour Wrinkle chiffon Material Sarees : Beautilicious Collection', '2960', '5', '2', 'uploads/saree/100000019@s51.jpg', 'Sari for Diwali, Wedding functions, Parties.', 'Yellow and Blue Colour Wrinkle chiffon Material Sarees : Beautilicious Collection\r\nUnstitched Blouse included with the Saree', 'Yellow and Blue Colour Wrinkle chiffon Material Sarees : Beautilicious Collection', 'Yellow and Blue Colour Wrinkle chiffon Material Sarees : Beautilicious Collection\r\nUnstitched Blouse included with the Saree', '2013-12-24 06:59:37', '2013-12-24 06:59:37', 0),
(21, '100000020', 'Brown Colour Wrinkle Chiffon Material Casual Sarees : Radhe Collection', '1864', '4', '1', 'uploads/saree/100000020@s31.jpg', ' Sari for casual wear, kitty parties. ', 'Brown Colour Wrinkle Chiffon Material Casual Sarees : Radhe Collection - YF-11618\r\nUnstitched Blouse included with the Saree ', 'Brown Colour Wrinkle Chiffon Material Casual Sarees : Radhe Collection', 'Brown Colour Wrinkle Chiffon Material Casual Sarees : Radhe Collection - YF-11618\r\nUnstitched Blouse included with the Saree ', '2013-12-24 07:01:12', '2013-12-24 07:01:12', 0),
(22, '100000021', 'Maroon Colour Crape Material Casual Sarees : Radhe Collection', '18000', '8', '5', 'uploads/saree/100000021@s38.jpg', ' Sari for casual wear, kitty parties. ', 'Maroon Colour Crape Material Casual Sarees : Radhe Collection\r\nUnstitched Blouse included with the Saree ', 'Maroon Colour Crape Material Casual Sarees : Radhe Collection', 'Maroon Colour Crape Material Casual Sarees : Radhe Collection\r\nUnstitched Blouse included with the Saree ', '2013-12-24 07:07:02', '2013-12-24 07:07:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suit`
--

CREATE TABLE IF NOT EXISTS `tbl_suit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `path_to_file` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_suit`
--

INSERT INTO `tbl_suit` (`id`, `product_code`, `title`, `price`, `material`, `color`, `path_to_file`, `purpose`, `description`, `meta_keywords`, `meta_description`, `created_date`, `date`, `status`) VALUES
(1, '110000001', 'Patilia Suit', '590', '13', '8', 'uploads/suit/110000001@su2.jpeg', 'Party Wear', 'Patilia Salwar Suit', 'Red black Salwar Suit', 'Red black Salwar Suit', '2013-12-22 01:27:25', '2013-12-22 13:27:25', 0),
(2, '110000002', 'Suit Salwar', '900', '13', '8', 'uploads/suit/110000002@su3.jpg', 'Party Wear', 'Red black Salwar Suit', 'Red black Salwar Suit', 'Red black Salwar Suit', '2013-12-22 01:29:56', '2013-12-22 13:29:56', 0),
(3, '110000003', 'Blue and Yellow Colour Organza Readymade Salwar Suits (Size - 40 : Large / 42 : XL / 44 : XXL) : Spring Summer Collection', '2850', '13', '27', 'uploads/suit/110000003@110000003@su8.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Black and Golden Colour Organza Readymade Salwar Suits (Size - 40 : Large) : Spring Summer Collection\r\nDupatta included with the Salwar Suit (Readymade Suits) ', 'Black and Golden Colour Organza Readymade Salwar Suits (Size - 40 : Large / 42 : XL / 44 : XXL) : Spring Summer Collection', 'Black and Golden Colour Organza Readymade Salwar Suits (Size - 40 : Large) : Spring Summer Collection\r\nDupatta included with the Salwar Suit (Readymade Suits) ', '2013-12-27 06:59:37', '2013-12-27 06:59:37', 0),
(4, '110000004', 'Red Suit Salvar', '8500', '16', '8', 'uploads/suit/110000004@ss1.jpg', 'Wedding and Party wear Salvar Suit', 'Fabric: Georgette\r\nWork: Machine Embroidery, Resham, Zari, Thread, Border\r\nColor Family: Black and Grey, White and Off White\r\nWashing Instruction: Dry Wash', 'Black and Grey Suit Salvar', 'Black and Grey Suit Salvar', '2013-12-27 09:55:54', '2013-12-27 09:55:54', 0),
(5, '110000005', 'Red color Patilia Suit', '2000', '15', '21', 'uploads/suit/110000005@su5.jpg', 'Suit Salwar for party wear', 'Red color Patilia Suit including duppta', 'Red color Patilia Suit', 'Red color Patilia Suit including duppta', '2013-12-27 10:00:00', '2013-12-27 10:00:00', 0),
(6, '110000006', 'Shades of Pink Colour Anaarkali', '3500', '16', '8', 'uploads/suit/110000006@su6.jpg', 'Sari for casual wear, kitty parties.', 'Shades of Pink Colour Anaarkali\r\nSari for casual wear, kitty parties.', 'Shades of Pink Colour Anaarkali', 'Shades of Pink Colour Anaarkali\r\nSari for casual wear, kitty parties.', '2013-12-27 10:01:48', '2013-12-27 10:01:48', 0),
(7, '110000007', 'Blue Color Duppta and Patilia Suit', '2000', '18', '8', 'uploads/suit/110000007@su7.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Blue Color Duppta and Patilia Suit\r\nReadymade Salwar Suits - for Parties and Functions', 'Blue Color Duppta and Patilia Suit', 'Blue Color Duppta and Patilia Suit\r\nReadymade Salwar Suits - for Parties and Functions', '2013-12-27 10:03:55', '2013-12-27 10:03:55', 0),
(8, '110000008', 'Cream Black Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', '3300', '18', '31', 'uploads/suit/110000008@su15.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', 'Blue Red Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', '2013-12-28 05:28:58', '2013-12-28 05:28:58', 0),
(9, '110000009', 'Blue and Golden Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', '3300', '16', '27', 'uploads/suit/110000009@su4.jpg', ' Readymade Salwar Suits - for Parties and Functions', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection\r\nDupatta included with the Salwar Suit (Readymade Suits)\r\n', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', '2013-12-28 05:41:13', '2013-12-28 05:41:13', 0),
(10, '110000010', 'Yellow Colour Georgette Unstitched Anarkali Salwar Suits : WoW Collection', '2325', '16', '7', 'uploads/suit/110000010@ss10.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Accessories displayed in the photo are not a part of the product. \r\nKey Attributes:\r\nLength of the Salwar Suits : Standard \r\nDupatta included with the Salwar Suit Dress Material \r\n', 'Yellow Colour Georgette Unstitched Anarkali Salwar Suits : WoW Collection', 'Yellow Colour Georgette Unstitched Anarkali Salwar Suits : WoW Collection', '2013-12-28 05:56:29', '2013-12-28 05:56:29', 0),
(11, '110000011', 'Green Colour cotton Readymade Salwar Suits', '3350', '18', '29', 'uploads/suit/110000011@ss8.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Accessories displayed in the photo are not a part of the product. \r\nKey Attributes:\r\nLength of the Salwar Suits : Standard ', 'Readymade Salwar Suits - for Parties and Functions', 'Readymade Salwar Suits - for Parties and Functions', '2013-12-28 06:00:39', '2013-12-28 06:00:39', 0),
(12, '110000012', 'Green Magenta and Pink Colour Cotton Readymade Salwar Suits', '1761', '18', '30', 'uploads/suit/110000012@ss6.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Green Magenta and Pink Colour Cotton Readymade Salwar Suits', 'Green Magenta and Pink Colour Cotton Readymade Salwar Suits', 'Green Magenta and Pink Colour Cotton Readymade Salwar Suits', '2013-12-28 06:03:09', '2013-12-28 06:03:09', 0),
(13, '110000013', 'yellow Color Radymade Salwar Suit', '4000', '21', '7', 'uploads/suit/110000013@su9.jpg', 'Mehndi and Mayon functions.', 'yellow Color Radymade Salwar Suit including Duppta\r\n(Size - 40-Large, 42-X-Large)', 'yellow Color Radymade Salwar Suit', 'yellow Color Radymade Salwar Suit including Duppta\r\n(Size - 40-Large, 42-X-Large)', '2013-12-28 06:07:03', '2013-12-28 06:07:03', 0),
(14, '110000014', 'Shades of Pink Colour Georgette Designer Anarkali Salwar Suits', '2990', '16', '30', 'uploads/suit/110000014@ss7.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Shades of Pink Colour Georgette Designer Anarkali Salwar Suits', 'Shades of Pink Colour Georgette Designer Anarkali Salwar Suits', 'Shades of Pink Colour Georgette Designer Anarkali Salwar Suits', '2013-12-28 06:09:02', '2013-12-28 06:09:02', 0),
(15, '110000015', 'Red color Churidar Salwar Suit', '5220', '15', '28', 'uploads/suit/110000015@su10.jpg', 'perfect Bridal Party Wear Dress 2013.', 'Red Dress having Silver zaro embroidery and thread work neck design with motifs on border and boti on dupatta.Indian designers also applied Laces and strip work to nourish more according to party wear ', 'Red color Churidar Salwar Suit', 'Red Dress having Silver zaro embroidery and thread work neck design with motifs on border and boti on dupatta.Indian designers also applied Laces and strip work to nourish more according to party wear ', '2013-12-28 06:09:07', '2013-12-28 06:09:07', 0),
(16, '110000016', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', '3150', '16', '8', 'uploads/suit/110000016@ss3.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', '2013-12-28 06:11:54', '2013-12-28 06:11:54', 0),
(17, '110000017', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', '3500', '23', '31', 'uploads/suit/110000017@su11.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection\r\n Dupatta included with the Salwar Suit (Readymade Suits) ', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', 'Light Cofee Colour Chanderi Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection\r\n Dupatta included with the Salwar Suit (Readymade Suits) ', '2013-12-28 06:11:54', '2013-12-28 06:11:54', 0),
(18, '110000018', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', '5000', '15', '8', 'uploads/suit/110000018@ss4.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', 'Black Colour Chanderi Readymade Anarkali Salwar Suits', '2013-12-28 06:13:29', '2013-12-28 06:13:29', 0),
(19, '110000019', 'Yellow Colour Mal Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', '2400', '18', '7', 'uploads/suit/110000019@su12.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Yellow Colour Mal Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection\r\nDupatta included with the Salwar Suit (Readymade Suits) ', 'Yellow Colour Mal Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection', 'Yellow Colour Mal Cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : Festive Collection\r\nDupatta included with the Salwar Suit (Readymade Suits) ', '2013-12-28 06:13:56', '2013-12-28 06:13:56', 0),
(20, '110000020', 'Black and Silvar Colour cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : KIYA Collection ', '4500', '16', '34', 'uploads/suit/110000020@su13.jpg', 'Readymade Salwar Suits - for Parties and Functions', 'Black and Green Colour cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : KIYA Collection\r\nDupatta included with the Salwar Suit (Readymade Suits) ', 'Black and Silvar Colour cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : KIYA Collection ', 'Black and Green Colour cotton Readymade Salwar Suits (Size - 40-Large, 42-X-Large) : KIYA Collection\r\nDupatta included with the Salwar Suit (Readymade Suits) ', '2013-12-28 06:16:16', '2013-12-28 06:16:16', 0),
(21, '110000021', 'Yellow Colour Cotton Readymade Anarkali Salwar Suits (Size - 40-Large / 42-X-Large) : Festive Collection', '2845', '18', '7', 'uploads/suit/110000021@su14.jpg', 'Readymade Salwar Suits - for Office and Daily Wear', 'Readymade Anarkali Salwar Suits (Size - 40-Large / 42-X-Large) : Festive \r\nDupatta included with the Salwar Suit (Readymade Suits)\r\nUn-stitched Sleeves attached with the Suit Collection', 'Yellow Colour Cotton Readymade Anarkali Salwar Suits (Size - 40-Large / 42-X-Large) : Festive Collection', 'Readymade Anarkali Salwar Suits (Size - 40-Large / 42-X-Large) : Festive \r\nDupatta included with the Salwar Suit (Readymade Suits)\r\nUn-stitched Sleeves attached with the Suit Collection', '2013-12-28 06:19:46', '2013-12-28 06:19:46', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
