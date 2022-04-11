-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 05:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `booking_date` varchar(11) DEFAULT NULL,
  `amount` varchar(211) DEFAULT NULL,
  `booking_time` varchar(211) DEFAULT NULL,
  `status` varchar(211) DEFAULT NULL,
  `patient_phone` varchar(211) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `patient_id`, `booking_date`, `amount`, `booking_time`, `status`, `patient_phone`) VALUES
(7, 8, 11, '2022-04-10', '200', '03:00:00pm', 'pending', NULL),
(8, 8, 11, '2022-04-16', '200', '03:00:00pm', 'pending', NULL),
(9, 8, 11, '2022-04-16', '200', '03:00:00pm', 'pending', NULL),
(10, 8, 11, '2022-04-16', '200', '03:00:00pm', 'pending', NULL),
(11, 8, 11, '2022-04-16', '200', '03:00:00pm', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` int(11) NOT NULL,
  `name` varchar(211) DEFAULT NULL,
  `address` varchar(211) DEFAULT NULL,
  `latitude` varchar(211) DEFAULT NULL,
  `longitude` varchar(211) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `address`, `latitude`, `longitude`, `user_id`) VALUES
(1, 'clicnic here', 'aaaa', '123456', '12222334', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(211) DEFAULT NULL,
  `name` varchar(211) DEFAULT NULL,
  `email` varchar(211) DEFAULT NULL,
  `avatar` varchar(211) DEFAULT NULL,
  `password` varchar(211) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `occupation` varchar(211) DEFAULT NULL,
  `speciality` varchar(211) DEFAULT NULL,
  `verification_code` varchar(211) DEFAULT NULL,
  `gender` varchar(211) DEFAULT NULL,
  `status` varchar(211) DEFAULT 'pending',
  `address` varchar(211) DEFAULT NULL,
  `latitude` varchar(211) DEFAULT NULL,
  `longitude` varchar(211) DEFAULT NULL,
  `fees` varchar(211) DEFAULT NULL,
  `national_id` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `emergency_contact` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `phone`, `password`, `date_of_birth`, `occupation`, `speciality`, `verification_code`, `gender`, `status`, `address`, `latitude`, `longitude`, `fees`, `national_id`, `phone_number`, `emergency_contact`, `is_active`) VALUES
(8, 'doctor', 'yasir', 'user@gmail.com', '03003632781', '12345678', '1992-06-18', 'ocp', 'aaaa', NULL, 'Male', 'pending', '0', '0', '0', '200', '', '', '', 0),
(9, 'doctor', 'user1', 'user1@gmail.com', '03003632781', 'Abcd1234', '2022-04-23', 'ocp', 'ccddddss', NULL, 'male', 'pending', '0', '0', '0', '0', '', '', '', 0),
(10, 'doctor', 'user', 'user@gmail.com', '03003632781', 'Abcd1234', '1992-06-18', 'ocp', 'kkkkkkk', NULL, 'male', 'pending', '0', '0', '0', '0', '', '', '', 0),
(11, 'patient', 'use51', 'user4@gmail.com', '03003632781', 'abc', '2022-04-23', 'ocp', NULL, NULL, 'male', 'pending', '0', '0', '0', '0', '', '', '', 0),
(12, 'doctor', 'Sacha Douglas', '', NULL, '', '0000-00-00', NULL, '', '', '', 'pending', NULL, NULL, NULL, NULL, '', '', '', 0),
(13, 'patient', 'Nissim Hendricks', 'xolaku@mailinator.com', NULL, 'Pa$$w0rd!', '2013-08-01', 'Pariatur Rem in non', NULL, NULL, 'male', 'pending', NULL, NULL, NULL, NULL, '', '', '', 0),
(14, 'patient', 'Bevis Cannon', 'tygamej@mailinator.com', NULL, 'Pa$$w0rd!', '2019-07-09', 'Vitae sint veniam ', NULL, '331516', 'male', 'pending', NULL, NULL, NULL, NULL, 'Tempor cupidatat qui', '954', '365', 1),
(15, 'doctor', 'Brooke Robbins', 'walicaquta@mailinator.com', NULL, 'Pa$$w0rd!', '1978-03-09', '', 'Eum molestias dolore', NULL, 'male', 'pending', NULL, NULL, NULL, NULL, '', '', '', 0),
(16, 'patient', 'Eleanor Ruiz', 'zefaci@mailinator.com', NULL, 'Pa$$w0rd!', '2002-06-21', 'Hic amet suscipit i', NULL, '493302', 'male', 'pending', NULL, NULL, NULL, NULL, 'Natus nihil consecte', '851', '189', 1),
(17, 'doctor', 'Blaine Pope', 'buva@mailinator.com', NULL, 'Pa$$w0rd!', '1976-10-31', '', 'Earum in iste velit ', '972279', 'male', 'pending', NULL, '24.8607343', '67.0011364', NULL, 'Voluptatem Est sapi', '974', '326', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
