-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 10:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmative`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(150) NOT NULL,
  `company` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `company`, `category`) VALUES
(18, 'Chaddar Pharma', 'Omeprazole'),
(19, 'Zubair Pharma', 'Paracetamol'),
(28, 'Asad Pharma', 'Ibuprofin'),
(29, 'National Pharma', 'Diazepam'),
(30, 'Chaddar', 'Panadol');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(150) NOT NULL,
  `company` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company`) VALUES
(20, 'Chaddar Pharma'),
(46, 'Asad Pharma'),
(47, 'National Pharma');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(150) NOT NULL,
  `companyname` varchar(150) NOT NULL,
  `categoryname` varchar(150) NOT NULL,
  `medicinename` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `expiry` date NOT NULL,
  `stock` int(150) NOT NULL,
  `price` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `companyname`, `categoryname`, `medicinename`, `unit`, `expiry`, `stock`, `price`) VALUES
(13, 'Chaddar Pharma', 'Omeprazole', 'Omega', 'mg', '2023-12-31', 100, '20'),
(14, 'Zubair Pharma', 'Paracetamol', 'Panadol', 'mg', '2022-12-06', 100, '3'),
(21, 'Zubair Pharma', 'Paracetamol', 'Calpol', 'mg', '2022-12-06', 0, '2'),
(22, 'Asad Pharma', 'Ibuprofen', 'Brufen', 'ml', '2022-12-06', 60, '45'),
(23, 'National Pharma', 'Diazepam', 'Valium', 'mg', '2024-01-22', 60, '70'),
(24, 'Chaddar', 'Omeprazole', 'Panadol', 'ml', '2024-05-28', 10, '12');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `cnic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`fname`, `email`, `password`, `cnic`) VALUES
('admin', 'admin@gmail.com', 'admin123', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
