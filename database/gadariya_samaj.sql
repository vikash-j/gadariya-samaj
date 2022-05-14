-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2019 at 10:03 PM
-- Server version: 5.7.27-0ubuntu2
-- PHP Version: 5.6.40-10+ubuntu19.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadariya_samaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogs_tittle` varchar(70) NOT NULL,
  `images` varchar(256) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `blog_type` varchar(256) NOT NULL,
  `blog_categories` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `event_place` varchar(250) NOT NULL,
  `event_date` datetime NOT NULL,
  `event_time` time DEFAULT NULL,
  `discription` varchar(500) NOT NULL,
  `added_by` int(11) NOT NULL,
  `event_owner` varchar(70) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tittle` varchar(70) NOT NULL,
  `image` varchar(150) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobservice`
--

CREATE TABLE `jobservice` (
  `id` int(11) NOT NULL,
  `job_tittle` varchar(100) NOT NULL,
  `job_type` varchar(150) NOT NULL,
  `job_area` varchar(70) NOT NULL,
  `job_detail` varchar(256) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mapping_city_state_country`
--

CREATE TABLE `mapping_city_state_country` (
  `id` int(11) NOT NULL,
  `map_state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping_city_state_country`
--

INSERT INTO `mapping_city_state_country` (`id`, `map_state_id`, `city_id`) VALUES
(1, 7, 1),
(2, 7, 2),
(3, 7, 3),
(4, 7, 4),
(5, 7, 5),
(6, 7, 6),
(7, 7, 7),
(8, 7, 8),
(9, 7, 9),
(10, 7, 10),
(11, 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `mapping_country_state`
--

CREATE TABLE `mapping_country_state` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping_country_state`
--

INSERT INTO `mapping_country_state` (`id`, `state_id`, `country_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_city`
--

CREATE TABLE `master_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(70) NOT NULL,
  `is_district` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_city`
--

INSERT INTO `master_city` (`city_id`, `city_name`, `is_district`) VALUES
(1, 'RAIPUR', 1),
(2, 'DURG', 1),
(3, 'BLOD', 1),
(4, 'DHAMTARI', 1),
(5, 'KANKER', 1),
(6, 'BILASHPUR', 1),
(7, 'AMBIKAPUR', 0),
(8, 'SARGUJA', 1),
(9, 'RAIGARH', 1),
(10, 'CHARAMA', 0),
(11, 'BHILAI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_country`
--

CREATE TABLE `master_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_country`
--

INSERT INTO `master_country` (`country_id`, `country_name`) VALUES
(1, 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `master_state`
--

CREATE TABLE `master_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(70) NOT NULL,
  `is_union_territory` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_state`
--

INSERT INTO `master_state` (`state_id`, `state_name`, `is_union_territory`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS', 1),
(2, 'ANDHRA PRADESH', 0),
(3, 'ARUNACHAL PRADESH', 0),
(4, 'ASSAM', 0),
(5, 'BIHAR', 0),
(6, 'CHANDIGARH', 1),
(7, 'CHHATTISGARH', 0),
(8, 'DADRA AND NAGAR HAVELI', 1),
(9, 'DAMAN AND DIU', 1),
(10, 'DELHI', 1),
(11, 'GOA', 0),
(12, 'GUJARAT', 0),
(13, 'HARYANA', 0),
(14, 'HIMACHAL PRADESH', 0),
(15, 'JAMMU AND KASHMIR', 0),
(16, 'JHARKHAND', 0),
(17, 'KARNATAKA', 0),
(18, 'KERALA', 0),
(19, 'LAKSHADWEEP', 1),
(20, 'MADHYA PRADESH', 0),
(21, 'MAHARASHTRA', 0),
(22, 'MANIPUR', 0),
(23, 'MEGHALAYA', 0),
(24, 'MIZORAM', 0),
(25, 'NAGALAND', 0),
(26, 'ODISHA', 0),
(27, 'PUDUCHERRY', 1),
(28, 'PUNJAB', 0),
(29, 'RAJASTHAN', 0),
(30, 'SIKKIM', 0),
(31, 'TAMIL NADU', 0),
(32, 'TELANGANA', 0),
(33, 'TRIPURA', 0),
(34, 'UTTARAKHAND', 0),
(35, 'UTTAR PRADESH', 0),
(36, 'WEST BENGAL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_temp`
--

CREATE TABLE `member_temp` (
  `id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Transgender') NOT NULL,
  `age` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `status` enum('Varified','Non-Varified') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_tittle` varchar(70) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `discription` varchar(500) NOT NULL,
  `type_news` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobservice`
--
ALTER TABLE `jobservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapping_city_state_country`
--
ALTER TABLE `mapping_city_state_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapping_country_state`
--
ALTER TABLE `mapping_country_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_city`
--
ALTER TABLE `master_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `master_country`
--
ALTER TABLE `master_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `master_state`
--
ALTER TABLE `master_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `member_temp`
--
ALTER TABLE `member_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobservice`
--
ALTER TABLE `jobservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mapping_city_state_country`
--
ALTER TABLE `mapping_city_state_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mapping_country_state`
--
ALTER TABLE `mapping_country_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `master_city`
--
ALTER TABLE `master_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `master_country`
--
ALTER TABLE `master_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master_state`
--
ALTER TABLE `master_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `member_temp`
--
ALTER TABLE `member_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
