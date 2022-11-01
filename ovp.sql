-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 11:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_no` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `userName`, `password`, `role`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'mohstaff', 'smith123', 'mohstaff'),
(3, 'mohamed', 'mohamed123', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `date` date NOT NULL,
  `vaccin` varchar(15) NOT NULL,
  `venue` varchar(15) NOT NULL,
  `agegroup` varchar(15) NOT NULL,
  `nodose` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`date`, `vaccin`, `venue`, `agegroup`, `nodose`) VALUES
('2021-09-10', 'chainopham', 'jaffna universi', '20-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mohstaff`
--

CREATE TABLE `mohstaff` (
  `mohid` int(11) NOT NULL,
  `mohname` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mohstaff`
--

INSERT INTO `mohstaff` (`mohid`, `mohname`, `fname`, `lname`, `address`, `tel`, `password`) VALUES
(1, 'Jaffna', 'john', ' smith', 'jaffna', '45435435', 'smith123');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personNo` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `district` varchar(15) NOT NULL,
  `moh` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personNo`, `fname`, `lname`, `address`, `tel`, `sex`, `nic`, `date`, `district`, `moh`, `username`, `password`) VALUES
(1, 'Mohamed ', 'Kamaludeen', '119,Main street,dharga town', '0768523253', 'Male', '993291587v', '1999-11-24', 'Jaffna', 'Jaffna', 'mohamed', 'mohamed123');

-- --------------------------------------------------------

--
-- Table structure for table `smartvacc`
--

CREATE TABLE `smartvacc` (
  `smartvaccNO` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passport4to` varchar(500) NOT NULL,
  `nic4to` varchar(500) NOT NULL,
  `vaccincard4to` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smartvacc`
--

INSERT INTO `smartvacc` (`smartvaccNO`, `nic`, `fullname`, `age`, `email`, `passport4to`, `nic4to`, `vaccincard4to`) VALUES
(1, '993291587v', '', 22, 'mohamedkamaludeen48@gmail.com', 'C:xampphtdocsOVP\newOVPpersonuploaded files.DVL_20221029_190832.jpg', 'C:xampphtdocsOVP\newOVPpersonuploaded files.Untitled design (4).jpg', 'C:xampphtdocsOVP\newOVPpersonuploaded files.ishtikaf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `updatevacc`
--

CREATE TABLE `updatevacc` (
  `vaccno` int(11) NOT NULL,
  `date` date NOT NULL,
  `nic` varchar(15) NOT NULL,
  `vacctype` varchar(15) NOT NULL,
  `batchNO` varchar(15) NOT NULL,
  `vaccstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updatevacc`
--

INSERT INTO `updatevacc` (`vaccno`, `date`, `nic`, `vacctype`, `batchNO`, `vaccstatus`) VALUES
(6, '2021-08-10', '993291587v', 'chainopham', 'ch1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_no`);

--
-- Indexes for table `mohstaff`
--
ALTER TABLE `mohstaff`
  ADD PRIMARY KEY (`mohid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personNo`);

--
-- Indexes for table `smartvacc`
--
ALTER TABLE `smartvacc`
  ADD PRIMARY KEY (`smartvaccNO`);

--
-- Indexes for table `updatevacc`
--
ALTER TABLE `updatevacc`
  ADD PRIMARY KEY (`vaccno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mohstaff`
--
ALTER TABLE `mohstaff`
  MODIFY `mohid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smartvacc`
--
ALTER TABLE `smartvacc`
  MODIFY `smartvaccNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `updatevacc`
--
ALTER TABLE `updatevacc`
  MODIFY `vaccno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
