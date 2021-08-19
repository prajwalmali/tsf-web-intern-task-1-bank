-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 06:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Prajwal', 'prajwal@gmail.com', 1638095),
(2, 'Sahil', 'sahil@gmail.com', 114093),
(3, 'Ninad', 'ninad@gmail.com', 214148),
(4, 'Sumukh', 'sumukh@gmail.com', 501089),
(5, 'Mandar', 'mandar@gmail.com', 2301090),
(6, 'Yash', 'yash@gmail.com', 541975),
(7, 'Trushant', 'trushant@gmail.com', 557136),
(8, 'Atharva', 'atharva@gmail.com', 625554),
(9, 'Nitish', 'nitish@gmail.com', 912931),
(10, 'Sami', 'drishya@gmail.com', 456740);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `balance` int(11) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Prajwal', 'Sami', 85000, '2021-08-05'),
(2, 'Sahil', 'Prajwal', 25600, '2021-08-05'),
(3, 'Ninad', 'Sahil', 123654, '2021-08-06'),
(4, 'Sumukh', 'Ninad', 245699, '2021-08-06'),
(5, 'Mandar', 'Sumukh', 45000, '2021-08-07'),
(6, 'Yash', 'Mandar', 74562, '2021-08-10'),
(7, 'Trushant', 'Yash', 78456, '2021-08-11'),
(8, 'Atharva', 'Trushant', 12345, '2021-08-15'),
(9, 'Nitish', 'Atharva', 145662, '2021-08-16'),
(10, 'Sami', 'Nitish', 78566, '2021-08-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
