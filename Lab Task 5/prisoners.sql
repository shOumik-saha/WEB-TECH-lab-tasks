-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 10:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prisoners`
--

INSERT INTO `prisoners` (`id`, `Name`, `Address`, `Nationality`, `image`) VALUES
(2, 'Michale Scofield', 'Los angeles,California', 'American', ''),
(3, 'Michale Scofield', 'Los angeles,California', 'American', ''),
(4, 'mr. abul', 'Dhanmondi,Dhaka', 'Bangladeshi', ''),
(5, 'mr. kalam', 'Uttara,Dhaka', 'Bangladeshi', ''),
(6, 'mr. salam', 'Mirpur,Dhaka', 'Bangladeshi', ''),
(7, 'Lincon', 'Savar,Dhaka', 'Bangladeshi', ''),
(8, 'Lincon', 'Savar,Dhaka', 'Bangladeshi', ''),
(9, 'Drake', 'Los Aneles, California', 'Bangladeshi', ''),
(10, 'Harry', 'London,England', 'Bangladeshi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prisoners`
--
ALTER TABLE `prisoners`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
