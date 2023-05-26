-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 03:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saint_anne`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `password`) VALUES
(1, 'cadeaujones2005@gmail.com', 'email2005pass'),
(2, 'cadeaujones@gmail.com', 'emailpass'),
(3, 'cadeaujones@gmail.com', 'emailpass'),
(4, 'cadeaujones@gmail.com', 'emailpass'),
(5, 'queen_igihozo', 'q12345'),
(6, '0786745774', 'divin1234'),
(7, '250791878853', 'unknown12'),
(8, '0782899086', 'unknown12');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unitprice` varchar(255) NOT NULL,
  `totalprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_in`
--

INSERT INTO `stock_in` (`id`, `name`, `date`, `quantity`, `unitprice`, `totalprice`) VALUES
(0, 'veg', '2023-12-02', '2 tones', '200 rwf', '2000000 rwf'),
(0, 'potat', '2024-12-22', '3 tones', '200 rwf', '200000rwf'),
(0, 'potat', '2024-12-22', '3 tones', '200 rwf', '200000rwf'),
(0, 'cassava', '2023-11-11', '4 tones', '200 rwf', '2500000 rwf'),
(0, 'rice', '2022-12-12', '1 tone', '800 rwf', '40000 rwf');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unitprice` varchar(255) NOT NULL,
  `totalprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_out`
--

INSERT INTO `stock_out` (`id`, `name`, `date`, `quantity`, `unitprice`, `totalprice`) VALUES
(0, 'veg', '2022-04-04', '2 tones', '200 rwf', '2500000 rwf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD KEY `FOREIN KEY` (`id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD KEY `FOREIGN KEY` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
