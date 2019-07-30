-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 06:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer_register`
--

CREATE TABLE `dealer_register` (
  `UserId` varchar(20) NOT NULL,
  `JoiningDate` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ContactNo` varchar(30) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `PanCard` varchar(50) NOT NULL,
  `AadharCard` int(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zone` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `SerialNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer_register`
--
ALTER TABLE `dealer_register`
  ADD PRIMARY KEY (`SerialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealer_register`
--
ALTER TABLE `dealer_register`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
