-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2022 at 03:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `URL`
--

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `urlid` varchar(10) NOT NULL,
  `long_url` varchar(200) NOT NULL,
  `short_url` varchar(100) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `expire_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`urlid`, `long_url`, `short_url`, `added_time`, `expire_time`) VALUES
('38397611', 'https://www.phptpoint.com/how-do-i-hide-an-element-when-printing-a-web-page/', 'https://ln.8tjbNl', '2022-04-29 13:19:18', '2022-04-29 13:24:18'),
('58237696', 'https://www.codexworld.com/php-url-shortener-library-create-short-url/', 'https://ln.PBcPS9', '2022-04-29 13:17:43', '2022-04-29 13:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `password`, `fname`, `lname`) VALUES
(17757042, 'aksamakurrrbi@gmail.com', '$2y$10$Sahe222gtzUcvdnZ6j8lbOtoKYYny3342R8t2f4IjS9PdED.hFIt2', 'user', 'account'),
(43045992, 'aksamakubi@gmail.com', '$2y$10$PKR.IPsPLOOMzGKaM5sofetoxso9k.6Ga7zCCGRKJJfPYtmZgkMQe', 'sabato', 'owigo'),
(55708444, 'owigosabbath1@gmail.com', '$2y$10$bJUP1UwrVt2o4ARoAWEVCudhMvFQRvv1Fl2cPUqO13fjzenTINNz6', 'sabato', 'owigo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`urlid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
