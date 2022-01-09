-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 11:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duankhituongthuyvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `maduan` int(20) UNSIGNED NOT NULL,
  `tenduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namthuchien` int(4) NOT NULL,
  `linhvuc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhiemvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquanthuchien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(4, 'Đánh giá mức độ thay đổi khí hậu', 2002, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu'),
(5, 'Đánh giá mức độ thay đổi khí hậu tỉnh Hà Nam', 2016, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu'),
(6, 'Đánh giá mức độ thay đổi khí hậu tỉnh Phú Xuyên', 2008, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu'),
(7, 'Đánh giá mức độ thay đổi khí hậu TP Hồ Chí Minh', 2016, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `maduan` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
