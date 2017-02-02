-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2017 at 10:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csormts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `adminuser_id` int(11) NOT NULL,
  `adminuser_email` varchar(100) NOT NULL,
  `adminuser_password` varchar(100) NOT NULL,
  `adminuser_firstname` varchar(100) NOT NULL,
  `adminuser_middlename` varchar(100) NOT NULL,
  `adminuser_lastname` varchar(100) NOT NULL,
  `adminuser_contactnumber` varchar(100) NOT NULL,
  `adminuser_homeaddress` varchar(255) NOT NULL,
  `adminuser_datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adminuser_flag` tinyint(4) NOT NULL,
  `adminuser_last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `bookdetails_id` int(100) NOT NULL,
  `bookrequest_id` int(100) NOT NULL,
  `bookdetails_author` varchar(255) NOT NULL,
  `bookdetails_title` varchar(255) NOT NULL,
  `bookdetails_volume_edition` varchar(255) NOT NULL,
  `bookdetails_year_published` varchar(255) NOT NULL,
  `bookdetails_publisher` varchar(255) NOT NULL,
  `bookdetails_isbn_issn` varchar(255) NOT NULL,
  `bookdetails_type` varchar(255) NOT NULL,
  `bookdetails_tobeplaced` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_fund`
--

CREATE TABLE `book_fund` (
  `bookfund_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `bookfund_SY` varchar(255) NOT NULL,
  `bookfund_Sem` tinyint(4) NOT NULL,
  `bookfund_base` int(100) NOT NULL,
  `bookfund_total` int(100) NOT NULL,
  `bookfund_rem` int(100) NOT NULL,
  `bookdun_update_date` date NOT NULL,
  `bookfund_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bookfund_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealer_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `dealer_name` varchar(255) NOT NULL,
  `dealer_contact_fullname` varchar(255) NOT NULL,
  `dealer_contact_no` varchar(255) NOT NULL,
  `dealer_address` varchar(255) NOT NULL,
  `dealer_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(100) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `department_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `faculty_user` (
  `faculty_user_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `faculty_fullname` varchar(255) NOT NULL,
  `faculty_contact_no` varchar(255) NOT NULL,
  `faculty_address` varchar(255) NOT NULL,
  `faculty_department_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material_request`
--

CREATE TABLE `material_request` (
  `materialrequest_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `materialrequest_date_requested` date NOT NULL,
  `materialrequest_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_flag` tinyint(4) NOT NULL,
  `user_update_profile` tinyint(4) NOT NULL,
  `user_last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usertype_id`, `email`, `password`, `user_datecreated`, `user_flag`, `user_update_profile`, `user_last_login`, `remember_token`, `updated_at`) VALUES
(1, 3, 'admin', '$2y$10$818Fjjn.iMzJqHNqLh3dk.rWmDBrw7jTJvVW06LLJIFHCccQVgGnS', '2017-01-30 05:09:45', 0, 0, '0000-00-00 00:00:00', 'oB0RGhHowbUWx8jJgVcZFjMJb7jQBjZVGc2qmicznOcRqCU9gvhao7F3GTas', '2017-01-30 08:54:49'),
(2, 1, 'faculty', '$2y$10$a4QcfPrOl1D6BHgRNoPXPuw0dkoyinYKi8mX79JPuSrS.axX8Qcui', '2017-01-30 05:09:45', 0, 0, '0000-00-00 00:00:00', 'HKUWMMZMFExUABqlBqYMh3pC7MU7OZn6EBC8glOvbOlTF185KCOIGFKD9Egn', '2017-01-30 08:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `usertype_id` int(11) NOT NULL,
  `usertype_name` varchar(100) NOT NULL,
  `usertype_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`usertype_id`, `usertype_name`, `usertype_flag`) VALUES
(1, 'Faculty', 1),
(2, 'Dealer', 1),
(3, 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`adminuser_id`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`bookdetails_id`),
  ADD KEY `bookrequest_id` (`bookrequest_id`);

--
-- Indexes for table `book_fund`
--
ALTER TABLE `book_fund`
  ADD PRIMARY KEY (`bookfund_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dealer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `faculty_user`
--
ALTER TABLE `faculty_user`
  ADD PRIMARY KEY (`faculty_user_id`),
  ADD KEY `user_id` (`user_id`,`faculty_department_id`);

--
-- Indexes for table `material_request`
--
ALTER TABLE `material_request`
  ADD PRIMARY KEY (`materialrequest_id`),
  ADD KEY `user_id` (`user_id`,`department_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype_id` (`usertype_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`usertype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `adminuser_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `bookdetails_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_fund`
--
ALTER TABLE `book_fund`
  MODIFY `bookfund_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `faculty_user`
--
ALTER TABLE `faculty_user`
  MODIFY `faculty_user_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material_request`
--
ALTER TABLE `material_request`
  MODIFY `materialrequest_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
