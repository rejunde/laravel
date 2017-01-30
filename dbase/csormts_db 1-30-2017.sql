-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2017 at 04:09 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csormts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `adminuser_id` int(11) NOT NULL AUTO_INCREMENT,
  `adminuser_email` varchar(100) NOT NULL,
  `adminuser_password` varchar(100) NOT NULL,
  `adminuser_firstname` varchar(100) NOT NULL,
  `adminuser_middlename` varchar(100) NOT NULL,
  `adminuser_lastname` varchar(100) NOT NULL,
  `adminuser_contactnumber` varchar(100) NOT NULL,
  `adminuser_homeaddress` varchar(255) NOT NULL,
  `adminuser_datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adminuser_flag` tinyint(4) NOT NULL,
  `adminuser_last_login` timestamp NOT NULL,
  PRIMARY KEY (`adminuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE IF NOT EXISTS `book_details` (
  `bookdetails_id` int(100) NOT NULL AUTO_INCREMENT,
  `bookrequest_id` int(100) NOT NULL,
  `bookdetails_author` varchar(255) NOT NULL,
  `bookdetails_title` varchar(255) NOT NULL,
  `bookdetails_volume_edition` varchar(255) NOT NULL,
  `bookdetails_year_published` varchar(255) NOT NULL,
  `bookdetails_publisher` varchar(255) NOT NULL,
  `bookdetails_isbn_issn` varchar(255) NOT NULL,
  `bookdetails_type` varchar(255) NOT NULL,
  `bookdetails_tobeplaced` varchar(255) NOT NULL,
  PRIMARY KEY (`bookdetails_id`),
  KEY `bookrequest_id` (`bookrequest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `book_fund`
--

CREATE TABLE IF NOT EXISTS `book_fund` (
  `bookfund_id` int(100) NOT NULL AUTO_INCREMENT,
  `department_id` int(100) NOT NULL,
  `bookfund_SY` varchar(255) NOT NULL,
  `bookfund_Sem` tinyint(4) NOT NULL,
  `bookfund_base` int(100) NOT NULL,
  `bookfund_total` int(100) NOT NULL,
  `bookfund_rem` int(100) NOT NULL,
  `bookdun_update_date` date NOT NULL,
  `bookfund_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bookfund_flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`bookfund_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE IF NOT EXISTS `dealer` (
  `dealer_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `dealer_name` varchar(255) NOT NULL,
  `dealer_contact_fullname` varchar(255) NOT NULL,
  `dealer_contact_no` varchar(255) NOT NULL,
  `dealer_address` varchar(255) NOT NULL,
  `dealer_flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`dealer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(100) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `department_flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_code`, `department_flag`) VALUES
(1, 'Institute of Biology', '', 1),
(2, 'Institute of Chemistry', '', 1),
(3, 'Institute of Environmental Science and Meteorology', '', 1),
(4, 'Institute of Mathematics', '', 1),
(5, 'Marine Science Institute', '', 1),
(6, 'National Institute of Geological Sciences ', '', 1),
(7, 'National Institute of Molecular Biology and Biotechnology', '', 1),
(8, 'National Institute of Physics', '', 1),
(9, 'Material Science and Engineering Program', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_user`
--

CREATE TABLE IF NOT EXISTS `faculty_user` (
  `faculty_user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `faculty_fullname` varchar(255) NOT NULL,
  `faculty_contact_no` varchar(255) NOT NULL,
  `faculty_address` varchar(255) NOT NULL,
  `faculty_department_id` int(100) NOT NULL,
  PRIMARY KEY (`faculty_user_id`),
  KEY `user_id` (`user_id`,`faculty_department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `material_request`
--

CREATE TABLE IF NOT EXISTS `material_request` (
  `materialrequest_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `materialrequest_date_requested` date NOT NULL,
  `materialrequest_flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`materialrequest_id`),
  KEY `user_id` (`user_id`,`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_flag` tinyint(4) NOT NULL,
  `user_update_profile` tinyint(4) NOT NULL,
  `user_last_login` timestamp NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `usertype_id` (`usertype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `usertype_id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype_name` varchar(100) NOT NULL,
  `usertype_flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`usertype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`usertype_id`, `usertype_name`, `usertype_flag`) VALUES
(1, 'Faculty', 1),
(2, 'Dealer', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
