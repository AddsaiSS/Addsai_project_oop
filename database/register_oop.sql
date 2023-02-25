-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 12:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `fullname`, `username`, `useremail`, `password`, `regdate`) VALUES
(11, 'Done FF', '', 'done2023@gmail.com', '123456789', '2023-02-25 08:45:38'),
(12, 'MR John', '', 'john123456@gmail.com', '1234', '2023-02-25 09:14:58'),
(13, 'you', 'youki', 'john123456@gmail.com', '1234', '2023-02-25 09:15:41'),
(14, 'khone', 'khone', 'khone2023@gmail.com', '789+', '2023-02-25 09:18:15'),
(15, 'MR John', 'johnDON', 'john123456@gmail.com', '321654', '2023-02-25 09:46:29'),
(16, 'khone', 'khone', 'khone2023@gmail.com', '1234', '2023-02-25 09:46:52'),
(17, 'gojo', 'gojo', 'Addsai2022@gmail.com', '1234', '2023-02-25 09:47:18'),
(18, 'MS:Honey', 'honey', 'Addsai2022@gmail.com', '1234', '2023-02-25 09:47:57'),
(19, 'nas', 'nas', 'Addxayxaysomedao2023', '1234', '2023-02-25 09:48:15'),
(20, 'mr wang', 'wang', 'Addxayxaysomedao2023', '1234', '2023-02-25 09:48:50'),
(21, 'do', 'do', 'Addxayxaysomedao2023', '00000000', '2023-02-25 09:49:12'),
(22, 'raty', 'raty', 'Addxayxaysomedao2023', '123', '2023-02-25 09:49:30'),
(23, 'wanwan', 'wanwan', 'john123456@gmail.com', '1234', '2023-02-25 09:49:55'),
(24, 'cho', 'Addsai', 'Addxayxaysomedao2023', '7410', '2023-02-25 09:50:12'),
(25, 'vone', 'nao', 'khone2023@gmail.com', '79456', '2023-02-25 09:50:42'),
(26, 'fong', 'fong', 'done2023@gmail.com', 'sdfdfs', '2023-02-25 09:51:09'),
(27, 'youji', 'youji', 'Addsai2022@gmail.com', '123456', '2023-02-25 09:51:32'),
(28, 'Addsai', 'Addsai', 'Addxayxaysomedao2023', '1234', '2023-02-25 09:54:48'),
(29, 'jai', 'jai', 'khone2023@gmail.com', '8520', '2023-02-25 09:55:39'),
(30, '', 'Addsai', '', '1234', '2023-02-25 10:09:49'),
(31, 'bo', 'Addsai', 'khone2023@gmail.com', '1234', '2023-02-25 10:10:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
