-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 10:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php62_congty`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucdanh`
--

CREATE TABLE `chucdanh` (
  `machucdanh` int(11) NOT NULL,
  `tenchucdanh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chucdanh`
--

INSERT INTO `chucdanh` (`machucdanh`, `tenchucdanh`) VALUES
(1, 'Giám đốc'),
(2, 'Phó Giám đốc'),
(3, 'Trưởng phòng'),
(4, 'Phó trưởng phòng'),
(5, 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` int(11) NOT NULL,
  `machucdanh` int(11) NOT NULL,
  `maphongban` int(11) NOT NULL,
  `hovaten` varchar(500) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` text NOT NULL,
  `luong` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `machucdanh`, `maphongban`, `hovaten`, `ngaysinh`, `quequan`, `luong`) VALUES
(1, 5, 1, 'Nguyễn Văn A', '2000-05-10', 'Hà nội', 20000000),
(2, 5, 1, 'Nguyễn Văn B', '2001-09-15', 'Hà nam', 19000000),
(3, 4, 2, 'Nguyễn Văn C', '2000-10-20', 'Hà nội', 18000000),
(4, 5, 2, 'Nguyễn Văn D', '2002-06-08', 'Huế', 19000000),
(5, 5, 2, 'Nguyễn Văn E', '2000-07-03', 'Huế', 22000000);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `maphongban` int(11) NOT NULL,
  `tenphongban` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`maphongban`, `tenphongban`) VALUES
(1, 'Phòng hạ tầng mạng'),
(2, 'Phòng phát triển dự án'),
(3, 'Phòng An ninh an toàn thông tin'),
(4, 'Phòng Kế toán'),
(5, 'Phòng bảo vệ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucdanh`
--
ALTER TABLE `chucdanh`
  ADD PRIMARY KEY (`machucdanh`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`maphongban`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucdanh`
--
ALTER TABLE `chucdanh`
  MODIFY `machucdanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `maphongban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
