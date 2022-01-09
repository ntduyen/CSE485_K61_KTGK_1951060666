-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 05:23 AM
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
-- Database: `1951060666_libraries`
--

-- --------------------------------------------------------

--
-- Table structure for table `docgia`
--

CREATE TABLE `docgia` (
  `madg` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsinh` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghenghiep` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
('01', 'Nguyễn Trung Văn', 'Nam', '2000', 'Sinh Viên', '2020-02-01', '2022-01-01', 'Hà Nội'),
('02', 'Hà Mạnh Quỳnh', 'Nam', '1999', 'Nhân viên', '2021-01-14', '2023-01-12', 'Tây Hồ'),
('03', 'Trần Văn A', 'Nam', '1998', 'Nhân viên', '2022-01-05', '2024-01-02', 'Văn Quán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
