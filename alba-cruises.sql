-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 06:24 PM
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
-- Database: `alba-cruises`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_ID` int(10) NOT NULL,
  `trip_ID` int(10) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `tickets` int(2) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `user_ID` int(10) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `total_bookings` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`user_ID`, `forename`, `surname`, `user_email`, `user_password`, `total_bookings`) VALUES
(6, 'Nathan', 'Moir', '14022526@uhi.ac.uk', '$2y$10$xYnoHe.BG2loNQmhJLr.uura4h/sNYuQ.EOwFylrJZO6vy8sVNWPq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ferry_trips`
--

CREATE TABLE `ferry_trips` (
  `trip_ID` int(4) NOT NULL,
  `season_ID` int(4) NOT NULL,
  `depart_date` date NOT NULL,
  `depart_time` time NOT NULL,
  `arrive_time` time NOT NULL,
  `route_name` varchar(20) NOT NULL,
  `seats_filled` int(2) NOT NULL,
  `accessible_seats` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ferry_trips`
--

INSERT INTO `ferry_trips` (`trip_ID`, `season_ID`, `depart_date`, `depart_time`, `arrive_time`, `route_name`, `seats_filled`, `accessible_seats`) VALUES
(1, 2022, '2022-08-22', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(2, 2022, '2022-08-22', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(3, 2022, '2022-08-22', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(4, 2022, '2022-08-22', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(5, 2022, '2022-08-23', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(6, 2022, '2022-08-23', '12:30:00', '13:30:00', 'Eigg - Rum', 0, 1),
(7, 2022, '2022-08-23', '15:30:00', '16:00:00', 'Rum - Eigg', 0, 1),
(8, 2022, '2022-08-23', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(9, 2022, '2022-08-24', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(10, 2022, '2022-08-24', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(11, 2022, '2022-08-24', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(12, 2022, '2022-08-24', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(13, 2022, '2022-08-25', '11:00:00', '12:45:00', 'Mallaig - Rum', 0, 1),
(14, 2022, '2022-08-25', '15:45:00', '17:30:00', 'Rum - Mallaig', 0, 1),
(15, 2022, '2022-08-26', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(16, 2022, '2022-08-26', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(17, 2022, '2022-08-26', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(18, 2022, '2022-08-26', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(19, 2022, '2022-08-27', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(20, 2022, '2022-08-27', '12:30:00', '13:30:00', 'Eigg - Rum', 0, 1),
(21, 2022, '2022-08-27', '15:30:00', '16:00:00', 'Rum - Eigg', 0, 1),
(22, 2022, '2022-08-27', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(23, 2022, '2022-08-28', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(24, 2022, '2022-08-28', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(25, 2022, '2022-08-28', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(26, 2022, '2022-08-28', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(27, 2022, '2022-08-29', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(28, 2022, '2022-08-29', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(29, 2022, '2022-08-29', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(30, 2022, '2022-08-29', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(31, 2022, '2022-08-30', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(32, 2022, '2022-08-30', '12:30:00', '13:30:00', 'Eigg - Rum', 0, 1),
(33, 2022, '2022-08-30', '15:30:00', '16:00:00', 'Rum - Eigg', 0, 1),
(34, 2022, '2022-08-30', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(35, 2022, '2022-08-31', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(36, 2022, '2022-08-31', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(37, 2022, '2022-08-31', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(38, 2022, '2022-08-31', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(39, 2022, '2022-09-01', '11:00:00', '12:45:00', 'Mallaig - Rum', 0, 1),
(40, 2022, '2022-09-01', '15:45:00', '17:30:00', 'Rum - Mallaig', 0, 1),
(41, 2022, '2022-09-02', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(42, 2022, '2022-09-02', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(43, 2022, '2022-09-02', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(44, 2022, '2022-09-02', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(45, 2022, '2022-09-05', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(46, 2022, '2022-09-05', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(47, 2022, '2022-09-05', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(48, 2022, '2022-09-05', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(49, 2022, '2022-09-06', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(50, 2022, '2022-09-06', '12:30:00', '13:30:00', 'Eigg - Rum', 0, 1),
(51, 2022, '2022-09-06', '15:30:00', '16:00:00', 'Rum - Eigg', 0, 1),
(52, 2022, '2022-09-06', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(53, 2022, '2022-09-07', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(54, 2022, '2022-09-07', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(55, 2022, '2022-09-07', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(56, 2022, '2022-09-07', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(57, 2022, '2022-09-08', '11:00:00', '12:45:00', 'Mallaig - Rum', 0, 1),
(58, 2022, '2022-09-08', '15:45:00', '17:30:00', 'Rum - Mallaig', 0, 1),
(59, 2022, '2022-09-09', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(60, 2022, '2022-09-09', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(61, 2022, '2022-09-09', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(62, 2022, '2022-09-09', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(63, 2022, '2022-09-12', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(64, 2022, '2022-09-12', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(65, 2022, '2022-09-12', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(66, 2022, '2022-09-12', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(67, 2022, '2022-09-13', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(68, 2022, '2022-09-13', '12:30:00', '13:30:00', 'Eigg - Rum', 0, 1),
(69, 2022, '2022-09-13', '15:30:00', '16:00:00', 'Rum - Eigg', 0, 1),
(70, 2022, '2022-09-13', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(71, 2022, '2022-09-14', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(72, 2022, '2022-09-14', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(73, 2022, '2022-09-14', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(74, 2022, '2022-09-14', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1),
(75, 2022, '2022-09-15', '11:00:00', '12:45:00', 'Mallaig - Rum', 0, 1),
(76, 2022, '2022-09-15', '15:45:00', '17:30:00', 'Rum - Mallaig', 0, 1),
(77, 2022, '2022-09-16', '11:00:00', '12:00:00', 'Mallaig - Eigg', 0, 1),
(78, 2022, '2022-09-16', '12:30:00', '13:30:00', 'Eigg - Muck', 0, 1),
(79, 2022, '2022-09-16', '15:30:00', '16:00:00', 'Muck - Eigg', 0, 1),
(80, 2022, '2022-09-16', '16:30:00', '17:30:00', 'Eigg - Mallaig', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `season_ID` int(4) NOT NULL,
  `season_start` date NOT NULL,
  `season_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`season_ID`, `season_start`, `season_end`) VALUES
(2022, '2022-05-16', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `staff_ID` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`staff_ID`, `username`, `password`) VALUES
(1, 'admin@alba.com', '$2y$10$AphGcaksvZLX3ffVCFcIiu2ENhaD113GfBxxbpYQNvB6bRJvOzC02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `ferry_trips`
--
ALTER TABLE `ferry_trips`
  ADD PRIMARY KEY (`trip_ID`),
  ADD KEY `season_ID` (`season_ID`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`season_ID`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ferry_trips`
--
ALTER TABLE `ferry_trips`
  MODIFY `trip_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `season_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `staff_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `customer_login` (`user_ID`);

--
-- Constraints for table `ferry_trips`
--
ALTER TABLE `ferry_trips`
  ADD CONSTRAINT `ferry_trips_ibfk_1` FOREIGN KEY (`season_ID`) REFERENCES `season` (`season_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
