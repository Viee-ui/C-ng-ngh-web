-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 08:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyhocphan`
--

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `TongSoLop` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `HoTen`, `HinhAnh`, `TongSoLop`) VALUES
(6, 'Nguyễn Văn An', 'images/an.png', 5),
(7, 'Trần Thanh Bình', 'images/binh.png', 3),
(8, 'Phạm Minh Hòa', 'images/hoa.png', 4),
(9, 'Phạm Thị Lan', 'images/lan.png', 6),
(10, 'Đỗ Văn Cường', 'images/cuong.png', 2),
(11, 'Đinh Thị Mỹ Hạnh', 'uploads/1762931735_hanh.png', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
