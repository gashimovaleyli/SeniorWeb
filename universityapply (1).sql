-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 10:19 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universityapply`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply1`
--

CREATE TABLE `apply1` (
  `id` int(11) NOT NULL,
  `full_name` varchar(120) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `toefl_point` int(3) DEFAULT NULL,
  `university` varchar(30) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `apart` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply1`
--

INSERT INTO `apply1` (`id`, `full_name`, `email`, `password`, `toefl_point`, `university`, `image`, `address`, `apart`) VALUES
(1, 'Ali Aliyev', 'alialyev15@gmail.com', '123', 55, 'Customer', '1420325228662.jpg', 'BIlkent merkez kampus', 'Apartment Manager'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tofig Aliyev', 'bot@gmail.com', '123', 18, 'Customer', '', 'BIlkent merkez kampus', 'Shop'),
(4, 'Tofig Aliyev', 'mistertofiq1@gmail.com', '123', 11, 'User', '', 'BIlkent merkez kampus', 'Apartment Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply1`
--
ALTER TABLE `apply1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply1`
--
ALTER TABLE `apply1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
