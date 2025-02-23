-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2025 at 04:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_booking_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `no` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `booking_name` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `booking_phone` varchar(10) NOT NULL,
  `booking_staff` varchar(100) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`no`, `table_id`, `booking_name`, `booking_date`, `booking_time`, `booking_phone`, `booking_staff`, `dateCreate`) VALUES
(16, 10, 'jhkhk', '2025-02-13', '23:30:00', '0935516901', '', '2025-02-13 02:25:32'),
(17, 8, 'แทนนน', '2025-02-13', '22:30:00', '0000000000', '', '2025-02-13 04:25:26'),
(18, 3, 'poaaa', '2025-02-13', '22:30:00', '0000000000', '', '2025-02-13 04:33:06'),
(28, 23, 'poaaaaa', '2025-02-18', '22:02:00', '2342342423', '', '2025-02-18 15:14:40'),
(32, 12, 'eiteu', '2025-02-20', '23:30:00', '0989348298', '', '2025-02-20 14:04:41'),
(36, 15, 'tleee', '2025-02-20', '22:23:00', '9283749374', '', '2025-02-20 15:24:02'),
(38, 34, 'paoaa', '2025-02-23', '22:23:00', '3746375638', '', '2025-02-23 11:34:10'),
(39, 2, 'poaaa', '2025-02-23', '22:30:00', '3249834793', '', '2025-02-23 17:33:09'),
(40, 20, 'poaaa', '2025-02-23', '22:20:00', '9373984793', '', '2025-02-23 17:37:24'),
(41, 24, 'poaojfa', '2025-02-23', '22:30:00', '2398298420', '', '2025-02-23 20:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE `tbl_table` (
  `id` int(11) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `table_status` int(1) NOT NULL COMMENT '0 =ว่าง , 1 = จอง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`id`, `table_name`, `table_status`) VALUES
(1, 'A01', 1),
(2, 'A02', 1),
(3, 'A03', 1),
(4, 'A04', 0),
(5, 'A05', 1),
(6, 'B01', 0),
(7, 'B02', 0),
(8, 'B03', 0),
(9, 'B04', 0),
(10, 'B05', 0),
(11, 'C01', 0),
(12, 'C02', 0),
(13, 'C03', 1),
(14, 'C04', 0),
(15, 'C05', 0),
(16, 'D01', 0),
(17, 'D02', 0),
(18, 'D03', 0),
(19, 'D04', 0),
(20, 'D05', 1),
(21, 'E01', 1),
(22, 'E02', 0),
(23, 'E03', 1),
(24, 'E04', 1),
(25, 'E05', 0),
(26, 'F01', 0),
(27, 'F02', 0),
(28, 'F03', 0),
(29, 'F04', 0),
(30, 'F05', 0),
(31, 'G01', 0),
(32, 'G02', 1),
(33, 'G03', 0),
(34, 'G04', 0),
(35, 'G05', 0),
(36, 'H01', 0),
(37, 'H02', 0),
(38, 'H03', 0),
(39, 'H04', 0),
(40, 'H05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_table`
--
ALTER TABLE `tbl_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
