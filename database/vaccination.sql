-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 10:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`) VALUES
(1, 'admin01', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `vaccine` varchar(20) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `age_group` varchar(10) NOT NULL,
  `dosage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moh`
--

CREATE TABLE `moh` (
  `MOH_id` int(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `name_of_MOH` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moh`
--

INSERT INTO `moh` (`MOH_id`, `district`, `name_of_MOH`, `f_name`, `l_name`, `address`, `contact_no`, `password`, `user_name`) VALUES
(5, 'jaffna', 'jaffna', 'sandas', 'gimhana', 'kadwatha', '1234', 'moh02', 'moh123'),
(6, 'jaffna', 'jaffna', 'kamal', 'mohomad', 'kaluthara', '12345', 'kamal', 'kamal123'),
(7, 'jaffna', 'jaffna', 'sajith', 'ahammed', 'madakalapu', '1234', 'sajith', 'sajith123'),
(8, 'jaffna', 'jaffna', 'sanjana', 'hasini', 'weyanogda', '1234', 'sanjana', 'sanjana123');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `public_id` int(15) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `MOH` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `NIC_no` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`public_id`, `f_name`, `l_name`, `gender`, `mobile_no`, `address`, `district`, `MOH`, `DOB`, `NIC_no`, `user_name`, `password`) VALUES
(17, 'sandas', 'gimhana', 'male', '12345', 'jaffna', 'jaffna', 'jaffna', '19021999', '990502935v', 'sandas01', 'sandas123');

-- --------------------------------------------------------

--
-- Table structure for table `smartvaccination`
--

CREATE TABLE `smartvaccination` (
  `vaccination_id` int(10) NOT NULL,
  `public_id` int(15) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `documents` varchar(60) NOT NULL,
  `age` int(3) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartvaccination`
--

INSERT INTO `smartvaccination` (`vaccination_id`, `public_id`, `nic`, `fname`, `lname`, `fullname`, `address`, `mobile`, `email`, `documents`, `age`, `status`) VALUES
(17, 0, '12334134', 'sandas', 'gimhana', 'sandas gimhana', 'jaffna', '12345', 'sandas@gmail.com', 'uploadDocuments/636063ff3b5db7.69925818-sign.jpeg', 23, 'approved'),
(18, 17, '990502935v', 'sandas', 'gimhana', 'sandas gimhana', 'jaffna', '12345', 'sandas@gmail.com', 'uploadDocuments/6361610e250f80.64862892-sign.jpeg', 23, 'requested'),
(19, 17, '990502935v', 'sandas', 'gimhana', 'sandas gimhana', 'jaffna', '12345', 'sandas@gmail.com', 'uploadDocuments/63616674517244.97646336-sign.jpeg', 23, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin01', 'admin123'),
(2, 'moh01', 'moh123'),
(4, 'public01', 'public123');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `vaccination_id` int(10) NOT NULL,
  `public_id` int(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `vaccine_product` varchar(15) NOT NULL,
  `batch_number` varchar(10) NOT NULL,
  `vaccination_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`vaccination_id`, `public_id`, `date`, `nic`, `vaccine_product`, `batch_number`, `vaccination_status`) VALUES
(1, 17, '01/11/2022', '990502935v', 'physer', '2018', '1stDose');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `moh`
--
ALTER TABLE `moh`
  ADD PRIMARY KEY (`MOH_id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`public_id`);

--
-- Indexes for table `smartvaccination`
--
ALTER TABLE `smartvaccination`
  ADD PRIMARY KEY (`vaccination_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`vaccination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moh`
--
ALTER TABLE `moh`
  MODIFY `MOH_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `public_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `smartvaccination`
--
ALTER TABLE `smartvaccination`
  MODIFY `vaccination_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `vaccination_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
