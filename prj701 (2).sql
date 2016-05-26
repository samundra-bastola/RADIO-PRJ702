-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 11:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prj701`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `mname`, `lname`, `email`, `user_name`, `password`, `reset_token`, `created_date`, `updated_date`, `status`) VALUES
(5, 'Sam', '', 'Bas', 'musik21ocean@gmail.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '', '2016-04-15 06:18:54', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_broadcast_period`
--

CREATE TABLE IF NOT EXISTS `tbl_broadcast_period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `created_by` int(20) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_broadcast_period`
--

INSERT INTO `tbl_broadcast_period` (`id`, `name`, `created_by`, `created_date`) VALUES
(1, 'Morning', 1, '2015-04-19 11:30:25'),
(2, 'Day', 1, '2015-04-19 11:30:25'),
(3, 'Evening', 1, '2015-04-19 11:30:25'),
(4, 'Night', 1, '2015-04-19 11:30:25'),
(5, 'raat ko 12 baje', 0, '2016-05-25 13:08:53'),
(6, 'dfs', 0, '2016-05-25 13:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_broadcast_period_time`
--

CREATE TABLE IF NOT EXISTS `tbl_broadcast_period_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `period_id` int(11) NOT NULL,
  `period_time` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `created_by` bigint(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_check_queue`
--

CREATE TABLE IF NOT EXISTS `tbl_check_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `period_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `compleated_time` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_programs_queue`
--

CREATE TABLE IF NOT EXISTS `tbl_daily_programs_queue` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `period_id` int(11) NOT NULL,
  `queue_date` varchar(10) NOT NULL,
  `time_id` varchar(300) NOT NULL,
  `program_id` varchar(300) NOT NULL,
  `queue_serial` varchar(300) NOT NULL,
  `program_status` int(1) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `logo`, `status`) VALUES
(5, '1463999366_FB_IMG_1453757286872.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programs`
--

CREATE TABLE IF NOT EXISTS `tbl_programs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `program_name` varchar(100) NOT NULL,
  `program_type` varchar(200) NOT NULL,
  `media` varchar(60) NOT NULL,
  `program_duration` time NOT NULL,
  `program_host` varchar(100) NOT NULL,
  `program_sponser` varchar(100) NOT NULL,
  `program_photo` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_programs`
--

INSERT INTO `tbl_programs` (`id`, `program_name`, `program_type`, `media`, `program_duration`, `program_host`, `program_sponser`, `program_photo`, `created_date`, `created_by`) VALUES
(1, 'Antaranga', '1', '', '00:30:30', 'Achyut Ghimire', 'Bhat Bhateni', '', '2016-05-18 09:30:39', '1'),
(2, 'Sathi Sanga MAn ka kura', '2', '', '30:00:00', 'Dipendra Shrestha', 'Binayek Supermarket', '1464049599_FB_IMG_1453757286872.jpg', '2016-05-24 06:11:39', ''),
(3, '12 27 kura', '4', '1464050517_10 Milk and Cookies.mp3', '30:00:00', 'Bajra', 'Purple Clone', '', '2016-05-24 06:26:57', '1'),
(4, '', '1', '1464056168_Pakeezah_(From__Ungli_).mp3', '00:00:00', '', '', '', '2016-05-24 08:01:08', ''),
(5, '', '1', '1464056312_Pakeezah_(From__Ungli_).mp3', '00:00:00', '', '', '', '2016-05-24 08:03:32', ''),
(6, 'check', '1', '1464056366_Pyar_Deewana_Hota_Hai_(Acoustic_Cover)-KolkataVid', '00:00:00', '', '', '', '2016-05-24 08:04:26', ''),
(7, '', '1', '1464056713_Sochirahechu_-_Axata___New_Nepali_Acoustic_Pop_So', '00:00:00', '', '', '', '2016-05-24 08:10:13', ''),
(8, 'samagyan', '3', '1464057779_Tumse_Milke_(From__Parinda_).mp3', '30:00:00', 'Dipendra Shrestha', 'Purple Clone', '1464057779_stock-vector-nepal-map-vector-nepal-flag-vector-nepal-253594888.jpg', '2016-05-24 08:27:59', ''),
(9, 'Sama Gyan', '3', '1464057910_Tumse_Milke_(From__Parinda_).mp3', '30:00:00', 'Ram Chandra Poudel', 'Dynamic Softech', '1464057910_stock-vector-nepal-map-vector-nepal-flag-vector-nepal-253594888.jpg', '2016-05-24 08:30:10', ''),
(10, 'Annapurna News', '2', '1464064753_Saware.mp3\n', '30:00:00', 'Dipendra Shrestha', 'Dynamic Softech', '1464064753_received_463207790504555.jpeg', '2016-05-24 10:24:13', '1'),
(11, '', '1', '1464295068_Syndicate_Bipul_Chettri.mp3', '00:00:00', '', '', '', '2016-05-27 02:22:48', ''),
(12, 'Tough Talk', '3', '1464296329_Let Her Go.mp3', '20:00:00', 'Bijay Kumar', 'Media Hub', '1464296329_received_468222963336371.jpeg', '2016-05-27 02:43:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programs_in_period`
--

CREATE TABLE IF NOT EXISTS `tbl_programs_in_period` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `period_id` int(11) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `program_status` int(1) NOT NULL,
  `program_asigned_date` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`, `description`, `status`) VALUES
(3, 'jkk', '20160523035123_12033660_1034046196639411_834989647_n.jpg', 'jhkjhk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `work` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fname`, `mname`, `lname`, `username`, `email`, `password`, `dob`, `gender`, `address`, `country`, `phone`, `work`, `website`, `status`, `photo`, `created_date`) VALUES
(1, 'Bikram', '', 'Neupane', 'w3ecram', 'admin', 'admin', '1996/03/05', 'male', 'Lekhnath 9 Mohoriya', 'Nepal', '9846602246', '', 'Lekhnath 9 Mohoriya', '1', '1464048776_FB_IMG_1446799544691.jpg', '2016-05-24 05:57:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
