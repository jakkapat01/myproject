-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2025 at 04:06 PM
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
-- Database: `programming_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(50) NOT NULL,
  `username_account` varchar(40) DEFAULT NULL,
  `email_account` varchar(40) DEFAULT NULL,
  `password_account` varchar(97) DEFAULT NULL,
  `role_account` varchar(6) DEFAULT NULL,
  `images_account` varchar(50) DEFAULT NULL,
  `login_count_account` int(1) NOT NULL,
  `lock_account` int(1) NOT NULL,
  `ban_account` datetime DEFAULT NULL,
  `login_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username_account`, `email_account`, `password_account`, `role_account`, `images_account`, `login_count_account`, `lock_account`, `ban_account`, `login_status`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$G7dVGhDm6efYdKt2O.qvKuln6xHosJ9BUUlE0n1IcKeHfYwx9vEwK', 'admin', 'default_images_account.jpg', 0, 0, NULL, 0),
(2, 'poa', 'poa@gmail.com', '$2y$10$saUWLRm2.1NXuoypmVmkJOOQ32IgVPaA3RSzubzdgedISuwe2X.2K', 'member', 'default_images_account.jpg', 0, 0, NULL, 0),
(3, 'jakk', 'jakk@gmail.com', '$2y$10$dqyFS3bbqTABqLzvuRZ4keA8Fu82u9dLCm7G7zun9zVrcJO93BrK.', 'member', 'default_images_account.jpg', 0, 0, NULL, 0),
(4, 'jakkkk', 'jakkk@gmail.com', '$2y$10$4UHDHPW4JTpj60sZB/8x4e4Lofpc351k/Mb5Z.KnauLoBTN8BhVRK', 'member', 'default_images_account.jpg', 0, 0, NULL, 0),
(5, 'jakkapat', 'jakkapat@gmail.com', '$2y$10$U0Hs2FYYVIveASbyL5K3MOWjN3QNTd640qTr4rgUFNNREj4862fNq', 'member', 'default_images_account.jpg', 0, 0, NULL, 0),
(6, 'Fi', 'Siratchawit.pim@gmail.com', '$2y$10$opPnUPpYG.HABSW1vPksEOFqC2nSeZSSGOsvM0EbkOKn5dIBB0pVm', 'member', 'default_images_account.jpg', 0, 0, NULL, 0),
(7, 'pimskm07', 'pimsomkamol220760@gmail.com', '$2y$10$8aKFDrX39Yt93hr.R8yf6.g9LARBYs.Yx21G06YENLM9LihiBpOGi', 'member', 'default_images_account.jpg', 0, 0, NULL, 0),
(9, 'tannn', 'tannn@gmail.com', '$2y$10$SJcBMlslofjiQmoZUJiPSO7qXiRSrNHzSMGdM.vYWM8rz83Y3f4Fa', 'member', 'default_images_account.jpg', 0, 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
