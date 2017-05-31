-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2013 at 12:18 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_financial_system`
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
(1, 'admin', 'ankurgarg36@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '', '100', '', '', '2013-03-11', '2013-07-02 05:46:44'),
(29, 'neeraj', 'neeraj@nr.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, 'Happy Time Public School', '101', 'Bhanjpura Delhi-110053', '9540010034', '2013-06-22', '0000-00-00 00:00:00'),
(30, 'naveen', 'naveen@nr.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0, 'Cantvarry Public Shool', '102', 'Gali no-12,C/22,New Ashok Nagar, Delhi-110054', '9953530788', '2013-06-22', '0000-00-00 00:00:00'),
(31, 'marray', 'marray@gmail.com', '6cb557554dea9480de295875d8617b61ebde76a5', 0, 'Marray Public School', '103', 'Sonia Vihar Delhi-110094', '9971712638', '2013-06-22', '0000-00-00 00:00:00'),
(32, 'sudeep', 'paravti@gmail.comn', '35c501f2687d09155b75237c672a7ca88cec4167', 0, 'Parvati Siksha Nikatn', '104', 'Bihar Patna', '9971712638', '2013-06-22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrower_info`
--

CREATE TABLE IF NOT EXISTS `tbl_borrower_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `loan_status` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `gender2` varchar(255) NOT NULL,
  `contact_no2` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `gender3` varchar(255) NOT NULL,
  `contact_no3` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `recieved` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `admission_date` varchar(255) NOT NULL,
  `user_by` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tbl_borrower_info`
--

INSERT INTO `tbl_borrower_info` (`id`, `status`, `loan_status`, `name`, `father_name`, `dob`, `gender`, `address`, `contact_no`, `name2`, `gender2`, `contact_no2`, `address2`, `name3`, `gender3`, `contact_no3`, `address3`, `issue`, `recieved`, `balance`, `admission_date`, `user_by`, `date`) VALUES
(41, 0, 1, 'Deepak', 'Mahaveer', '01-01-1950', 'Male', 'Greater Noida', '345345345', 'Rahul', 'Male', '', '', 'Rakes', '', '', '', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:17:50'),
(42, 0, 1, 'Dinesh', 'Ramesh', '02-03-1951', 'Male', 'sdfsdf', '345345345', 'Sachin', 'Male', '23423', '', 'Deewpa', '', '', '\r\n', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:18:19'),
(43, 0, 1, 'David', 'Peetrsab', '03-03-1952', 'Male', 'sddfsf', '234233434', 'ewrwe', 'Female', 's', '', 'Ankur', '', '', '', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:19:46'),
(44, 0, 1, 'Deepa', 'Suresh', '04-01-1952', 'Female', 'f', '55555555', 'Rahul', 'Female', '', '', 'Saakil', '', '', '', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:22:14'),
(45, 0, 0, 'Deepali', 'Peetrsab', '02-02-1951', 'Female', 'sdfsf', '345345345', 'Rahul', 'Female', 's', 'sdfs', 'Ankur', 'Female', 'sdsdf', 'sdfsdf', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:14:12'),
(46, 0, 1, 'Dharm Singh', 'Rampal Singh', '04-05-1953', 'Male', 'sdf', '55555555', 'Rahul', 'Female', '23423', '', 'Ankur', '', '', '', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:21:27'),
(47, 0, 0, 'Deepu', 'Ramesh', '05-03-1953', 'Male', 'sfdsf', '9987954656', 'Rahul', 'Male', 's', '', 'Saakil', '', '', '', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:16:52'),
(48, 0, 0, 'Deshpal', 'Dharmpa', '03-03-1952', 'Male', 'fsdf', '9987954656', 'sdfsdf', 'Female', 's', '', 'Kailish', 'Female', '', '', '', '', '', '2013-07-13', 'neeraj', '2013-07-13 08:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_issue`
--

CREATE TABLE IF NOT EXISTS `tbl_loan_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `loan_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `rate_of_int` varchar(255) NOT NULL,
  `no_of_days` varchar(255) NOT NULL,
  `user_by` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tbl_loan_issue`
--

INSERT INTO `tbl_loan_issue` (`id`, `name`, `status`, `loan_id`, `amount`, `start_date`, `end_date`, `month`, `rate_of_int`, `no_of_days`, `user_by`, `date`) VALUES
(41, '41', 0, '1', '4000', '13-07-2013', '11-11-2013', '07', '5', '120', 'neeraj', '2013-07-13 08:17:50'),
(42, '42', 0, '2', '5000', '13-07-2013', '11-11-2013', '07', '4', '120', 'neeraj', '2013-07-13 08:18:19'),
(43, '43', 0, '3', '6500', '14-07-2013', '12-11-2013', '07', '6', '120', 'neeraj', '2013-07-13 08:19:46'),
(44, '46', 0, '4', '7000', '15-07-2013', '13-11-2013', '07', '4', '120', 'neeraj', '2013-07-13 08:21:27'),
(45, '44', 0, '5', '7050', '13-07-2013', '11-11-2013', '07', '6', '120', 'neeraj', '2013-07-13 08:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_recieve`
--

CREATE TABLE IF NOT EXISTS `tbl_loan_recieve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `loan_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `user_by` varchar(255) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `tbl_loan_recieve`
--

INSERT INTO `tbl_loan_recieve` (`id`, `name`, `status`, `loan_id`, `amount`, `month`, `date`, `user_by`, `date_modified`) VALUES
(68, '41', 0, '1', '1000', '07', '13-07-2013', 'neeraj', '2013-07-13 08:23:59'),
(69, '42', 0, '2', '1000', '07', '13-07-2013', 'neeraj', '2013-07-13 08:24:15'),
(70, '41', 0, '1', '222', '07', '14-07-2013', 'neeraj', '2013-07-13 08:25:30'),
(71, '42', 0, '2', '444', '07', '15-07-2013', 'neeraj', '2013-07-13 08:26:18'),
(72, '41', 0, '1', '100', '07', '15-07-2013', 'neeraj', '2013-07-13 08:28:13'),
(73, '41', 0, '1', '100', '07', '16-07-2013', 'neeraj', '2013-07-13 08:28:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
