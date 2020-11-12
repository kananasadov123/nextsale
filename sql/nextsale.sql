-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 06:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(222) NOT NULL,
  `name` varchar(22) DEFAULT NULL,
  `surname` varchar(22) DEFAULT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `phone`) VALUES
(1, 'Kənan Əsədov', 'Admin', 'kenanasadovk05@mail.ru', '10'),
(2, 'Elvin Qarayev', 'Yazar', 'elvin-arslan@mail.ru', '6'),
(5, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(6, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(7, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(8, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(9, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(10, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(11, 'Abbasov', 'Abbasov', 'x.abbasov123@gmail.com', '0702721775'),
(12, 'asdasd', 'asdasd', 'x.abbasov123@gmail.com', '0702721775'),
(13, 'asd', 'asdasd', 'x.abbasov123@gmail.com', '0702721775');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
